<?php

namespace App\Controllers;

use App\Models\PenyiarModel;
use App\Models\AcaraModel;
use App\Models\EndorsementModel;
use App\Models\SettingModel;
use \Myth\Auth\Models\UserModel;


class Home extends BaseController
{
    protected $settingModel;
    protected $penyiarModel;
    protected $acaraModel;
    protected $endorsementModel;
    protected $users;
    public function __construct()
    {
        $this->settingModel = new SettingModel();
        $this->penyiarModel = new PenyiarModel();
        $this->acaraModel = new AcaraModel();
        $this->endorsementModel = new EndorsementModel();
        // $this->users = new UserModel();
    }

    public function index()
    {
        // dd(user());
        $data = [
            'title' => "Home",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Dashboard'],
            'jumlah_penyiar' => $this->penyiarModel,
            'acara' => $this->acaraModel,
            'jumlah_endors' => $this->endorsementModel,
            'setting' => $this->settingModel,
            'validation' => \Config\Services::validation(),
        ];
        return view('pages/home', $data);
    }

    public function streamEdit($id)
    {
        if (!$this->validate([
            'configValue' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Stream Add Harus Diisi',
                ]
            ],
        ])) {
            return redirect()->to('home')->withInput();
        }

        $data = array(
            'configValue' => $this->request->getPost('configValue'),
        );

        if ($this->settingModel->update($id, $data)) {
            session()->setFlashdata('success', 'Berhasil Diubah !');
            return redirect()->to('home');
        }
    }
}
