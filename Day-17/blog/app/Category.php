<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['type', 'description', 'status'];

    public static function saveInfo($request){
        /*DB::table('categories')->insert([
            'type' => $request->type,
            'description' => $request->description,
            'status' => $request->status,
        ]);*/

        /*$category = new Category();
        $category->type = $request->type;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();*/

        Category::create($request->all());
    }
}
