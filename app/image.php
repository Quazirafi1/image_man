<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $primaryKey = 'image_id';
    protected $table = "image";
    public $timestamps = false;
}
