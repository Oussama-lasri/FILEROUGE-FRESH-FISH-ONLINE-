<?php

namespace App\Models;

use App\Models\Fish;
use App\Models\commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commande_fish extends Model
{
    use HasFactory;

    protected $table = 'commande_fish';
    protected $fillable = ['fish_id','commande_id'];
    
    public function fish(){
        return $this->belongsTo(Fish::class);
    }

    public function commande(){
        return $this->belongsTo(commande::class);
    }

}
