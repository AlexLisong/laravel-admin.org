<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicFile extends Model
{
    protected $table = 'demo_files';

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable', 'demo_taggables');
    }
}