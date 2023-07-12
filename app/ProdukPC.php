<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukPC extends Model
{
    protected $table = 'produkpcs';
    protected $fillable = [
        'gambar','merk','cpu','gpu','ram','storage','os','deskripsi','harga','jml_unit',
    ];
}
