<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    protected $fillable = ['name','surname','gender','age'];
    protected $dates = ['created_at','updated_at'];
}
