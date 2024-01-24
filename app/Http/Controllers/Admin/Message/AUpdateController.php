<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Message\MessageController;
use App\Http\Requests\Message\UpdateRequest;
use App\Models\Sergl;

class AUpdateController extends MessageController
{
    public function __invoke(UpdateRequest $request, Sergl $sergl): \Illuminate\Http\RedirectResponse
    {
        $message = $request->validated();

        $this->service->update($sergl, $message);

        return redirect()->route('admin.message.show', $sergl->id);
    }


}
