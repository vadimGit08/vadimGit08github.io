<?php

namespace App\Http\Controllers;

use App\Models\SergTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\sergl;
use App\Models\Category;

class SerglController extends Controller
{
//    *********CRUD**********
    public function index()
    {
        $mess = sergl::all();
        return view('posts.index', compact('mess'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }

    public function store()
    {

        $message = request()->validate([
            'name' => 'string',
            'message' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);
        $user = $message['tags'];
        unset($message['tags']);
        $post = sergl::create($message);
//        dd($post->tags);
        $post->tags()->attach($user);
        return redirect()->route('message.index');
   }

    public function show(sergl $sergl)
    {
        $categories = Category::all();
        return view('posts.show', compact('sergl', 'categories'));
    }

    public function edit(sergl $sergl)
    {
        $categories = Category::all();
        return view('posts.edit', compact('sergl', 'categories'));
    }

    public function update(Sergl $sergl)
    {
        $message = request()->validate([
            'name' => 'string',
            'message' => 'string',
            'category_id' => ''
        ]);
        $sergl->update($message);
        return redirect()->route('message.show', $sergl->id);
    }

    public function destroy(sergl $sergl)
    {
        $sergl->delete();
        return redirect()->route('message.index');
    }
//    *********CRUD**********
//_______________________________________________________________________________________________________
//    *******OneToMany*******
//    public function oneToMany(){
//            $category = Category::find(2);
//            dd($category->posts);
//        }
    public function oneToMany()
    {
        $segl = sergl::find(3);
        dd($segl->categories);
    }
//    *******OneToMany*******
//    _______________________________________________________________________________________________________
//    *******ManyToMany*******
    public function manyToMany(){
        $segl = sergl::find(1);
        dd($segl->tags);
    }
//    public function manyToMany()
//    {
//        $tag = Tag::find(3);
//        dd($tag->sergls);
//    }


}
