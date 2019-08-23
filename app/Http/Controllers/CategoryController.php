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
//        dd($request);
//        $userId = $request->user_id;
//        $user = User::updateOrCreate(['id' => $userId],
//            ['name' => $request->name, 'email' => $request->email]);
//        return Response::json($user);

        $this->category->create($request->all());
        return redirect()->route('admin.category.index');
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
        $where = array('id' => $id);
        dd($where);
        $user = User::where($where)->first();
        return Response::json($user);
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

        return redirect()->route('admin.category.index');
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

        return redirect()->route('admin.category.index');
    }
}
