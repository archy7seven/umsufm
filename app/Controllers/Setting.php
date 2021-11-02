<?php

namespace App\Controllers;

use App\Models\SettingModel;

class Setting extends BaseController
{
    protected $settingModel;
    public function __construct()
    {
        $this->settingModel = new SettingModel();
    }

    public function index()
    {
        // dd($settingModel);
        $data = [
            'title' => "Setting",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Setting'],
            'setting' => $this->settingModel
        ];
        return view('pages/setting', $data);
    }
}
