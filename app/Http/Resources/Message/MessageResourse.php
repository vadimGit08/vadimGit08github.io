<?php

namespace App\Http\Resources\Message;

use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Tag\TagResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'messsage'=> $this->message,
            'category'=> new CategoryResource($this->category),
            'tags'=> TagResource::collection($this->tags)
        ];
    }
}
