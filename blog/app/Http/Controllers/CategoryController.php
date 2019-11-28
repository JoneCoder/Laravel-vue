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

    public function action($id){
        Category::changeStatus($id);
        return back();
    }

    public function edit($id){
        $data = Category::find($id);
        return view('admin.edit_category', [
            'category' => $data
        ]);
    }

    public function update(Request $request){
        Category::updateCategory($request);
        return redirect('home/manage/categories');
    }

    public function delete($id){
        echo "In function".$id;
    }
}
