<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function add(){
    	return view('add');
    }

    public function store(Request $request){

	    $validatedData = $request->validate([
	        'name' => 'required',
	        'email' => 'required|email|unique:employees,email',
            'password1' => 'required|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'password2' => 'required|confirmed',         
	        'birth_date' => 'required|date',
	        'salary' => 'required|numeric|between:5000,50000',
    	]);


    }
}
