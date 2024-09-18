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
        $comics = $this->model->findAll();
		$data['title'] = 'Comic List';
        $data['comics'] = $comics;
        return view('comic/index', $data);
    }
}
