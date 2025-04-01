<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['category_id', 'item_name', 'qty', 'price'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Automatically calculate total when saving
    public function getTotalAttribute()
    {
        return $this->qty * $this->price;
    }
}
