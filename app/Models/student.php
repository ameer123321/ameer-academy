<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $guarded = ['id'];
    public function courses()
    {
        $this->belongsToMany('App\course');
    }
}
