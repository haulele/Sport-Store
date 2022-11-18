<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recursive;

class CategoryController extends Controller
{
    private $htmlSelect;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function create()
    {
        $data = $this->category->all();
        $recursive = new Recursive($data);
        $htmlOption = $recursive->categoryRecursive(0);
        return view('category.add', compact('htmlOption'));

    }

    public function index()
    {
        return view(view:'category.index');
    }

    public function store(Request $request){
        $this->category->create [[
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' =>  str_slug($request->name),
    ]];
    }
}
