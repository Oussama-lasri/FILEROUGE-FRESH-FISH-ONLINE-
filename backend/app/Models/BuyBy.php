<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyBy extends Model
{
    use HasFactory;

    protected $table = 'buy_by';
    protected $fillable = ['name'];

    public function fishes(){
        return $this->hasMany(Fish::class,'buy_by_id','id');
    }
}
