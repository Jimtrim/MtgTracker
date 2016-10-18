<?php

namespace MtgTracker\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
	protected $fillable = [
		'datetime',
		'players',
		'format',
		'creator_id'
	];

	public function creator() {
		return $this->belongsTo( '\MtgTracker\Models\User', 'creator_id', 'id' );
	}

	public function players() {
		return $this->hasMany( '\MtgTracker\Models\Player', 'players', 'id' );
	}
    //
}
