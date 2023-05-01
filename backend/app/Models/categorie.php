<?php

namespace App\Models;

use App\Models\Fish;
use App\Models\Recepie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name','image'];

    public function fishes(){
        return $this->hasMany(Fish::class,'category_id','id');
    }
    public function recipes(){
        return $this->hasMany(Recepie::class,'category','id');
    }


}
