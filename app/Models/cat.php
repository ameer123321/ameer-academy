<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    protected $guarded = ['id'];
    public function courses()
    {
        return $this->hasMany('App\course');
    }
}
