<?php
    namespace App\Traits;
    use Illuminate\Support\Facades\Storage;

    use GuzzleHttp\Psr7\Request;

    trait StorageImageTrait{
        public function storageTraitUpload ($request, $fieldname, $foldername) 
        {
            if($request->hasFile($fieldname)){
                $file = $request->$fieldname;
                $fileNameOrigin = $file->getClientOriginalName();
                $fileNameHash = str_random(20) . '.' . $file->getClientOriginalExtension();
                $filepath = $request->file($fieldname)->storeAs(
                    'public/' . $foldername .  auth() -> id(), $fileNameHash);
                $dataUploadTrait = [
                    'file_name' => $fileNameOrigin,
                    'file_path' => Storage::url($filepath),
                ];
                return $dataUploadTrait;
            }
            return null;
        }

        public function storageTraitUploadMultiple ($file, $foldername) 
        {
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = str_random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('public/' . $foldername . '/' . auth()->id(), $fileNameHash);
            $dataUploadTrait = [
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filePath)
            ];
            return $dataUploadTrait;
           

        }
    }