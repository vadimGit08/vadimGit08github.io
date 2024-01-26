<?php

namespace App\Service\Admin\Message;

use App\Models\Sergl;

class Service
{
   public function store($message){
       $user = $message['tags'];
       unset($message['tags']);
       $post = Sergl::create($message);
       $post->tags()->attach($user);
   }

    public function update($sergl, $message){
        $user = $message['tags'];
        unset($message['tags']);
        $sergl->update($message);
        $sergl->tags()->sync($user);
    }

}
