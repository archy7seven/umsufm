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
        ];
        return view('pages/penyiar', $data);
    }

    public function delete($id)
    {
        $this->penyiarModel->delete($id);
        return redirect()->to('penyiar');
    }

    public function edit($id)
    {

        $data = array(
            "penyiarNama" => $this->request->getPost('penyiar'),
            "penyiarStatus" => $this->request->getPost('isHuman')
        );

        $penyiar = $this->penyiarModel->where('penyiarId', $id);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'penyiar' => 'required',
            'isHuman' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid && $penyiar->countAllResults() > 0) {
            $this->penyiarModel->update($id, $data);
        }
        return redirect()->to('penyiar');
    }
}
