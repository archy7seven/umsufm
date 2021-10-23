<?php

namespace App\Controllers;

class Penyiar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Penyiar", 
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home','Penyiar']
        ];
        return view('pages/penyiar',$data);
    }
}
