<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
        protected $fillable=[
            'user_id',
            'activity_id',
            'title',
            'memo',
            'category_id',
            'priority_id',
            'workload',
            'deadline',
        ];
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
            
        
}
