<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Listing;

class Amenity extends Model
{
    use HasFactory;
    protected $fillable = ["name", "icon"];

    public $timestamps = false;
    
    public function listings()
    {
        return $this->belongsToMany(Listing::class);
    }
}
