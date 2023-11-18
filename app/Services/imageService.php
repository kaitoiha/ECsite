<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

Class ImageService
{
    public static function upload($imageFile, $folderName) {
        $fileNameToStore = Storage::put('public/'.$folderName , $imageFile);

        $filename = pathinfo($fileNameToStore, PATHINFO_BASENAME);

        return $filename;
    }
}
