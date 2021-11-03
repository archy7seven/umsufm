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
        // dd($data);
        if ($this->acaraModel->insert($data)) {
            return redirect()->to('acara');
        }
    }
}
