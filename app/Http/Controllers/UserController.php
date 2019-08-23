<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    private $user;

    /**
     * UserController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['users'] = $this->user->orderBy('id', 'desc')->paginate(8);

        return view('admin.users.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $userId = $request->id;
        $user = $this->user->updateOrCreate(['id' => $userId], ['name' => $request->name, 'email' => $request->email]);

        return Response::json($user);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $user = User::where($where)->first();

        return Response::json($user);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->delete();

        return Response::json($user);
    }
}
