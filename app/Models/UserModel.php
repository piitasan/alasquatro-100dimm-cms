<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'aq_user_tbl';
    protected $primaryKey = 'user_id';

    protected $allowedFields = [
        'username',
        'email',
        'password_hash',
        'role',
        'is_active',
        'last_login_at',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = false;
}