<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected  $casts = [

    ];
    protected $table = 'authors';

    protected $primaryKey = 'id';

    protected $fillable = ['firstName','lastName'];


}
