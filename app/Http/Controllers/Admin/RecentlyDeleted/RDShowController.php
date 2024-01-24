<?php

namespace App\Http\Controllers\Admin\RecentlyDeleted;

use App\Http\Controllers\Admin\Message\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Message\MessageController;
use App\Models\Category;
use App\Models\Sergl;

class RDShowController extends AdminController
{
    public function __invoke(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $deletedMessages = Sergl::onlyTrashed()->get();
        foreach ($deletedMessages as $deletedMessage)
        $categories = Category::all();
        return view('admin.recentlyDeleted.RDShow', compact('deletedMessage', 'categories'));
    }


}
