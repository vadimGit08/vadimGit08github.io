<?php

namespace App\Models;

use App\Filters\QueryFilter;
use App\Http\Filters\FilterInterface;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(array $message)
 * @method static paginate(int $int)
 */
class Sergl extends Model
{
    use HasFactory;
    use SoftDeletes;


    public function scopeFilter(Builder $builder, QueryFilter $filters)
    {
        return $filters->apply($builder);
    }
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
