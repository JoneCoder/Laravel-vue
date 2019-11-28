<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role');
    }

    public function addCategory(){
        return view('admin.category');
    }

    public function add(Request $request){
        Category::saveInfo($request);
        /*$category = new Category();
        $category->saveInfo($request);*/
        return back()->with('success', 'Category info save successfully!');
    }

    public function manage(){
        return view('admin.manage_category', [
            'categories' => Category::all()
        ]);
    }
}
