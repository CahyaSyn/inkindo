<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'agenda';
    protected $useTimestamps = true;
    protected $allowedFields = ['image', 'judul', 'lokasi', 'tanggal', 'waktu', 'deskripsi'];
}
