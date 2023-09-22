<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->first_name . ' ' .$this->last_name,
            "email" => $this->email,
            
            "active_status" => (bool) $this->user_status,
            "created_at" => $this->created_at->format("M d, Y H:i A"),
            "updated_at" => $this->updated_at->format("M d, Y H:i A")
        ];
    }
}
