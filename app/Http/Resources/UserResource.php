<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Auth;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'                      => $this->name,
            'email'                     => $this->email,
            'gender'                    => $this->gender,
            'facebook_provider_id'      => $this->facebook_provider_id,
            'google_provider_id'        => $this->google_provider_id,
        ];
    }
}
