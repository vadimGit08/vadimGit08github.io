<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sergl;

class ShowController extends MessageController
{
    public function __invoke(Sergl $sergl): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        return view('message.show', compact('sergl', 'categories'));
    }


}
