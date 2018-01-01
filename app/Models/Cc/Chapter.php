<?php

namespace App\Models\Cc;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'cc_chapters';

    public function activitie()
    {
        return $this->belongsTo(activitie::class,'cc_activity_id');
    }

}
