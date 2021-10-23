<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home", 
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home','Dashboard']
        ];
        return view('pages/home',$data);
    }
}
