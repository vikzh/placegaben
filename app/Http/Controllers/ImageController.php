<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        $imageName = DB::table('images')->inRandomOrder()->pluck('filename')->first();
        $image = Image::make("img/{$imageName}")->fit($width, $height)->response('jpg');
        return Response($image)->header('Content-Type', 'image/jpg');
    }
}
