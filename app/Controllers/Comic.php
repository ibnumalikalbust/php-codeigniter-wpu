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
        $data = $this->request->getPost();
        $validation = \Config\Services::validation();
        $rules['title'] = 'required|is_unique[comic.title]';
        $rules['author'] = 'required';
        $rules['publisher'] = 'required';
        $rules['image'] = 'required';
        $validation->setRules($rules);
        if ($validation->withRequest($this->request)->run() == true) {
            $message = $this->model->insertNewComic($data);
            session()->setFlashData('message', $message);
            return redirect()->to(base_url('/comic'));
        } else {
            return redirect()->to(base_url('/comic/insertget'))->withInput();
        }
    }

    public function updateget($slug = null) {
        $data['title'] = 'Comic Update';
        $slugGet = $slug;
        $post = $this->request->getPost();
        $slugPost = isset($post['slug']) ? $post['slug'] : null;
        if ($slugGet ==  $slugPost) {
            $data['comic'] = $this->model->getFirstComicBySlug($slug);
            return view('comic/update', $data);
        } else {
            $flashData = session()->getFlashdata();
            if ($flashData) {
                $data['comic'] = $this->model->getFirstComicBySlug($slug);
                if (isset($flashData['_ci_old_input']['post'])) {
                    $data['postInput'] = $flashData['_ci_old_input']['post'];
                }
                if (isset($flashData['_ci_validation_errors'])) {
                    $data['postError'] = $flashData['_ci_validation_errors'];
                }
                return view('comic/update', $data);
            }
            return redirect()->to(base_url('/comic'));
        }
    }

    public function updatepost($slug = null) {
        $slugGet = $slug;
        $post = $this->request->getPost();
        $slugPost = isset($post['slug']) ? $post['slug'] : null;
        if ($slugGet ==  $slugPost) {
            $validation = \Config\Services::validation();
            $oldTitle = $this->model->getFirstComicBySlug($slug)['title'];
            $newTitle = $post['title'];
            if ($oldTitle == $newTitle) {
                $rules['title'] = 'required';
            } else {
                $rules['title'] = 'required|is_unique[comic.title]';
            }
            $rules['author'] = 'required';
            $rules['publisher'] = 'required';
            $rules['image'] = 'required';
            $validation->setRules($rules);
            if ($validation->withRequest($this->request)->run() == true) {
                $message = $this->model->updateComicBySlug($slug, $post);
                session()->setFlashData('message', $message);
                return redirect()->to(base_url('/comic'));
            } else {
                return redirect()->to(base_url('/comic/updateget/') . $slug)->withInput();
            }
        } else {
            return redirect()->to(base_url('/comic'));
        }
    }

    public function delete($slug = null) {
        $slugGet = $slug;
        $post = $this->request->getPost();
        $slugPost = isset($post['slug']) ? $post['slug'] : null;
        if ($slugGet ==  $slugPost) {
            $message = $this->model->deleteComicBySlug($slug);
            session()->setFlashData('message', $message);
            return redirect()->to(base_url('/comic'));
        } else {
            return redirect()->to(base_url('/comic'));
        }
    }
}