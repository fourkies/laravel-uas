<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skillController extends Controller
{
    public function index() 
    {
        return view('dashboard.skill.index');
    }
    public function update(Request $request) 
    {
        if($request->method() == 'POST') {
           $request->validate([
                '_language' => 'required',
                '_workflow' => 'required',
           ],[
                '_language.required' => 'Silahkan masukkan bahasa Pemrograman yang anda kuasai',
                '_workflow.required' => 'Silahkan masukkan workflow yang anda kuasai',
           ]);
        }
    }
}
