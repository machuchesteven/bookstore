<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'description',
        'isbn', 
        'price',
        'cover_path',
    ];
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
    public function added_by(){
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'price' => 'float(10:2)',
    ];
}
