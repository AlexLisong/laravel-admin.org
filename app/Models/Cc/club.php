<?php

namespace App\Models\Cc;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
	protected $table = 'cc_clubs';

	public function user()
	{
		return $this->belongsTo(User::class,'teacher_id');
	}

	public function theme()
	{
		return $this->belongsTo(Theme::class,'cc_theme_id');
	}
}
