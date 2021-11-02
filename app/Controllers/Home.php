<?php

namespace App\Controllers;

use App\Models\PenyiarModel;
use App\Models\AcaraModel;
use App\Models\EndorsementModel;
use App\Models\SettingModel;

class Home extends BaseController
{
    protected $settingModel;
    protected $penyiarModel;
    protected $acaraModel;
    protected $endorsementModel;
    public function __construct()
    {
        $this->settingModel = new SettingModel();
        $this->penyiarModel = new PenyiarModel();
        $this->acaraModel = new AcaraModel();
        $this->endorsementModel = new EndorsementModel();
    }

    public function index()
    {
        $data = [
            'title' => "Home",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Dashboard'],
            'jumlah_penyiar' => $this->penyiarModel,
            'acara' => $this->acaraModel,
            'jumlah_endors' => $this->endorsementModel,
            'setting' => $this->settingModel
        ];
        return view('pages/home', $data);
    }
}
