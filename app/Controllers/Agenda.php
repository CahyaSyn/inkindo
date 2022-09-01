<?php

namespace App\Controllers;

use App\Models\AgendaModel;

class Agenda extends BaseController
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
            'agenda' => $this->AgendaModel->paginate(1, 'tabel_agenda'),
            'pager' => $this->AgendaModel->pager
        ];
        return view('homepage/index', $data);
    }

}
