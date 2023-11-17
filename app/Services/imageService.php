<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

Class ImageService
{
    public static function upload($imageFile, $folderName) {
        Storage::put('public/'.$folderName , $imageFile);
    }
}
