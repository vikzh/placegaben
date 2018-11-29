<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Cache;

class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show($width, $height)
    {
        $cacheKey = "{$width}:{$height}";
        if (Cache::has($cacheKey)) {
            $image = Cache::get($cacheKey);
        } else {
            $imageName = DB::table('images')->inRandomOrder()->pluck('filename')->first();
            $image = Image::make("img/{$imageName}")->fit($width, $height)->response('png');
            Cache::forever($cacheKey, $image);
        }

        return Response($image)->header('Content-Type', 'image/jpg');
    }
}
