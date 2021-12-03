<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';    
    protected $fillable = [
        'title',
        'image'
    ];

    public function listings(){
        return $this->hasMany('\App\Models\Listing','category_id');
    }


}
