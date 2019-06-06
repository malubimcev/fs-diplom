<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['start_time'];
    protected $table = 'sessions';

    public function hall() {
        return $this->belongsTo('App\Hall', 'hall_id', 'id');
    }

    public function movie() {
        return $this->belongsTo('App\Movie', 'movie_id', 'id');
    }
}
