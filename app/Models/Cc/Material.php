<?php

namespace App\Models\Cc;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'cc_materials';

    public function theme()
    {
        return $this->belongsTo(theme::class,'cc_theme_id');
    }

    public function activity()
    {
        return $this->belongsTo(activity::class,'cc_activity_id');
    }

}
