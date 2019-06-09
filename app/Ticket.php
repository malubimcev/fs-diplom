<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['price'];
    protected $table = 'tickets';

    public function session() {
        return $this->belongsTo('App\Session', 'session_id', 'id');
    }

    public function seat() {
        return $this->belongsTo('App\Seat', 'seat_id', 'id');
    }

    public function test() {
        return view('index');
    }
}
