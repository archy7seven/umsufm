<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UsersAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // dd(session()->get('logged_in'));
        if (is_null(session()->get('logged_in')) || session()->get('logged_in') == false) {
            return redirect()->to('/radio/index');
        }

        // if (session()->get('logged_in') == true) {
        //     return redirect()->to('/home/index');
        // }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
