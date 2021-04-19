<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('main');
    }
    public function dashboard(){
        return view('adminweb/pages/dashboard');
    }
}
