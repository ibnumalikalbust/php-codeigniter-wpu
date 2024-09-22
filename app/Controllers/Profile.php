<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Profile extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProfileModel;
    }
    
    public function index()
    {
        $data['title'] = 'Profile Index';
        $data['author'] = 'Habibullah';
        return view('profile/index', $data);
    }

    public function about()
    {
        $data['title'] = 'Profile About';
        $data['person'] = $this->model->getFakeData();
        return view('profile/about', $data);
    }

    public function contact()
    {
        $data['title'] = 'Profile Contact';
        $data['contact']['facebook'] = 'https://facebook.com/ibnumalikalbust';
        $data['contact']['instagram'] = 'https://instagram.com/ibnumalikalbust';
        $data['contact']['twitter'] = 'https://twitter.com/ibnumalikalbust';
        $data['contact']['tiktok'] = 'https://tiktok.com/ibnumalikalbust';
        return view('profile/contact', $data);
    }
}
