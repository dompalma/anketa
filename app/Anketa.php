<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anketa extends Model

{
    protected $fillable = ['phone','webserv','wifi','frequence','devices','text'];

    protected $dates = ['created_at','updated_at'];

    public $primaryKey = 'id';

    public static function rules()
    {
        return [
            'phone' => 'required|string|max:50',
            'webserv' => 'required|string|max:50',
            'wifi' => 'string|max:10',
            'frequence' => 'string|max:50',
            'devices' => 'string|max:250',
            'text' => 'longText|max:250'
        ];
    }
    public function respondent()
    {
        return $this->hasOne(Respondent::class,'respondent_id','id');
    }
}

