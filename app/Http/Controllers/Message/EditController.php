<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sergl;
use App\Models\Tag;

class EditController extends MessageController
{
    public function __invoke(Sergl $sergl): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('message.edit', compact('sergl', 'categories', 'tags'));
    }


}
