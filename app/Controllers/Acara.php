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
}
