<?php

namespace App\Controllers;

use App\Models\AgendaModel;

class Home extends BaseController
{
    public function index()
    {
        // $data = [
        //     'agenda' => $this->AgendaModel->paginate(1, 'agenda'),
        //     'pager' => $this->AgendaModel->pager,
        // ];

        return view('homepage/home', [
            'title' => 'Home | Inkindo'
        ]);
    }

    public function prakata()
    {
        return view('profil_inkindo/prakata', [
            'title' => 'Prakata | Inkindo'
        ]);
    }

    public function kodeetik()
    {
        return view('profil_inkindo/kodeetik', [
            'title' => 'Kode Etik | Inkindo'
        ]);
    }

    public function visimisi()
    {
        return view('profil_inkindo/visimisi', [
            'title' => 'Visi Misi | Inkindo'

        ]);
    }

    public function struktur()
    {
        return view('profil_inkindo/struktur_organisasi', [
            'title' => 'Struktur | Inkindo'

        ]);
    }

    public function syaratanggota()
    {
        return view('keanggotaan/syarat_anggota', [
            'title' => 'Syarat Anggota | Inkindo'
        ]);
    }
}
