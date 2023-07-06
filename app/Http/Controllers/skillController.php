<?php

namespace App\Http\Controllers;

use App\Models\metadata;
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

           metadata::updateOrCreate(['meta_key' => '_language'], ['meta_value' => $request->_language]);
           metadata::updateOrCreate(['meta_key' => '_workflow'], ['meta_value' => $request->_workflow]);
        
           return redirect()->route('skill.index')->with('success', 'Anda Berhasil melakukan update data skill.');
        }
    }
}
