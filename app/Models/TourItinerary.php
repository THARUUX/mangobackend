<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourItinerary extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_package_id',
        'day',
        'title',
        'location',
        'description',
        'image',
    ];

    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class);
    }
}
