<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadImageTrait
{
    public function imageUpload($uploadedFile, $path = null, $filename = null, $disk = 'public')
    {
        try {
            $name = !is_null($filename) ? $filename : substr(str_shuffle('abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789'),0,7);
    
            $file = $uploadedFile->storeAs($path, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
            return $file;
        }
        catch(\Exception $e) {
            \Log::error('image upoad error', [$e->getMessage()]);
            return 0;
        }
    }
}