<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'title' => $this->title,
            'price' => returnPrice($this->price),
            'currency' => returnSymbol(),
            'description' => $this->description,
            'images' => $this->allImages($this->images)
        ];
    }

    public function allImages($images)
    {
        $all_images = [];
        foreach($images as $image){
            $all_images[] = ['id' => $image->id, 'image' => asset('images/'.$image->image)];
        }
        return $all_images;
    }
}
