<?php

namespace App\Http\Controllers;

use App\Http\Requests\School\StoreRequest;
use App\Http\Requests\School\UpdateRequest;
use App\Http\Resource\School\SchoolResource;
use App\Models\School;
use Illuminate\Http\JsonResponse;

class SchoolController extends Controller
{
    public function index(): JsonResponse
    {
        $schools = School::query()->get();

        return response()->json(SchoolResource::collection($schools));
    }

    public function store(StoreRequest $request): JsonResponse
    {
        $school = new School();
        $school->name = $request->validated('name');
        $school->address = $request->validated('address');
        $school->telephone = $request->validated('telephone');
        $school->class_count = $request->validated('class_count');
        $school->type = $request->validated('type');
        $school->district = $request->validated('district');
        $school->save();

        return response()->json(SchoolResource::make($school));
    }

    public function update(UpdateRequest $request, School $school): JsonResponse
    {
        $school->name = $request->validated('name');
        $school->address = $request->validated('address');
        $school->telephone = $request->validated('telephone');
        $school->class_count = $request->validated('class_count');
        $school->type = $request->validated('type');
        $school->district = $request->validated('district');
        $school->save();

        return response()->json(SchoolResource::make($school));
    }

    public function show(School $school): JsonResponse
    {
        return response()->json(SchoolResource::make($school));
    }

    public function destroy(School $school): JsonResponse
    {
        $school->delete();

        return response()->json(SchoolResource::make($school));
    }
}
