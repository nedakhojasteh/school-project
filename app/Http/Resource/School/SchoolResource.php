<?php

namespace App\Http\Resource\School;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin School */
class SchoolResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'manager'=>$this->manager->name,
            'name' => $this->name,
            'type' => $this->type,
            'district' => $this->district
        ];
    }
}
