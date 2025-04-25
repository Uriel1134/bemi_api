<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    //

    protected $fillable = [
        'user_id',
        'collection_point_id',
        'waste_category_id',
        'estimatedWeight',
        'photoUrl',
        'qrCode',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function collectionPoint()
    {
        return $this->belongsTo(CollectionPoint::class);
    }

    public function wasteCategory()
    {
        return $this->belongsTo(WasteCategory::class);
    }

}
