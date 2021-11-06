<?php

namespace App\Controllers;

use App\Models\OperatorModel;

class Operator extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Login",
            'appName' => "UMSU FM"
        ];
        return view('pages/login', $data);
    }


    public function register()
    {

        $operatorModel = new OperatorModel();
        $operatorModel->insert([
            'operatorNama' => $this->request->getVar('nama'),
            'operatorUsername' => $this->request->getVar('username'),
            'operatorPassword' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);
        # code...
    }
}
