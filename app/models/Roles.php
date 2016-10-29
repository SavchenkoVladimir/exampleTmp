<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model {

    protected $fillable = ['role'];
    
    public function exampleUsers()
    {
        return $this->hasMany('App\models\ExampleUsers');
    }    

}
