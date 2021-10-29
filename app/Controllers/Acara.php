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
            'breadcrumb' => ['Home','Acara'],
            'acara'=> $acaraModel->findAll()
        ];
        return view('pages/acara',$data);
    }
}
