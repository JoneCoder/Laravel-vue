<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    public function about(){
        $name = 'Mosiur Rahman';
        $city = 'Dhaka';
        //return view('about', compact('name', 'city'));
        //return view('about')->with('name', $name)
        //                    ->with('city', $city);
        //return view('about')->with([
        //    'name' => $name,
        //    'city' => $city
        //]);
        return view('about', [
            'name' => $name,
            'city' => $city
        ]);
    }
    
    public function test(){
        return view('test');
    }
    
    public function create(Request $request){
        return $request->all();
    }
}