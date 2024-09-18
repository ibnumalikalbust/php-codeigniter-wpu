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

    public function detail($slug)
    {
		$data['title'] = 'Comic Detail';
        $data['comic'] = $this->model->getFirstComicBySlug($slug);
        return view('comic/detail', $data);
    }
}