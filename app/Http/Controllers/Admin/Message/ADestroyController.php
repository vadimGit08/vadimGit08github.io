<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Message\MessageController;
use App\Models\Sergl;

class ADestroyController extends AdminController
{
    public function __invoke(Sergl $sergl): \Illuminate\Http\RedirectResponse
    {
        $sergl->delete();
        return redirect()->route('admin.message.index');
    }


}
