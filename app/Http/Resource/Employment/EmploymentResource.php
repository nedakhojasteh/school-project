<?php

namespace App\Http\Resource\Employment;

use App\Http\Resource\Role\RoleResource;
use App\Models\Employment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Employment */
class EmploymentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name' => $this->name,
            'family' => $this->family,
            'telephone' => $this->telephone,
            'address' => $this->address,
            'degree' => $this->degree,
            'roles' => $this->when(count($this->roles), RoleResource::collection($this->roles)),
        ];
    }
}
