<?php


namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Transformers\CategoryTransformers;

class CategoryController extends Controller
{
    private $category;

    /**
     * CategoryController constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->paginate('10');
        return $this->response->paginator($categories, new CategoryTransformers)->setStatusCode(200);
    }
}
