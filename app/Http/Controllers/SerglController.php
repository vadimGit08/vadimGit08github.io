<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sergl;

class SerglController extends Controller
{
    public function index(){
        $mess = sergl::all();
        return view('posts.index', compact('mess'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        $message = request()->validate([
            'name' => 'string',
            'message' => 'string'
        ]);
        sergl::create($message);
        return redirect()->route('message.index');
    }

    public function show(sergl $sergl){
        return view('posts.show', compact('sergl'));
    }


    public function edit(sergl $sergl){
        return view('posts.edit', compact('sergl'));
    }

    public function update(Sergl $sergl){
        $message = request()->validate([
            'name' => 'string',
            'message' => 'string'
        ]);
        $sergl->update($message);
        return redirect()->route('message.show', $sergl->id);
    }
    public function destroy(sergl $sergl){
        $sergl->delete();
        return redirect()->route('message.index');
    }

    public function arr(){
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        var_dump($arr);
        for($i = 0; $i < count($arr); $i++){
            echo "це значення: $i; <br>";
        };
    }


}
