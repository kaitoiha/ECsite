<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

Class ImageService
{
    public static function upload($imageFile, $folderName) {
        // dd($imageFile['image']);
        if(is_array($imageFile)) {
            $file = $imageFile['image'];
        } else {
            $file = $imageFile;
        }

        $fileNameToStore = Storage::put('public/'.$folderName , $file);

        $filename = pathinfo($fileNameToStore, PATHINFO_BASENAME);

        return $filename;
    }
}
