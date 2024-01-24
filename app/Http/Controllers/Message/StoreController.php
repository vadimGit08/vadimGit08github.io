<?php

namespace App\Http\Controllers\Message;
use App\Http\Requests\Message\StoreRequest;
use App\Http\Resources\Message\MessageResourse;

class StoreController extends MessageController
{

    public function __invoke(StoreRequest $request)
    {
        $message = $request->validated();

        $post = $this->service->store($message);

        return new MessageResourse($post);
//        return redirect()->route('message.store');
    }


}
