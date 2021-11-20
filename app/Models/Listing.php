<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Listing extends Model
{
    use HasFactory; 
    protected $table = 'listings';
    protected $fillable = [
        'title',
        'category_id',
        'keywords',
        'address',
        'street',
        'city',
        'zipcode',
        'description',
        'amenities',
        'price',
    ];

    public function images(){
       return $this->hasMany('\App\Models\ListingImage','listing_id');
    }


    
}
