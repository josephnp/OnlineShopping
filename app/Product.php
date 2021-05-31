<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'nama', 'harga', 'jumlah', 'image'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
