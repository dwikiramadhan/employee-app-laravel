<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee(){
        return view('adminweb.pages.employee.employee');
    }
    public function add(){
        return view('adminweb.pages.employee.add');
    }
    public function insert(Request $request){
        $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
        ]);
    }
}
