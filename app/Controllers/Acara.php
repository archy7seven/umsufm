<?php

namespace App\Controllers;

use App\Models\AcaraModel;
use App\Models\PenyiarModel;

class Acara extends BaseController
{
    protected $acaraModel;
    protected $penyiarModel;
    public function __construct()
    {
        $this->acaraModel = new AcaraModel();
        $this->penyiarModel = new PenyiarModel();
    }
    public function index()
    {
        $data = [
            'title' => "Acara",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Acara'],
            'acara' => $this->acaraModel->join('penyiar', 'penyiar.penyiarId = acara.acaraPenyiar', 'LEFT'),
            'penyiar' => $this->penyiarModel,
            'validation' => \Config\Services::validation(),
        ];
        return view('pages/acara', $data);
    }

    public function delete($id)
    {
        $this->acaraModel->delete($id);
        return redirect()->to('acara');
    }

    public function add()
    {
        if (!$this->validate([
            'flayer' => [
                'rules' => 'uploaded[flayer]|max_size[flayer,5120]|mime_in[flayer,image/png]|is_image[flayer]',
                'error' => [
                    'uploaded' => 'Nama Penyiar Harus Diisi',
                    'max_size' => 'Ukuran gambar terlalu bersar',
                    'mime_in' => 'Yang anda Pilih bukan gambar',
                    'is_image' => 'Yang anda Pilih bukan gambar'
                ]
            ],
            'acaraNama' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Nama Acara Harus Diisi',
                ]
            ],
            'acaraPenyiar' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Penyiar Harus Dipilih',
                ]
            ],
            'acaraHari' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Hari Acara Harus Diisi',
                ]
            ],
            'acaraJamMulai' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Acara jam mulai harus diisi',
                ]
            ],
            'acaraJamAkhir' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Acara jam akhir harus diisi',
                ]
            ],
            'acaraStatus' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Acara Status harus dipilih',
                ]
            ],
            'acaraArsip' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Acara arsip harus dipilih',
                ]
            ],
        ])) {
            return redirect()->to('acara')->withInput();
        }

        $fileFlayer = $this->request->getFile('flayer');
        $namaFile = $fileFlayer->getRandomName();
        $fileFlayer->move('uploads', $namaFile);


        $data = array(
            'acaraFlayer' => base_url('uploads/' . $namaFile),
            'acaraNama' => $this->request->getPost('acaraNama'),
            'acaraPenyiar' => $this->request->getPost('acaraPenyiar'),
            'acaraHari' => $this->request->getPost('acaraHari'),
            'acaraJamMulai' => $this->request->getPost('acaraJamMulai'),
            'acaraJamAkhir' => $this->request->getPost('acaraJamAkhir'),
            'acaraStatus' => $this->request->getPost('acaraStatus'),
            'acaraArsip' => $this->request->getPost('acaraArsip') == null ? 1 : 0
        );

        if ($this->acaraModel->insert($data)) {
            return redirect()->to('acara');
        }
    }
}
