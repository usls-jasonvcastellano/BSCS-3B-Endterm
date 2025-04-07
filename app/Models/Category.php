<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    // One Category can have many Items.
    public function Items()
    {
        return $this->hasMany(Item::class, 'item_id', 'id');
    }
    
}
