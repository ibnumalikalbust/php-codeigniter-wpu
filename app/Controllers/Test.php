<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        echo 'This Controller Test Method Index';
    }

    public function about($name = 'Habibullah', $age = '25')
    {
        echo 'This Controller Test Method About' . '<br>';
        echo 'My Name Is ' . ucwords($name) . '<br>';
        echo 'My Age Is ' . $age . '<br>';
    }
}
