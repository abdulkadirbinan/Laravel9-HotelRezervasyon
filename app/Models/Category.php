<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #one to many
    public function hotels(){

        return $this->hasMany(Hotel::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
