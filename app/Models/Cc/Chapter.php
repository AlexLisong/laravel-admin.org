<?php

namespace App\Models\Cc;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'cc_chapters';

    public function activity()
    {
        return $this->belongsTo(activity::class,'cc_activity_id');
    }

}
