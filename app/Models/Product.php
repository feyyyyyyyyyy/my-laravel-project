<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cost', 'price', 'category_id', 'branch_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function branch()
{
    return $this->belongsTo(Branch::class);
}
    
}

