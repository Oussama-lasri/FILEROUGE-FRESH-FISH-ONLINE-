<?php

namespace App\Models;

use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fish extends Model
{
    use HasFactory;

    protected $table = 'fish';
    protected $fillable = ['title','price','description','image','status','category_id','buy_by_id'];

    public function category(){
        return $this->belongsTo(categorie::class,'category_id','id');
    }
    public function BuyBy(){
        return $this->belongsTo(BuyBy::class,'buy_by_id','id');
    }
}
