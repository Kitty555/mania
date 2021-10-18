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

    public function game(){
        return $this->hasOne(MGame::class,'id','game_code');
    }
    public function server(){
        return $this->hasOne(MGame::class,'id','server_code');
    }

}
