<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;
    protected $table = 'amenities';    
    protected $fillable = [
        'title',
        'icon'
    ];

    // public function listings(){
    //     return $this->hasMany('\App\Models\Listing','category_id');
    // }

}
