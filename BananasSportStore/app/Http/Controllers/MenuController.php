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
        return view('menus.index', compact('menus'));
    }

    public function create()
    {

        $optionSelect = $this->menuRecursive->MenuRecursiveAdd();
        return view('menus.add', compact('optionSelect'));
    }

    public function store(Request $request) 
    {
        $this->menu->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('menus.index');
    }
}
