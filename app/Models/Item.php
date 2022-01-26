<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $with = ['brand','category'] ;
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
