<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'memo',
        'category_id',
        'priority_id',
        'workload',
        'deadline',
        
        ];
    
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function priorities()
    {
        return $this->belongsTo(Priority::class);
    }
}
