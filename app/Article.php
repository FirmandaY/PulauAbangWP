<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = [
        'title', 'image_link','category' ,'content',
    ];

    public function articles(){
        return $this->belongsTo('App\Category', 'id_category', 'id');
        //Artikel ini menjadi milik suatu Kategori dengan id tertentu
    }

    public function photos(){
        return $this->hasMany('App\Gallerie','id_produk','id');
        //Artikel ini memiliki banyak Galeri dengan id tertentu
    }
}
