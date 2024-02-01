<?php

namespace App\Http\Controllers\Message;

use App\Http\Requests\Message\UpdateRequest;
use App\Http\Resources\Message\MessageResourse;
use App\Models\Sergl;

class UpdateController extends MessageController
{
    public function __invoke(UpdateRequest $request, Sergl $sergl)
    {
        $data = $request->validated();

        $sergl = $this->service->update($sergl, $data);
        return $sergl instanceof Sergl ? new MessageResourse($sergl) : $sergl;

//        return redirect()->route('message.show', $sergl->id);
    }



}
