<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data['title'] = 'Profile Home';
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('profile/index');
        echo view('layout/footer');
    }

    public function about()
    {
        $data['title'] = 'Profile About';
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('profile/about');
        echo view('layout/footer');
    }

    public function contact()
    {
        $data['title'] = 'Profile Contact';
        $data['contact']['facebook'] = 'https://facebook.com/ibnumalikalbust';
        $data['contact']['instagram'] = 'https://instagram.com/ibnumalikalbust';
        $data['contact']['twitter'] = 'https://twitter.com/ibnumalikalbust';
        $data['contact']['tiktok'] = 'https://tiktok.com/ibnumalikalbust';
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('profile/contact');
        echo view('layout/footer');
    }
}
