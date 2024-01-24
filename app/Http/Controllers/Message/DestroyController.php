<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Models\Sergl;

class DestroyController extends MessageController
{
    public function __invoke(Sergl $sergl): \Illuminate\Http\RedirectResponse
    {
        $sergl->delete();
        return redirect()->route('message.index');
    }


}
