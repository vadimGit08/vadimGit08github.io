<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public function sergls(){
        return $this->belongsToMany(sergl::class, 'serg_tags', 'tag_id', 'sergl_id');
    }
}
