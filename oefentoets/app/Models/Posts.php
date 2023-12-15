<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts'; // Met ‘protected $table = ‘posts’ zorg je ervoor dat dit model nu communiceert met de tabel ‘events’.
    
}
