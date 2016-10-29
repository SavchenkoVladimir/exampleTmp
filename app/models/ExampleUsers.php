<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ExampleUsers extends Model {

    protected $fillable = ['name', 'email', 'password', 'role_id'];
    
    public function roles()
    {
        return $this->belongsTo('App\models\Roles');
    }  

}
