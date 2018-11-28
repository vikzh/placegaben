<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;

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

    public function show ($width, $height)
    {
        $imageName = app('db')->select("SELECT filename FROM images ORDER BY random() LIMIT 1")[0];

        $image = Image::make("img/2.jpg")->fit($width, $height)->response('jpg');
        return Response($image)->header('Content-Type', 'image/png');
    }
}
