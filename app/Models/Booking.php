<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_from',
        'end_to',
        'user_id',
        'listing_id',
        'adults',
        'children',
        'total_price',
        'status',
        'additional_info',
    ];
    
}
