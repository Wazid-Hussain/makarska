<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Amenity;

class Listing extends Model
{
    use HasFactory; 
    protected $table = 'listings';
    protected $fillable = [
        'category_id',
        'title',
        'keywords',
        'address',
        // 'street',
        // 'city',
        // 'zipcode',
        'description',
        // 'amenities',
        'price',
    ];

    public function images(){
       return $this->hasMany('\App\Models\ListingImage','listing_id');
    }

    public function amenities(){
        return $this->belongsToMany(Amenity::class);
    }
   
}
