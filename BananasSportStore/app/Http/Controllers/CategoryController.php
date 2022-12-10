<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recursive;
use App\Traits\DeleteModelTrait;

class CategoryController extends Controller
{
    use DeleteModelTrait;
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.category.add', compact('htmlOption'));

    }

    public function index()
    {
        $categories = $this->category->latest()->paginate(5); // lấy dữ liệu mới nhất, 5 bản ghi 1 trang
        return view('admin.category.index', compact('categories')); // truyền dữ liệu vào category.index biến categories

    }

    public function store(Request $request)
    {
        $parent = is_numeric($request->parent_id) ? $request->parent_id : 0;

        $this->category->create ([
            'name' => $request->name,
            'parent_id' => $parent,
            'slug' =>  str_slug($request->name),
    ]);
    return redirect()->route('categories.index');
    }

    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recursive = new Recursive($data);
        $htmlOption = $recursive->categoryRecursive($parentId);
        return $htmlOption;
    }

    public function edit($id)
    {
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);

        return view('admin.category.edit', compact('category', 'htmlOption'));
    }

    public function update($id, Request $request)
    {
        $parent = is_numeric($request->parent_id) ? $request->parent_id : 0;

        $this->category->find($id)->update([
            'name' => $request->name,
            'parent_id' => $parent,
            'slug' =>  str_slug($request->name),
        ]);

        return redirect()->route('categories.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->category);
    }
}
