<?php

namespace App\Controllers;

use Stevy\Framework\Controller\Controller;

class ExampleController extends Controller
{
    /**
     * un exemple de controller avec retour de vue dans views/pages/hello-world
     *
     * @return void
    */
    public function index()
    {
        return $this->view('pages.hello-world');
    }
}
