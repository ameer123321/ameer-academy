<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
    protected $guarded = ['id'];
    public function course()
    {
        return $this->hasMany('App\course');
    }
}
