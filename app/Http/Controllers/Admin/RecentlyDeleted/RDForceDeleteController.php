<?php

namespace App\Http\Controllers\Admin\RecentlyDeleted;

use App\Http\Controllers\Admin\Message\AdminController;
use App\Models\Sergl;

class RDForceDeleteController extends AdminController
{
    public function __invoke(Sergl $sergl)
    {
        $sergl->forceDelete();
        return redirect()->route('admin.RDIndex');
    }
}
