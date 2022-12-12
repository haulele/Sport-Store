<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('end-users.homepage');
    }
    public function product(){
        return view('end-users.product');
    }
    public function introduce(){
        return view('end-users.introduce');
    }
}
