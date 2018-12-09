<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Cache;

class ImageController extends Controller
{
    public function index()
    {
        $images = DB::table('images')->pluck('name')->all();
        return view('home', ['images' => $images]);
    }

    public function placeImage($width, $height, $name = null)
    {
        $cacheKey = "{$width}:{$height}";
        if (Cache::has($cacheKey)) {
            $image = Cache::get($cacheKey);
        } else {
            if (!is_null($name)) {
                $imageFileName = DB::table('images')->where('name', $name)->pluck('filename')->first();
            } else {
                $imageFileName = $name ?? DB::table('images')->inRandomOrder()->pluck('filename')->first();
            }

            $image = Image::make("img/{$imageFileName}")->fit($width, $height)->response('png');
            Cache::forever($cacheKey, $image);
        }
        return Response($image)->header('Content-Type', 'image/png');
    }
}
