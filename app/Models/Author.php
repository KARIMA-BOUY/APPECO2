<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model

{
    use HasFactory;
    protected $fillable = ['author_name'];
    public function biography()
    {
        return $this->hasOne(Biography::class);
    }
    public function books()
    {
        return $this->hasMany(Book::class);
    }
 }
