<?php


namespace Iyngaran\Category\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Iyngaran\Category\Http\Resources\CategoryResource as CategoryResource;
use Iyngaran\Category\Models\Category;

class CategoryTreeController extends Controller
{
    public function __invoke(Category $category): JsonResponse
    {
        return response()->json(CategoryResource::collection($category->where('parent_id', null)->get()));
    }
}
