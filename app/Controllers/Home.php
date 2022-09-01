<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('homepage/home', [
            'title' => 'Home | Inkindo'
        ]);
    }

    public function prakata()
    {
        return view('homepage/prakata', [
            'title' => 'Prakata | Inkindo'
        ]);
    }
}
