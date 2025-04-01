<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['category_id', 'item_name', 'quantity', 'price', 'total'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Automatically calculate total when saving
    public static function boot()
    {
        parent::boot();

        static::saving(function ($item) {
            $item->total = $item->quantity * $item->price;
        });
    }
}
