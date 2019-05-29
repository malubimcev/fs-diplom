<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = ['title', 'rows_count', 'seats_count'];
    protected $table = 'halls';

    public function seats() {
        return $this->hasMany('App\Seat', 'hall_id', 'id');
    }

    public function sesions() {
        return $this->hasMany('App\Session', 'hall_id', 'id');
    }
}
