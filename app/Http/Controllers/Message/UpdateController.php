<?php

namespace App\Http\Controllers\Message;

use App\Http\Requests\Message\UpdateRequest;
use App\Models\Sergl;

class UpdateController extends MessageController
{
    public function __invoke(UpdateRequest $request, Sergl $sergl): \Illuminate\Http\RedirectResponse
    {
        $message = $request->validated();

        $this->service->update($sergl, $message);

        return redirect()->route('message.show', $sergl->id);
    }


}
