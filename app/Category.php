<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'articlecategory';
    protected $fillable = [
        'title', 'image_url', 'description',
    ];

    public function articles(){
        return $this->hasMany('App\Article', 'id_category', 'id');
        //Kategori ini memiliki banyak artikel dengan id tertentu
    }
}
