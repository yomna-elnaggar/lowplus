<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\CurrencyResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'email' => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'logo' => $this->logo ? asset('images/'.$this->logo) : null,
            'business_name' => $this->business_name,
            'business_type' => $this->business_type,
            'status' => $this->status,
            'cat_link' => $this->getCatalogueLink(),
            'currency' => new CurrencyResource($this->currency),
            'country' => $this->country ? $this->country->name : '',
        ];
    }

    public function getCatalogueLink()
    {
        if($this->code){
            return route('cat', $this->code);
        }

        $code = ($this->id.rand(100000, 1000000));

        User::find($this->id)->update(['code' => $code]);
        
        return route('cat', $code);
    }
}
