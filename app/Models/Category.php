<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static get()
 * @method static create(mixed $category)
 * @method static find(mixed $id)
 */
class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function posts(){
        return $this->belongsTo(Sergl::class);
    }
}
