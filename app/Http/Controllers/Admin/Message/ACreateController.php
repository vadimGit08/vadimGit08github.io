<?php

namespace App\Http\Controllers\Admin\Message;

use App\Models\Category;
use App\Models\Tag;

class ACreateController extends AdminController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('Admin.message.Create', compact('categories', 'tags'));
    }


}
