<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class barang extends Model
{
    use HasFactory;
    // protected $fillable = ['name_product', 'harga', 'description', 'stock', 'categoriy_id'];

    protected $guarded = ['id'];

    public function barang(){
        return $this->belongsTo(categori_barang::class, 'kategori_id', 'id');
    }
    public function gambarbarang(){
        return $this->belongsTo(gambarbarang::class, 'id', 'Product_id');
    }

}
