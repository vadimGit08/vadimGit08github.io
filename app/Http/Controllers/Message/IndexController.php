<?php

namespace App\Http\Controllers\Message;


use App\Filters\ProductFilter;
use App\Http\Requests\FilterRequest;
use Illuminate\Http\Request;
use App\Http\Resources\Message\MessageResourse;
use App\Models\Sergl;


class IndexController extends MessageController
{
    public function __invoke(ProductFilter $filter)
    {
        $messages = Sergl::filter($filter)->paginate(10);

        return MessageResourse::collection($messages);

//        return view('message.index', compact('messages'));
    }

//    public function __invoke(FilterRequest $request, ProductFilter $filter)
//    {
//        $page = $request['page'];
//        $perPage = $request['per_page'];
//        $messages = Sergl::filter($filter)->paginate($perPage, ['*'], 'page', $page);
//
//        return MessageResourse::collection($messages);
//
////        return view('message.index', compact('messages'));
//    }
}
