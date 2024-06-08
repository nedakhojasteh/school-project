<?php

namespace App\Traits;


use App\Http\Requests\School\IndexRequest;
use App\Http\Resource\School\SchoolResource;
use App\Models\School;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Http\FormRequest;

trait GeneralControllerTrait
{

    public function paginate(Builder $query, FormRequest $request): array
    {
        $page = $request->validated('page', config('app.default_page'));
        $size = $request->validated('size', config('app.default_page_size'));
        $count = $query->count();
        $page = min($page, ceil($count/$size));
        $result = $query->limit($size)->offset(($page-1)*$size)->get();

        return [
            'count' => $count,
            'data' => $result
        ];
    }
}
