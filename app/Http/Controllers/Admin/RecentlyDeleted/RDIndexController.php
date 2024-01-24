<?php

namespace App\Http\Controllers\Admin\RecentlyDeleted;

use App\Http\Controllers\Admin\Message\AdminController;
use App\Models\Sergl;

class RDIndexController extends AdminController
{
    public function __invoke()
    {
        $deletedMessages = Sergl::onlyTrashed()->get();
        return view('Admin.RecentlyDeleted.RDIndex', compact('deletedMessages'));
    }
}
