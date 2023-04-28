<?php

namespace App\Models;

use App\Models\Fish;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commande extends Model
{
    use HasFactory;
    protected $table = 'commandes';
    protected $fillable = ['firstName','lastName','email','phone','user_id','adress','total','city','status'];

    public function fishes(){
        return $this->belongsToMany(Fish::class);
    }
}
