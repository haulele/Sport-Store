<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomepageController extends Controller
{
    public function index(){
        $sliders = slider::latest()->get();
        $products = Product::latest()->take(3)->get();
        $productsHot = Product::latest('quantity_sold', 'desc')->take(3)->get();
        return view('end-users.homepage', compact('sliders', 'products', 'productsHot'));
    }
    public function product(){
        $categoriesFull = Category::where('parent_id', 0)->get();
        $productsfull = Product::latest()->paginate(4);
        return view('end-users.product', compact('categoriesFull', 'productsfull' ));
    }
    public function introduce(){
        return view('end-users.introduce');
    }
    public function contact() {
        return view('end-users.contact');
    }
    public function categoryProduct($slug, $categoryId){
        $categoriesFull = Category::where('parent_id', 0)->get();
        $productsfilter = Product::where('category_id', $categoryId)->paginate(4);
        return view('end-users.category.productlist', compact('categoriesFull', 'productsfilter'));
    }
}
