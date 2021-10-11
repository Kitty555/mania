<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MItem extends Model
{
    use HasFactory;
    protected $table= 'm_item';
    protected $guarded = [];
    public function user(){
        return $this->hasOne(User::class,'id','userId');
    }
}
