<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function auth(): string
    {
        return view('dev/auth/aq_admin_auth');
    }

    public function login()
    {
        $username = trim((string) $this->request->getPost('username'));
        $password = (string) $this->request->getPost('password');

        if ($username === '' || $password === '') {
            return redirect()->back()->with('error', 'Username and password are required.');
        }

        $userModel = new \App\Models\UserModel();

        $user = $userModel->where([
            'username' => $username,
            'role' => 'admin',
            'is_active' => 1,
        ])->first();

        if (!$user || !password_verify($password, $user['password_hash'])) {
            return redirect()->back()->with('error', 'Invalid username or password.');
        }

        session()->set([
            'admin_id' => $user['user_id'],
            'admin_username' => $user['username'],
            'admin_role' => $user['role'],
            'is_admin_logged_in' => true,
        ]);

        return redirect()->to('/admin/dashboard');
    }

    public function dashboard()
    {
        if (!session()->get('is_admin_logged_in')) {
            return redirect()->to('/admin');
        }

        return view('dev/aq_dashboard', [
            'activePage' => 'dashboard',
        ]);
    }

    public function heroVideo()
    {
        if (!session()->get('is_admin_logged_in')) {
            return redirect()->to('/admin');
        }

        $videoModel = new \App\Models\HeroVideoModel();
        $currentVideo = $videoModel->where('is_active', 1)->orderBy('created_at', 'DESC')->first();

        return view('dev/management/aq_hero_trailer', [
            'activePage' => 'video',
            'currentVideo' => $currentVideo,
        ]);
    }

    public function updateHeroVideo()
    {
        if (!session()->get('is_admin_logged_in')) {
            return redirect()->to('/admin');
        }

        $validation = \Config\Services::validation();
        $validation->setRules([
            'hero_video' => 'uploaded[hero_video]|max_size[hero_video,512000]|mime_in[hero_video,video/mp4,video/webm,video/ogg]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('error', $validation->getError('hero_video') ?? 'Upload failed.');
        }

        $file = $this->request->getFile('hero_video');
        if (!$file || !$file->isValid()) {
            return redirect()->back()->with('error', 'Upload failed.');
        }

        $uploadDir = WRITEPATH . 'uploads/video';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $storedName = $file->getRandomName();
        $file->move($uploadDir, $storedName);

        $videoModel = new \App\Models\HeroVideoModel();
        $videoModel->where('is_active', 1)->set(['is_active' => 0])->update();

        $videoModel->insert([
            'original_name' => $file->getClientName(),
            'stored_name' => $storedName,
            'file_path' => 'uploads/video/' . $storedName,
            'mime_type' => $file->getClientMimeType(),
            'file_size' => $file->getSize(),
            'is_active' => 1,
        ]);

        return redirect()->back()->with('success', 'Hero video updated.');
    }
}
