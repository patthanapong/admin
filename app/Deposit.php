<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
     protected $fillable = [
            'username', 
            'balance',
            'bankdeposit', 
            'accountnumberdeposit', 
            'accontnamedeposit', 
            'datetime', 
            'channeldeposit',
            'tel', 
            'opinion' 
    ];

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
