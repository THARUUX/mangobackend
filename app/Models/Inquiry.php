<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $table = 'inquiries';

    protected $fillable = [
        'tour_id',
        'name',
        'email',
        'phone',
        'date',
        'adults',
        'children',
        'message',
        'status'
    ];

    protected $casts = [
        'date' => 'date',
        'adults' => 'integer',
        'children' => 'integer',
    ];

    /**
     * Get the tour package that was inquired about.
     */
    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class, 'tour_id');
    }
}
