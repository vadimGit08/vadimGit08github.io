<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sergl extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'sergls';
    protected $guarded = [];
    public function categories(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'serg_tags', 'post_id', 'tag_id');
    }

//    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
//    {
//        return $this->belongsToMany(Tag::class, 'serg_tags', 'sergl_id', 'tag_id');
//    }

}
