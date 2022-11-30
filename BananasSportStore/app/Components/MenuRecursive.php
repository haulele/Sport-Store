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

    public function MenuRecursiveEdit($parentIdMenuEdit, $IdMenuEdit, $parent_id = 0, $subMark = ''){
        $data = Menu::where('parent_id', $parent_id)->get();
        foreach ($data as $dataItem) {
            if($parentIdMenuEdit == $dataItem->id) {
                $this->html .= '<option selected value =" ' . $dataItem->id . '">' .$subMark .$dataItem->name. '</option>';
            }
            else if($IdMenuEdit != $dataItem->id) {
                $this->html .= '<option value =" ' . $dataItem->id . '">' .$subMark .$dataItem->name. '</option>';
            }
            
            $this->MenuRecursiveEdit($parentIdMenuEdit, $IdMenuEdit,  $dataItem->id, $subMark . "--");
        }
        return $this->html;
    }
}