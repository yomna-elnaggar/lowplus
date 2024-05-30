<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CustomerResource;
use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this->saleDetails);
        return [
            'id' => $this->id,
            'code' => $this->code,
            'delivery_cost' => $this->delivery_cost,
            'amount' => returnPrice($this->amount),
            'date' => $this->date,
            'customer' => $this->customer ? new CustomerResource($this->customer) : [],
            'products' => $this->saleDetails ? $this->getProducts($this->saleDetails) : [],
            'address' => $this->address,
            'currency' => returnSymbol()
        ];
    }

    public function getProducts($details): array
    {
        $products = [];
        foreach($details as $detail){
            $product = $detail->product;
            $products[] = [
                'id' => $product->id,
                'title' => $product->title,
                'price' => returnPrice($detail->price),
                'quantity' => $detail->quantity,
                'images' =>  $this->allImages($product->images),
            ];
        }
        return $products;
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
