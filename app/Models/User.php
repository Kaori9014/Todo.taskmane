<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email'
        ];
     public function user_tank()
    {
        return $this->belongsTo(User_Rank::class);
    }
     public function like()
    {
        return $this->belongsTo(Like::class);
    }
    
}
