<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [
            'username', 
            'balance',
            'bankwithdraw', 
            'accountnumberwithdraw', 
            'accountnamewithdraw', 
            'datetime', 
            'channelwithdraw',
            'tel', 
            'opinion' 
    ];

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
