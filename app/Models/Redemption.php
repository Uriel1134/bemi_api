<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redemption extends Model
{
    //

    protected $fillable = [
        'user_id',
        'reward_id',
        'redeemedAt',
        'status',
        'validationCode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }

}
