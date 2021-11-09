<?php

namespace App\Controllers;

use App\Models\EndorsementModel;

class Endorsement extends BaseController
{
    protected $endorsementModel;
    public function __construct()
    {
        $this->endorsementModel = new EndorsementModel();
    }

    public function index()
    {
        $data = [
            'title' => "Endorsement",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Endorsement'],
            'endorse' => $this->endorsementModel,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/endorsement', $data);
    }

    public function delete($id)
    {
        $endorsement = $this->endorsementModel->find($id);
        if (basename($endorsement->endorsementFlayer) != "endorsement.png") {
            unlink('endorsements/' . basename($endorsement->endorsementFlayer));
        }
        $this->endorsementModel->delete($id);
        return redirect()->to('endorsement');
    }

    public function add()
    {
        if (!$this->validate([
            'endorsementFlayer' => [
                'rules' => 'max_size[endorsementFlayer,5120]|mime_in[endorsementFlayer,image/png]|is_image[endorsementFlayer]|max_dims[endorsementFlayer,960,1280]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'mime_in' => 'Yang anda Pilih bukan gambar',
                    'is_image' => 'Yang anda Pilih bukan gambar',
                    'max_dims' => 'Dimensi gambar salah, gunakan 960px X 1280px'
                ]
            ],
            'endorsementNama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Endorsement Harus Diisi',
                ]
            ],
            'endorsementDeskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Endorsement Harus Diisi',
                ]
            ],
        ])) {
            return redirect()->to('endorsement')->withInput();
        }

        $fileFlayer = $this->request->getFile('endorsementFlayer');
        if ($fileFlayer->getError() == 4) {
            $namaFile = 'endorsement.png';
        } else {
            $namaFile = $fileFlayer->getRandomName();
            $fileFlayer->move('endorsements', $namaFile);
        }

        $data = array(
            'endorsementFlayer' => base_url('endorsements/' . $namaFile),
            'endorsementNama' => $this->request->getPost('endorsementNama'),
            'endorsementTanggalAwal' => $this->request->getPost('endorsementTanggalAwal'),
            'endorsementTanggalAkhir' => $this->request->getPost('endorsementTanggalAkhir'),
            'endorsementDeskripsi' => $this->request->getPost('endorsementDeskripsi'),
        );

        if ($this->endorsementModel->insert($data)) {
            return redirect()->to('endorsement');
        }
    }
}
