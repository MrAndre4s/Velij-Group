<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(ProductFilial::class, 'filial_id', 'id');
    }
}
