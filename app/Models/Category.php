<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sergl;
class Category extends Model
{
    use HasFactory;
    public function posts(){
        return $this->hasMany(Category::class, 'category_id', 'id');
    }
}
