<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(){
        return view('admin.employ.add_employ');
    }

    public function manage(){
        return view('admin.employ.manage_employ',[
            'employers' => Employee::all()
        ]);
    }

    public function store(Request $request){
        Employee::saveInfo($request);
        return redirect('/manage/employee');
    }

    public function update(Request $request){
        Employee::saveChange($request);
        return redirect('/manage/employee');
    }

    public function delete(Request $request){
        Employee::deleteEmploy($request);
        return back();
    }
}
