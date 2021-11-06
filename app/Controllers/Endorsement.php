<?php

namespace App\Controllers;

use App\Models\EndorsementModel;

class Endorsement extends BaseController
{
    public function index()
    {
        $endorsementModel = new EndorsementModel();
        $data = [
            'title' => "Endorsement",
            'appName' => "UMSU FM",
            'breadcrumb' => ['Home', 'Endorsement'],
            'endorse' => $endorsementModel
        ];
        return view('pages/endorsement', $data);
    }
}
