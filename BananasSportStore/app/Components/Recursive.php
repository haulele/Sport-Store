<?php
namespace App\Components;


use App\Models\Category;
class Recursive {
    private $data;
    private $htmlSelect = '';

    public function __construct($data)
    {
        $this->data = $data;
    }



    public function categoryRecursive($id, $text = '')
    {
        foreach ($this->data as $value){
            if($value['parent_id'] == $id){
                $this->htmlSelect .= "<option value= ' " . $value['id'] . " '>" . "-" . $value['name'] . "</option>";
                $this->categoryRecursive($value['id'], '$text' . '-');
            }
        }
        return $this->htmlSelect;
    }
}
?>