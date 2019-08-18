<?php

namespace App\Http\Controllers;

use App\Category;
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

    public function index()
    {
        $categories = $this->category->all();
        return view('admin.categories.index', compact('categories'));
//        $categories = $this->category->paginate('10');
//        return $this->response->paginator($categories, new CategoryTransformers)->setStatusCode(200);

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
    public function destroy(Category $category)
    {
        $this->category->destroy($category);

        return redirect()->route('admin.category.index')/*
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('membercv::membercvs.title.membercvs')]))*/ ;
    }
}
