<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','email',
            ];         
}
class utilisateur extends Model {
    public function produit() {
        return $this->hasOne(Produit::class);
    }
}
