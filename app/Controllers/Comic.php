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
        if (is_null($slug)) {
            return redirect()->to(base_url('/comic'));
        } else {
            $data['comic'] = $this->model->getFirstComicBySlug($slug);
            return view('comic/detail', $data);
        }
    }

    public function insertget()
    {
        $data['title'] = 'Comic Insert';
        return view('comic/insert', $data);
    }

    public function insertpost()
    {
        $data = $this->request->getPost();
        $message = $this->model->insertNewComic($data);
        session()->setFlashData('message', $message);
        return redirect()->to(base_url(('/comic')));
    }
}