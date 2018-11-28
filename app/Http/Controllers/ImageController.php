<?php

namespace App\Http\Controllers;

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
        $image = app('db')->select("SELECT filename FROM images ORDER BY random() LIMIT 1");
        echo var_dump($image);
    }
}
