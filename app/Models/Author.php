<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Realations\HasMany;

class Author extends Model
{
    use hasFactory;
    protected  $casts = [

    ];
    protected $table = 'authors';

    protected $primaryKey = 'id';

    protected $fillable = ['first_name','last_name'];


    public function books(){
        return $this->hasMany(Book::class);
    }

}
