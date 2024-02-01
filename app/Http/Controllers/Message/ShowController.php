<?php

namespace App\Http\Controllers\Message;

use App\Http\Resources\Message\MessageResourse;
use App\Models\Category;
use App\Models\Sergl;

class ShowController extends MessageController
{
    public function __invoke(Sergl $sergl): MessageResourse
    {
//        $categories = Category::all();

        return  new MessageResourse($sergl);

//        return view('message.show', compact('sergl', 'categories'));
    }


}
