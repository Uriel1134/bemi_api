<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WasteCategory extends Model
{
    //

    protected $fillable = [
        'name',
        'description',
        'pointsPerKg',
        'iconUrl'
    ];

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

}
