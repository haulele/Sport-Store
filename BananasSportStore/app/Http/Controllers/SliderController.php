<?php

namespace App\Http\Controllers;
use App\Http\Requests\SliderAddRequest;
use App\Models\slider;
use App\Traits\DeleteModelTrait;
use App\Traits\StorageImageTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    use DeleteModelTrait;
    use StorageImageTrait;
    private $slider;
    public function __construct(slider $slider)
    {
        $this->slider = $slider;
    }
    public function index(){
        $sliders = $this->slider->latest()->paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }
    public function create() {
        return view('admin.slider.add');
    }

    public function store(SliderAddRequest $request) {
        try{
            $dataInsert = [
                'name' => $request->name,
                'description' => $request->description,
            ];
            $dataImageSlider = $this->storageTraitUpload($request, 'image_path', 'slider');
    
            if(!empty($dataImageSlider)){
                $dataInsert['image_path'] = $dataImageSlider['file_path'];
                $dataInsert['image_name'] = $dataImageSlider['file_name'];
            }
            $this->slider->create($dataInsert);
    
            return redirect() -> route('slider.index');
        }
        catch (Exception $exception) {
            Log::error('Lỗi: ' . $exception->getMessage() . 'Line: ' . $exception->getLine());
        }
    }

    public function edit($id)
    {
        $slider = $this->slider->find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request ,$id){
        try{
            DB::beginTransaction();
            $dataUpdate = [
                'name' => $request->name,
                'description' => $request->description,
            ];
            $dataImageSlider = $this->storageTraitUpload($request, 'image_path', 'slider');
    
            if(!empty($dataImageSlider)){
                $dataUpdate['image_path'] = $dataImageSlider['file_path'];
                $dataUpdate['image_name'] = $dataImageSlider['file_name'];
            }
            $this->slider->find($id)->update($dataUpdate);
            DB::commit();
            return redirect() -> route('slider.index');
        }
        catch (Exception $exception) {
            DB::rollBack();
            Log::error('Lỗi: ' . $exception->getMessage() . 'Line: ' . $exception->getLine());
        }
    }
    
    public function delete($id) 
    {
        return $this->deleteModelTrait($id, $this->slider);
    }
}
