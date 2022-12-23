<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['name','email','phone','alamat','password','status','img'];

    public function users(){
        return $this->HasMany(transactions::class, 'user_id', 'id');
    }
}
