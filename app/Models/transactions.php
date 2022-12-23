<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function transactions(){
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }
}