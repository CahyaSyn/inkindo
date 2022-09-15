<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        return view('homepage/login', [
            'title' => 'Login | Inkindo'
        ]);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Email tidak valid',
                    'is_unique' => 'Email sudah terdaftar'
                ]
            ],
            'no_telp' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'No. Telp harus diisi',
                    'numeric' => 'No. Telp harus angka'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 6 karakter'
                ]
            ],
            'password_confirm' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi password harus diisi',
                    'matches' => 'Konfirmasi password tidak sesuai'
                ]
            ],
        ])) {
            return redirect()->to('/user/register')->withInput();
        }

        $user_object = new UserModel();

        $user_object->insert([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'role' => 'anggota',
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);

        session()->setFlashdata('pesan', 'Pendaftaran berhasil, silahkan login.');

        return redirect()->to('/user');
    }

    public function login()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/user')->withInput();
        }

        $user_object = new UserModel();

        $user = $user_object->where('email', $this->request->getVar('email'))->first();

        if ($user) {
            if (password_verify($this->request->getVar('password'), $user['password'])) {
                $data = [
                    'id' => $user['id'],
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                    'no_telp' => $user['no_telp'],
                    'role' => $user['role'],
                    'isLoggedIn' => true
                ];

                session()->set($data);

                return redirect()->to('/home');
            } else {
                session()->setFlashdata('pesan', 'Password salah.');

                return redirect()->to('/user');
            }
        } else {
            session()->setFlashdata('pesan', 'Email tidak terdaftar.');

            return redirect()->to('/user');
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/user');
    }
}
