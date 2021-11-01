<?php

namespace App\Controllers;

use App\Models\SettingModel;

class Setting extends BaseController
{


    public function index()
    {
        $settingModel = new SettingModel();
        // dd($settingModel);
        $data = [
            'title' => "Setting",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Setting'],
            'setting' => $settingModel
        ];
        return view('pages/setting', $data);
    }
}
