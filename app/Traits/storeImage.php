<?php

namespace App\Traits;
use App\Models\AllModel;
use Illuminate\Support\Facades\File;

trait storeImage
{

    protected function uploadImage($image, $folder = null)
    {
        $document_path = $folder ? 'images/'.$folder : 'images';
        if (!File::exists($document_path)) {
            File::makeDirectory($document_path, 0755, true, true);
        }

        $filename  = mt_rand(1000, 10000) . time() . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move($document_path, $filename);

        return $filename;
    }

}
