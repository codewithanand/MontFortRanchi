<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Image;

class Gallery extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(Image::class, 'gallery_id', 'id');
    }
}
