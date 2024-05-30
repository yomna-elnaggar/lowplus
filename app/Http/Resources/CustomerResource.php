<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'addresses' => $this->getAddress(),
            'phone' => $this->phone,
            'count_sale' => $this->count_sale,
            'amount_sale' => returnPrice($this->amount_sale),
            'currency' => returnSymbol()
        ];
    }

    public function getAddress()
    {
        $arr = [];
        foreach($this->addresses as $add){
            if($add['status'] == "active"){
                $arr[] = [
                    'id' => $add['id'],
                    'address' => $add['address']
                ];
            }
        }

        return $arr;
    }
}

