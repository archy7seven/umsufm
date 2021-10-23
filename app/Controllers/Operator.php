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
        return view('pages/login',$data);
    }

    public function auth()
    {
        
        $operatorUsername = $this->request->getVar('username');
        $operatorPassword = $this->request->getVar('password');
        $operatorModel = new OperatorModel();
        $operator=$operatorModel->where(['operatorUsername'=>$operatorUsername])->first();
        if ($operator) {
            if (password_verify($operatorPassword, $operator->operatorPassword)) {
                session()->set([
                    'username' => $operator->operatorUsername,
                    'name' => $operator->operatorNama,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
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

    function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
