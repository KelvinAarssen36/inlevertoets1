<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments'; // Met ‘protected $comments = ‘posts’ zorg je ervoor dat dit model nu communiceert met de tabel ‘events’.
    
}
