<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    //

    protected $fillable = [
        'partner_id',
        'title',
        'description',
        'pointsCost',
        'quantityAvailable',
        'isActive',
        'validUntil',
        'imageUrls'
    ];

    protected $casts = [
        'imageUrls' => 'array',
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    public function redemptions()
    {
        return $this->hasMany(Redemption::class);
    }

}
