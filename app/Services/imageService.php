<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

Class ImageService
{
    public static function upload($imageFile, $folderName) {
        if(is_array($imageFile)) {
            $file = $imageFile['image'];
        } else {
            $file = $imageFile;
        }

        // ファイルを保存
        $fileNameToStore = Storage::put('public/'.$folderName , $file);

        // ファイルのファイル名（ベース名）を取得
        $filename = pathinfo($fileNameToStore, PATHINFO_BASENAME);

        return $filename;
    }
}
