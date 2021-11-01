<?php

namespace App\Controllers;

use App\Models\AcaraModel;

class Acara extends BaseController
{
    public function index()
    {
        $acaraModel = new AcaraModel();
        $data = [
            'title' => "Acara",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Acara'],
            'acara' => $acaraModel->join('penyiar', 'penyiar.penyiarId = acara.acaraPenyiar', 'LEFT')
        ];
        return view('pages/acara', $data);
    }
}
