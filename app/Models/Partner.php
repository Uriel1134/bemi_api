<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //

    //use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'contactInfo',
        'logoUrl',
        'isActive'
    ];

    public function rewards()
    {
        return $this->hasMany(Reward::class);
    }

}
