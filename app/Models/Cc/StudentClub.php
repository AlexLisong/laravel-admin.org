<?php

namespace App\Models\Cc;

use App\Models\User;
use App\Models\Cc\Club;
use Illuminate\Database\Eloquent\Model;

class StudentClub extends Model
{
	protected $table = 'cc_student_clubs';

	public function user()
	{
		return $this->belongsTo(User::class,'student_id');
	}

	public function club()
	{
		return $this->belongsTo(Club::class,'cc_club_id');
	}
}
