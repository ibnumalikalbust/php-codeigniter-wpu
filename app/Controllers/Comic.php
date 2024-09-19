<?php

namespace App\Controllers;

use App\Models\ComicModel;

class Comic extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ComicModel;
    }

    public function index()
    {
		$data['title'] = 'Comic List';
        $data['comics'] = $this->model->getAllComic();
        return view('comic/index', $data);
    }

    public function detail($slug = null)
    {
		$data['title'] = 'Comic Detail';
        $data['comic'] = $this->model->getFirstComicBySlug($slug);
        return view('comic/detail', $data);
    }

    public function insertget()
    {
        $data['title'] = 'Comic Insert';
        $flashData = session()->getFlashdata();
        if (isset($flashData['_ci_old_input']['post'])) {
            $data['postInput'] = $flashData['_ci_old_input']['post'];
        }
        if (isset($flashData['_ci_validation_errors'])) {
            $data['postError'] = $flashData['_ci_validation_errors'];
        }
        return view('comic/insert', $data);
    }

    public function insertpost()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required|is_unique[comic.title]',
            'author' => 'required',
            'publisher' => 'required',
            'image' => 'required'
        ]);
        if ($validation->withRequest($this->request)->run() == true) {
            $data = $this->request->getPost();
            $message = $this->model->insertNewComic($data);
            session()->setFlashData('message', $message);
            return redirect()->to(base_url(('/comic')));
        } else {
            return redirect()->to(base_url('/comic/insertget'))->withInput();
        }
    }
}