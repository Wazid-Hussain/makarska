<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenityListing extends Model
{
    use HasFactory;

    protected $table = "amenity_listing";

    protected $fillable = ["listing_id"];

}
