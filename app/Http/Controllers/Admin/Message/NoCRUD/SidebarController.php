<?php

namespace App\Http\Controllers\Admin\Message\NoCRUD;

use App\Http\Controllers\Admin\Message\AdminController;
use App\Models\Sergl;

class SidebarController extends AdminController
{
    public function __invoke()
    {
        $messages = Sergl::all();
        return view('Includes.message.Sidebar', compact('messages'));
    }
}
