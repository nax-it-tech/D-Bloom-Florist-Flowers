<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home', [
            'title'     => "Home",
            'imgPath'   => base_url('img'),
            'assetPath' => base_url('aseets/plantly-free-version/plantly-free-version'),
            'waNumber'  => '6288218247268',
        ]);
    }
}
