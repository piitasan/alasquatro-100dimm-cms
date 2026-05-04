<?php

namespace App\Models;

use CodeIgniter\Model;

class HeroVideoModel extends Model
{
    protected $table = 'hero_videos';
    protected $primaryKey = 'video_id';
    protected $allowedFields = [
        'original_name',
        'stored_name',
        'file_path',
        'mime_type',
        'file_size',
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
