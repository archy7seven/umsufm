<?php

namespace App\Controllers;
use App\Models\PenyiarModel;
use App\Models\AcaraModel;
use App\Models\EndorsementModel;

class Home extends BaseController
{
    public function index()
    {
        $penyiarModel = new PenyiarModel();
        $acaraModel = new AcaraModel();
        $endorsementModel = new EndorsementModel();
        $data = [
            'title' => "Home", 
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home','Dashboard'],
            'jumlah_penyiar'=> $penyiarModel->where(['penyiarStatus'=>1]),
            'jumlah_acara_aktif'=> $acaraModel->where(['acaraStatus'=>1,'acaraArsip'=>1]),
            'jumlah_acara_segera'=> $acaraModel->where(['acaraStatus'=>0,'acaraArsip'=>1]),
            'jumlah_acara_arsip'=> $acaraModel->where('acaraArsip',0),
            'jumlah_endors'=> $endorsementModel->where('endorsmentNama',null),
        ];
        return view('pages/home',$data);
    }
}
