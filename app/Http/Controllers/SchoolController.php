<?php

namespace App\Http\Controllers;

use App\Enums\RoleNameEnum;
use App\Http\Requests\School\IndexRequest;
use App\Http\Requests\School\StoreRequest;
use App\Http\Requests\School\UpdateRequest;
use App\Http\Resource\School\SchoolResource;
use App\Models\Employment;
use App\Models\School;
use App\Traits\GeneralControllerTrait;
use http\Env\Response;
use Illuminate\Http\Client\Request;
use Illuminate\Http\JsonResponse;

class SchoolController extends Controller
{
    use GeneralControllerTrait;

    public function index(IndexRequest $request): JsonResponse
    {
        $query = School::query();
        $paginate = $this->paginate($query, $request);

        return response()->json([
            'count' => $paginate['count'],
            'data' => SchoolResource::collection($paginate['data'])

        ]);
    }

    public function store(StoreRequest $request): JsonResponse
    {
        $school = new School();
        $school->manager_id = $request->validated('manager');
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
        $school->manager_id = $request->validated('manager');
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
