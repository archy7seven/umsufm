<?php

namespace App\Controllers;

class Radio extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Login", 
            'appName' => "UMSU FM"
        ];
        return view('pages/login',$data);
    }
}
