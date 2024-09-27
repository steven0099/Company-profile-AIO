<?php

namespace App\Models;

use CodeIgniter\Model;

class HeroModel extends Model
{
    protected $table = 'hero_slides';
    protected $primaryKey = 'id';
    protected $allowedFields = ['image', 'title', 'description', 'slide_order'];

    // Optional: Add timestamps if you need automatic created_at and updated_at handling
    protected $useTimestamps = true;
}
