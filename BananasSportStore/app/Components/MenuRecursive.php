<?php

namespace App\Components;
use App\Models\Menu;

class MenuRecursive
{
    public function __construct(){
        $this->html = '';
    }


    public function MenuRecursiveAdd($parent_id = 0, $subMark = ''){
        $data = Menu::where('parent_id', $parent_id)->get();
        foreach ($data as $dataItem) {
            $this->html .= '<option value =" ' . $dataItem->id . '">' .$subMark .$dataItem->name. '</option>';
            $this->MenuRecursiveAdd($dataItem->id, $subMark . "--");
        }
        return $this->html;
    }
}