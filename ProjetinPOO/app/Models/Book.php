<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['title', 'author', 'path'];

    # RELAÇÃO ENTRE BOOK E USER
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
