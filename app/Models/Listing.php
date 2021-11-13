<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory; 
    protected $table = 'listings';
    protected $fillable = [
        'title',
        'category',
        'keywords',
        'address',
        'street',
        'city',
        'zipcode',
        'description',
        'amenities',
        'price',
    ];
}
