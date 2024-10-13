<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyAbout extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'thumbnail',
        'type',

    ] ;

    protected $casts = [
        'meeting_at'=>'date',
    ];

    public function keypoints(){
        return $this->hasMany(CompanyKeypoint::class);
    }
}
