<?php

namespace App\Http\Controllers;
use App\Components\Recursive;
use App\Models\Category;
use App\Models\Product;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;

class ProductController extends Controller
{
    use StorageImageTrait;
    private $category;
    private $product;
    private $productImage;
    public function __construct(Category $category, Product $product, ProductImage $productImage)
    {
        $this->category = $category;
        $this->product = $product;
        $this->productImage = $productImage;
    }
    public function index()
    {
        $products = $this->product->latest()->paginate(5);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.product.add', compact('htmlOption'));
    }

    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recursive = new Recursive($data);
        $htmlOption = $recursive->categoryRecursive($parentId);
        return $htmlOption;
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataProductCreate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' =>$request->content,
                'user_id' => auth() ->id(),
                'category_id' => $request->category_id,
            ];
            $dataUploadFeatureImage = $this->storageTraitUpload($request , 'feature_image_path', 'product');
            if(!empty($dataUploadFeatureImage)) {
                $dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $product = $this->product->create($dataProductCreate);
            //Insert data to product_images
            if($request->hasFile('image_path')){
                foreach($request->image_path as $fileItem){
                    $dataProductImageDetail = $this->storageTraitUploadMultiple($fileItem, 'product');
                    $product->images()->create([
                        'image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name'],
                    ]);
                }  
            }
            DB::commit();
            return redirect()->route('product.index');
        }
        catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . "Line :" . $exception->getLine());
        }

    }

    public function edit($id)
    {
        $product = $this->product->find($id);
        $htmlOption = $this->getCategory($product->category_id);
        return view('admin.product.edit', compact('htmlOption', 'product'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataProductUpdate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' =>$request->content,
                'user_id' => auth() ->id(),
                'category_id' => $request->category_id,
            ];
            $dataUploadFeatureImage = $this->storageTraitUpload($request , 'feature_image_path', 'product');
            if(!empty($dataUploadFeatureImage)) {
                $dataProductUpdate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductUpdate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $this->product->find($id)->update($dataProductUpdate);
            $product = $this->product->find($id);
            //Insert data to product_images
            if($request->hasFile('image_path')){
                $this->productImage->where('product_id', $id)->delete();
                foreach($request->image_path as $fileItem){
                    $dataProductImageDetail = $this->storageTraitUploadMultiple($fileItem, 'product');
                    $product->images()->create([
                        'image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name'],
                    ]);
                }  
            }
            DB::commit();
            return redirect()->route('product.index');
        }
        catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . "Line :" . $exception->getLine());
        }
    }

    public function delete($id)
    {
        try 
        {
            $this->product->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        }
        catch (Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . "Line :" . $exception->getLine());
            return response()->json ([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
}