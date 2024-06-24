<?php

namespace App\Models;

use App\Models\Books;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genres extends Model
{
    use HasFactory;

    protected $table = "genres";
    protected $fillable = ['name'];

    public function employees()
    {
        return $this->hasMany(Books::class, 'genres_id');
    }
}
