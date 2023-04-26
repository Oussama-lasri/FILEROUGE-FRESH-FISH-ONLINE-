<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pannier extends Model
{
    use HasFactory;

    protected $table = 'panniers';
    protected $fillable = ['fish_id', 'user_id', 'qty'];

    public $incrementing = false;

    public function fish()
    {   
        return $this->hasMany(Fish::class, 'fish_id', 'id');
    }
}
