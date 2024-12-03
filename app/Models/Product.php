<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'tagline',
        'thumbnail',
        'about',
        'price',
    ];
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
