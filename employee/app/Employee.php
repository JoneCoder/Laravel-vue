<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Image;

class Employee extends Model
{
    protected $fillable = ['first_name', 'last_name', 'gender', 'email',
        'date_of_birth', 'designation', 'membership', 'salary', 'photo', 'address',
        'mobile', 'postcode', 'city', 'country'];
    use SoftDeletes;

    public static function saveInfo($request){
        $id = Employee::insertGetId($request->except('_token', 'photo'));
        if($request->hasFile('photo')){
            $photo = $request->photo;
            $fileExtension = $photo->getClientOriginalExtension();
            $fileName = 'avatar'.$id.'.'.$fileExtension;
            Image::make($photo)->resize(300, 300)->save(base_path('public/uploads/employeePic/'.$fileName), 100);
            Employee::find($id)->update([
                'photo' => $fileName,
            ]);
        }
    }

    public static function saveChange($request){
        $id = $request->id;
        Employee::find($id)->update($request->except('_token', 'photo'));
        if($request->hasFile('photo')){
            $photo = $request->photo;
            $fileExtension = $photo->getClientOriginalExtension();
            $fileName = 'avatar'.$id.'.'.$fileExtension;
            Image::make($photo)->resize(300, 300)->save(base_path('public/uploads/employeePic/'.$fileName), 100);
            Employee::find($id)->update([
                'photo' => $fileName,
            ]);
        }
    }

    public static function deleteEmploy($request){
        Employee::find($request->id)->delete();
    }

}
