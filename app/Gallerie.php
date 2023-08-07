<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallerie extends Model
{
    protected $table = 'gallerie';
    protected $fillable = [
        'image_title', 'image_url',
    ];

}
