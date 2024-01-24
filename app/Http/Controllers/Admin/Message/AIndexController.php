<?php

namespace App\Http\Controllers\Admin\Message;

use App\Filters\ProductFilter;
use App\Models\Sergl;
use Illuminate\Http\Request;

class AIndexController extends AdminController
{
    public function __invoke(Request $request, ProductFilter $filters)
    {
        $messages = Sergl::filter($filters)->paginate(10);
        return view('admin.message.index', compact('messages'));
    }
}
