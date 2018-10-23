<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable= ['Firstname','Lastname','Region','Age','Position','Height','Stats'];
}
