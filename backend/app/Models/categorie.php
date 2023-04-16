<?php

namespace App\Models;

use App\Models\Fish;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function fishes(){
        return $this->hasMany(Fish::class,'category_id','id');
    }

}
