<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employment\EmploymentRequest;
use App\Http\Resource\Employment\EmploymentResource;
use App\Models\Employment;
use App\Models\Role;
use Illuminate\Http\JsonResponse;

class EmploymentController extends Controller
{
    public function index(): JsonResponse
    {
        $employments = Employment::query()->get();

        return response()->json(EmploymentResource::collection($employments));
    }

    public function store(EmploymentRequest $request): JsonResponse
    {
        $employment = new Employment();
        $employment->name = $request->validated('name');
        $employment->family = $request->validated('family');
        $employment->telephone = $request->validated('telephone');
        $employment->address = $request->validated('address');
        $employment->degree = $request->validated('degree');
        $employment->save();

        return response()->json(EmploymentResource::make($employment));
    }

    public function show(Employment $employment): JsonResponse
    {
        return response()->json(EmploymentResource::make($employment));
    }

    public function update(EmploymentRequest $request, Employment $employment): JsonResponse
    {
        $employment->name = $request->validated('name');
        $employment->family = $request->validated('family');
        $employment->telephone = $request->validated('telephone');
        $employment->address = $request->validated('address');
        $employment->degree = $request->validated('degree');
        $employment->save();

        return response()->json(EmploymentResource::make($employment));
    }

    public function delete(Employment $employment): JsonResponse
    {
        $employment->delete();

        return response()->json(EmploymentResource::make($employment));
    }
    public function storeRole(Employment $employment, Role $role): JsonResponse
    {
        $employment->roles()->attach($role->id);

        return response()->json(EmploymentResource::make($employment));
    }
}
