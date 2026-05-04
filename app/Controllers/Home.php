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

    public function contact(): string
    {
        return view('pages/aq_contact');
    }

    public function privacy(): string
    {
        return view('pages/aq_privacy');
    }

    public function signup(): string
    {
        return view('auth/aq_signup');
    }

    public function signin(): string
    {
        return view('auth/aq_signin');
    }
}
