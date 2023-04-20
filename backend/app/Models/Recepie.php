<?php

namespace App\Models;

use App\Models\Fish;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recepie extends Model
{
    use HasFactory;
    protected $table = 'recepies';
    protected $fillable = ['title','dish_type','image','Serves','preparation_time','cooking_time','difficulty','cuisine_type','ingredients','method','category'];

    public function fishes(){
        return $this->hasMany(Fish::class,'category_id','category');
    }
}
