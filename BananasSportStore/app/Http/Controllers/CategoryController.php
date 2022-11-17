<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view(view:'category.add');
    }
    public function index()
    {
        return view(view:'category.index');
    }
}
