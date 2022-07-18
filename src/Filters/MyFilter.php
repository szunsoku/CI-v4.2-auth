<?php

namespace Szunsoku\Auth\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        echo "FFFFFFFFFFFFFFFFFFFFFFFF";
        // $auth = service('auth');

        // if (! $auth->isLoggedIn()) {
        //     return redirect()->to(site_url('login'));
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        echo "FFFFFFFFFFFFFFFFFFFFFFFF";
        
    }
}