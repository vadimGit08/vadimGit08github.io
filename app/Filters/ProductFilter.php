<?php

namespace App\Filters;

class ProductFilter extends QueryFilter
{
    public function name($value)
    {
        return $this->builder->where('name', 'like', "%{$value}%");
    }
    public function message($value)
    {
        return $this->builder->where('message', 'like', "%{$value}%");
    }
    public function category_id($value)
    {
        return $this->builder->where('category_id', 'like', $value);
    }
}
