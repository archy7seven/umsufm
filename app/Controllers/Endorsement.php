<?php

namespace App\Controllers;

class Endorsement extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Endorsement", 
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home','Endorsement']
        ];
        return view('pages/endorsement',$data);
    }
}
