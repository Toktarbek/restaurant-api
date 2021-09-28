<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pizza;

class Restauran extends Model
{
    public function pizzas(){
        return $this->hasMany(Pizza::class);
    }
}
