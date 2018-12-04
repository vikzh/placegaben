<?php

namespace App\Console\Commands;

use Exception;
use App\Image;
use App\Http\Controllers\ImageController;
use Illuminate\Console\Command;

class UploadImagesCommand extends Command
{
    protected $signature = "images:fresh";

    protected $description = "Drop all entries and re-insert all images from public directory";

    public function handle()
    {
        try {
            Image::storeImages(Image::getImagesPublicDirectory());
            echo "images have been rewritten\n";
        } catch (Exception $e) {
            $this->error("An error occurred");
        }
    }
}
