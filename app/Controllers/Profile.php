<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data['title'] = 'Profile Home';
        return view('profile/index', $data);
    }

    public function about()
    {
        $data['title'] = 'Profile About';
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
