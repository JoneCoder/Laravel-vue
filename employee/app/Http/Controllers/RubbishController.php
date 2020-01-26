<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class RubbishController extends Controller
{
    public function show(){
        $employTrashed = Employee::onlyTrashed()->get();
        return view('admin.rubbish', [
            'employTrashed' => $employTrashed
        ]);
    }

    public function delete(Request $request){
        Employee::onlyTrashed($request->id)->forceDelete();
        return back();
    }

    public function restore(Request $request){
        Employee::onlyTrashed($request->id)->restore();
        return redirect('/manage/employee');
    }
}
