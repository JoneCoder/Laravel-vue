<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class AjaxController extends Controller
{
    public function getInfo(Request $request){
        return Employee::find($request->id);
    }
}
