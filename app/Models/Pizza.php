<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restauran;

class Pizza extends Model
{
    use HasFactory;
    protected $fillable = ['name','cheese','pastry','secret_ingredient','restauran_id'];

    public function restauran(){
    	return $this->belongsTo(Restauran::class);
    }
}
