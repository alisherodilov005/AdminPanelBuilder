<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
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
            'title_ru' => $this->title_ru,
            'title_en' => $this->title_en,
            'description' => $this->description,
            'description_ru' => $this->description_ru,
            'description_en' => $this->description_en,
            'media' => MediaResource::collection($this->media),
        ];
    }
}
