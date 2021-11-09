<?php

namespace App\Controllers;

use App\Models\EndorsementModel;

class Endorsement extends BaseController
{
    public function index()
    {
        $endorsementModel = new EndorsementModel();
        $data = [
            'title' => "Endorsement",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Endorsement'],
            'endorse' => $endorsementModel,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/endorsement', $data);
    }

    public function add()
    {
        if (!$this->validate([
            'endorsementFlayer' => [
                'rules' => 'max_size[endorsementFlayer,5120]|mime_in[endorsementFlayer,image/png]|is_image[endorsementFlayer],max_dims[endorsementFlayer,960,1280]',
                'error' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'mime_in' => 'Yang anda Pilih bukan gambar',
                    'is_image' => 'Yang anda Pilih bukan gambar'
                ]
            ],
            'endorsementNama' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Nama Endorsement Harus Diisi',
                ]
            ],
            'endorsementDeskripsi' => [
                'rules' => 'required',
                'error' => [
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
        dd($data);
    }
}
