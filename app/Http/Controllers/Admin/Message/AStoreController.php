<?php

namespace App\Http\Controllers\Admin\Message;
use App\Http\Controllers\Message\MessageController;
use App\Http\Requests\Message\StoreRequest;
use App\Http\Requests\Message\UpdateRequest;

class AStoreController extends MessageController
{

    public function __invoke(StoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $message = $request->validated();

        $this->service->store($message);
        return redirect()->route('admin.message.store');
    }


}
