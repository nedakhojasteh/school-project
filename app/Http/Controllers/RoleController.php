<?php

namespace App\Http\Controllers;

use App\Http\Requests\Role\RoleStoreRequest;
use App\Http\Requests\Role\RoleUpdateRequest;
use App\Http\Resource\Role\RoleResource;
use App\Models\Role;
use http\Env\Response;
use Illuminate\Http\JsonResponse;

class RoleController extends Controller
{
    public function index(): JsonResponse
    {
        $role = Role::query()->get();

        return response()->json(RoleResource::collection($role));
    }

    public function store(RoleStoreRequest $request): JsonResponse
    {
        $role = new Role();
        $role->name = $request->validated('name');
        $role->slug = $request->validated('slug');
        $role->save();

        return response()->json(RoleResource::make($role));
    }

    public function update(RoleUpdateRequest $request, Role $role): JsonResponse
    {
        $role->name = $request->validated('name');
        $role->slug = $request->validated('slug');
        $role->save();

        return response()->json(RoleResource::make($role));
    }

    public function show(Role $role): JsonResponse
    {
        return response()->json(RoleResource::make($role));
    }

    public function delete(Role $role): JsonResponse
    {
        $role->delete();

        return response()->json(RoleResource::make($role));
    }

}
