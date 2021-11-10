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
    }

    public function index()
    {
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
        dd($_POST);
        if (!$this->validate([
            'streamAdd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Stream Add Harus Diisi',
                ]
            ],
        ])) {
            return redirect()->to('home')->withInput();
        }

        $data = array(
            'configValue' => $this->request->getPost('streamAdd'),
        );

        if ($this->settingModel->update($id, $data)) {
            session()->setFlashdata('success', 'Berhasil Diubah !');
            return redirect()->to('home');
        }
    }

    public function logoAppEdit($id)
    {
        dd($_POST);
        if (!$this->validate([
            'settingLogoApp' => [
                'rules' => 'max_size[flayer,5120]|mime_in[flayer,image/png]|is_image[flayer]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'mime_in' => 'Yang anda Pilih bukan gambar',
                    'is_image' => 'Yang anda Pilih bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('home')->withInput();
        }

        $fileFlayer = $this->request->getFile('settingLogoApp');
        $width = getimagesize($fileFlayer)[0];
        $height = getimagesize($fileFlayer)[1];

        if ($width != 512 && $height != 512) {
            session()->setFlashdata('error', 'Dimensi gambar salah, gunakan 512px X 512px');
            return redirect()->back();
        }

        $data = array(
            'configValue' => $this->request->getPost('settingLogoApp'),
        );

        if ($this->settingModel->update($id, $data)) {
            session()->setFlashdata('success', 'Berhasil Diubah !');
            return redirect()->to('home');
        }
    }
}
