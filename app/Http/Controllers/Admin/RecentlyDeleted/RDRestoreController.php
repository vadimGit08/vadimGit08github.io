<?php

namespace App\Http\Controllers\Admin\RecentlyDeleted;

use App\Http\Controllers\Admin\Message\AdminController;
use App\Models\Sergl;

class RDRestoreController extends AdminController
{
    public function __invoke(Sergl $sergl)
    {
        $sergl->restore();
        return redirect()->route('admin.RDIndex');
    }
}
