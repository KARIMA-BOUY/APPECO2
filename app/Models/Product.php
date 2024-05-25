<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
'name','description','quantity','image','price'
    ];
}
class Produit extends Model {
    public function utilisateur() {
        return $this->belongsTo(Utilisateur::class);
    }
}
