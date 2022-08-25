<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBook extends Model
{
    use HasFactory;
    protected $fillable = ['quantity'];
    public function book(){
        return null;
    }
    public function order(){
        return this->belongsTo(Order::class);
    }
}