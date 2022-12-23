<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categori_barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function categoribarang(){
        return $this->HasMany(barang::class, 'kategori_id', 'id');
    }
}
