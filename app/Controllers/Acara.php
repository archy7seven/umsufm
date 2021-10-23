<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Acara", 
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home','Acara']
        ];
        return view('pages/acara',$data);
    }
}
