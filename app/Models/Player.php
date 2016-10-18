<?php

namespace MtgTracker\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $fillable = [
		'firstName',
		'lastName',
		'DCI',
		'tournaments',
	];

	public function tournaments() {
		return $this->belongsToMany('MtgTracker\Models\Tournament', 'tournaments', 'id' );
	}
}
