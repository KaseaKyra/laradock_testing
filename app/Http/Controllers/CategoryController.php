<?php

namespace App\Http\Controllers;

use App\Category;
use App\Transformers\CategoryTransformers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = $this->category->all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.category.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->category->create($request->all());

        return redirect()->route('admin.category.index');
//            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('jobnews::jobnews.title.jobnews')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Category $category
     * @param Request $request
     * @return Response
     */
    public function update(Category $category, Request $request)
    {
        $this->category->update($category, $request->all());

        return redirect()->route('admin.category.index')/*
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('membercv::membercvs.title.membercvs')]))*/ ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy($category)
    {
//        dd($category);
        $this->category->destroy($category);

        return redirect()->route('admin.category.index')/*
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('membercv::membercvs.title.membercvs')]))*/ ;
    }
}
