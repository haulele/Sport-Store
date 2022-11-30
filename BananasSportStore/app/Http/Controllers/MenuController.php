<?php

namespace App\Http\Controllers;

use App\Components\MenuRecursive;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    private $menuRecursive;
    private $menu;
    public function __construct(MenuRecursive $menuRecursive, Menu $menu)
    {
        $this->menuRecursive = $menuRecursive;
        $this->menu = $menu;
    }
    public function index()
    {
        $menus = $this->menu->paginate(5);
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {

        $optionSelect = $this->menuRecursive->MenuRecursiveAdd();
        return view('admin.menus.add', compact('optionSelect'));
    }

    public function store(Request $request) 
    {
        $parent = is_numeric($request->parent_id) ? $request->parent_id : 0;
        $this->menu->create([
            'name' => $request->name,
            'parent_id' =>  $parent,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('menus.index');
    }



    public function edit(Request $request, $id) 
    {
        $menuFollowIdEdit = $this->menu->find($id);
        $optionSelect = $this->menuRecursive->MenuRecursiveEdit($menuFollowIdEdit->parent_id, $menuFollowIdEdit->id);
        return view('admin.menus.edit', compact('optionSelect', 'menuFollowIdEdit'));
    }

    public function update(Request $request, $id)
    {
        $parent = is_numeric($request->parent_id) ? $request->parent_id : 0;
        $this->menu->find($id)->update([
            'name' => $request->name,
            'parent_id' => $parent,
            'slug' => str_slug($request->name)
        ]);    
        return redirect()->route('menus.index');
    }

    public function delete($id)
    {
        $this->menu->find($id)->delete();
        return redirect()->route('menus.index');
    }

}
