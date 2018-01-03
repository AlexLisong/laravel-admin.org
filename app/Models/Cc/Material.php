<?php

namespace App\Models\Cc;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'cc_materials';

    public function theme()
    {
        return $this->belongsTo(Theme::class,'cc_theme_id');
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class,'cc_activity_id');
    }

}
