<?php

namespace App\Controllers;

use App\Models\AgendaModel;

class Home extends BaseController
{
    protected $AgendaModel;

    public function __construct()
    {
        $this->AgendaModel = new AgendaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Agenda',
            'agenda' => $this->AgendaModel->findAll()
        ];
        return view('homepage/index', $data);
    }

}
