<?php

namespace App\Controllers;

use App\Models\PopulationModel;

class Population extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PopulationModel;
    }

    public function index()
    {
		$data['title'] = 'Population List';
		$keyword = $this->request->getGet('keyword');
		$data['populations'] = $this->model->getPopulations($keyword);
		$data['pager'] = $this->model->pager;
		return view('population/index', $data);
    }
}