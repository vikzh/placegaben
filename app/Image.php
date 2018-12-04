<?php

namespace App;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
    protected $fillable = [
        'name', 'filename'
    ];

    public static function getImagesPublicDirectory()
    {
        $allowedExtensions = ['jpg', 'png'];
        $imagesCollection = File::allFiles(base_path() . '/public/img/');
        $filteredCollection = array_filter($imagesCollection, function ($image) use ($allowedExtensions) {
            return in_array($image->getExtension(), $allowedExtensions);
        });
        $namesAndFileNames = array_map(function ($image) {
            return ['name' => strstr($image->getFileName(), '.', true), 'filename' => $image->getFileName()];
        }, $filteredCollection);
        return $namesAndFileNames;
    }

    public static function storeImages($images)
    {
        DB::table('images')->truncate();
        DB::table('images')->insert($images);
    }
}
