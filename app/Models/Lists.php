<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Lists extends Model
{
    use HasFactory;
    use SoftDeletes;
   
    
    protected $fillable=[
        'user_id',
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
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
    
    
}
