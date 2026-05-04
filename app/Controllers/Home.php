<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $videoModel = new \App\Models\HeroVideoModel();
        $currentVideo = $videoModel->where('is_active', 1)->orderBy('created_at', 'DESC')->first();

        $heroVideoUrl = $currentVideo
            ? base_url('media/hero-video/' . $currentVideo['stored_name'])
            : base_url('assets/videos/aq_intro_compressed.mp4');

        return view('pages/aq_home', [
            'heroVideoUrl' => $heroVideoUrl,
        ]);
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
