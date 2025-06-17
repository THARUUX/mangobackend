<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'type', // 'tailor-made' or 'round-tour'
        'price',
        'duration',
        'short_description',
        'description',
        'image',
        'featured',
        'active',
        'locations', // comma-separated locations
        'included', // JSON encoded list of included items
        'excluded', // JSON encoded list of excluded items
    ];

    protected $casts = [
        'included' => 'array',
        'excluded' => 'array',
        'featured' => 'boolean',
        'active' => 'boolean',
    ];

    public function itinerary()
    {
        return $this->hasMany(TourItinerary::class);
    }

    /**
     * Get the inquiries for this tour package.
     */
    public function inquiries()
    {
        return $this->hasMany(Inquiry::class, 'tour_id');
    }
}
