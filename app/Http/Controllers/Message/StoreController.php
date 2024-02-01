<?php

namespace App\Http\Controllers\Message;
use App\Http\Requests\Message\StoreRequest;
use App\Http\Resources\Message\MessageResourse;
use App\Models\Sergl;

class StoreController extends MessageController
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $post = $this->service->store($data);

        return $post instanceof Sergl ? new MessageResourse($post) : $post;
//        return redirect()->route('message.store');
    }


}
