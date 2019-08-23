<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function post()
    {
        return $this->hasMany(Post::class, 'cate_id', 'id');
    }

//    public function search(Request $request, $search)
//    {
//        dd($request);
//        if (request()->ajax()) {
//            $output = "";
//            $categories = $this->where('name', 'LIKE', '%' . $search . "%")->get();
//            if ($categories) {
//                foreach ($categories as $key => $category) {
//                    $output .= '<tr>' .
//                        '<td>' . $category->id . '</td>' .
//                        '<td>' . $category->name . '</td>' .
//                        '<td>' . $category->created_at . '</td>' .
//                        '<td>' . '<div class="btn-group"><button href="javascript:void(0)" class="btn btn-primary btn-edit"
//                            id="' . $category->id . '" data-id="' . $category->id . '">
//                            <i class="fa fa-pencil"></i></button>' .
//                        '<button href="javascript:void(0)" class="btn btn-danger btn-delete"
//                                id="' . $category->id . '" data-id="' . $category->id . '">
//                                <i class="fa fa-trash"></i></button></div>' .
//                        '</td>' .
//                        '</tr>';
//                }
//                return Response($output);
//            }
//        }
//    }
}
