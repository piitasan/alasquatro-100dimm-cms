<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/aq_home');
    }

    public function collection(): string
    {
        return view('pages/aq_collections');
    }

    public function about(): string
    {
        return view('pages/aq_about');
    }
}
