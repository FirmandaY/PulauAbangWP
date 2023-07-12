<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProdukLain;

class GaleriPL extends Model
{
    protected $table = 'galeripl';
    protected $fillable = [
        'foto', 'nama_galeri', 'keterangan', 'id_produk',
    ];

    public function produks(){
        return $this->belongsTo('App\ProdukLain', 'id_produk', 'id');
        //Berarti galeri ini menjadi milik suatu buku dengan id tertentu
    }
}
