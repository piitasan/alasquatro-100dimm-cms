<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function auth(): string
    {
        return view('auth/aq_admin_auth');
    }

    public function dashboard(): string
    {
        return view('dev/aq_dashboard');
    }
}
