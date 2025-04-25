<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionPoint extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'latitude',
        'longitude',
        'wasteTypes',
        'isActive',
        'availableHours'
    ];

    protected $casts = [
        'wasteTypes' => 'array',
        'availableHours' => 'array',
    ];

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

}
