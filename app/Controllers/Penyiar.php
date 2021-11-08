<?php

namespace App\Controllers;

use App\Models\PenyiarModel;


class Penyiar extends BaseController
{
    protected $penyiarModel;
    public function __construct()
    {
        $this->penyiarModel = new PenyiarModel();
    }


    public function index()
    {
        $data = [
            'title' => "Penyiar",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Penyiar'],
            'penyiar' => $this->penyiarModel->findAll(),
            'validation' => \Config\Services::validation(),
        ];

        return view('pages/penyiar', $data);
    }

    public function delete($id)
    {
        $this->penyiarModel->delete($id);
        return redirect()->to('penyiar');
    }

    public function add()
    {
        if (!$this->validate([
            'penyiarNama' => [
                'rules' => 'required|is_unique[penyiar.penyiarNama]',
                'error' => [
                    'required' => 'Nama Penyiar Harus Diisi',
                    'is_unique' => 'Nama Penyiar Sudah terdaftar',
                ]
            ],
            'isHuman' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Tipe Penyiar Harus Dipilih',
                ]
            ],
        ])) {
            return redirect()->to('penyiar')->withInput();
        }


        $data = array(
            'penyiarNama' => $this->request->getPost('penyiarNama'),
            'penyiarStatus' => $this->request->getPost('isHuman')
        );
        $this->penyiarModel->insert($data);
        return redirect()->to('penyiar');
    }

    public function edit($id)
    {

        //validation
        if (!$this->validate([
            'penyiar' => ['required|is_unique[penyiar.penyiarNama]'],
        ])) {
            return redirect()->to('/penyiar');
        }

        $data = array(
            "penyiarNama" => $this->request->getPost('penyiarNama'),
            "penyiarStatus" => $this->request->getPost('isHuman')
        );

        $penyiar = $this->penyiarModel->where('penyiarId', $id);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'penyiarNama' => 'required',
            'isHuman' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid && $penyiar->countAllResults() > 0) {
            $this->penyiarModel->update($id, $data);
        }
        return redirect()->to('penyiar');
    }
}
