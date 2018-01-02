<?php

namespace App\Models\Cc;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'cc_activities';

    public function theme()
    {
        return $this->belongsTo(theme::class,'cc_theme_id');
    }

}