<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['category_id', 'name', 'qty', 'price'];

    // An Item belongs to one Category.
    public function Category()
{
    return $this->belongsTo(Category::class, 'category_id', 'id');
}
}