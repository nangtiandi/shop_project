<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderItem extends Model
{
    use HasFactory;
    protected $with = ['item'];
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function item(){
        return $this->belongsTo(Item::class);
    }

}
