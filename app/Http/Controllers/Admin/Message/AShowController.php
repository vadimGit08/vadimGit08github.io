<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Message\MessageController;
use App\Models\Category;
use App\Models\Sergl;

class AShowController extends AdminController
{
    public function __invoke(Sergl $sergl): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        return view('admin.message.show', compact('sergl', 'categories'));
    }


}
