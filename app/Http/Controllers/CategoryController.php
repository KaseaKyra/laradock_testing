<?php

namespace App\Http\Controllers;

use App\Category;
use App\Transformers\CategoryTransformers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    private $category;
    private $validator;

    /**
     * CategoryController constructor.
     * @param Category $category
     * @param Validator $validator
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
////        dd($request);
//        $name = $request->name;
//        $category = $this->category->updateOrCreate(['name' => $name]);
////        return response()->json($category);
//        $rules = array(
//            'name' => 'require'
//        );
//        $error = $this->validator->make($request->all(), $rules);
//        if ($error->fails()) {
//            return response()->json(['errors' => $error->errors()->all()]);
//        }
//        $formData = array(
//            'name' => $request->name
//        );
//        AjaxCrud::create($formData);
//        return \response()->json(['success' => 'Data added successfuly']);
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
    public function edit($id)
    {
//        dd($category);
//        return view('admin.categories.edit', compact('category'));
//        if($request()->ajax()) {
//
//        }

//        if ($request()->ajax()) {
//            $data = AjaxCrud::findOrFail($id);
//            return \response()->json(['data' => $data]);
//        }
//        $where = array('id' => $id);
////        dd($where);
//        $user = Category::where($where)->first();
//
//        return Response::json($user);
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
