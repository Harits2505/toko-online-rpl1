<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambarbarang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function ambilId()
    {
        return $this->belongsTo(barang::class, 'Product_id', 'id');
    }
}
