<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(mixed $tag)
 * @method static find(mixed $id)
 */
class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function sergls(){
        return $this->belongsToMany(Tag::class);
    }
}
