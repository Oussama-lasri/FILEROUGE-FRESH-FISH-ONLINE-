<?php

namespace App\Models;

use App\Models\commande;
use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fish extends Model
{
    use HasFactory;

    protected $table = 'fish';
    protected $fillable = ['title','price','description','quantity','image','status','category_id','buy_by_id'];

    public function category(){
        return $this->belongsTo(categorie::class,'category_id','id');
    }
    public function BuyBy(){
        return $this->belongsTo(BuyBy::class,'buy_by_id','id');
    }
    public function recipe(){
        return $this->belongsTo(Fish::class,'category_id','id');
    }
    public function pannier(){
        return $this->belongsTo(Fish::class,'fish_id','id');
    }
    public function commande(){
        return $this->belongsToMany(commande::class,'fish_id','id');
    }


}
