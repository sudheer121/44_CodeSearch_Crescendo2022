<?php

namespace App\Support;

use File;

class Helpers
{
    public static function getRandomFileInSubdir(string $subdir): string
    {
        $files = File::allFiles(public_path('images/'.$subdir));
        $randomFile = $files[rand(0, count($files) - 1)];
        $name = pathinfo($randomFile)['basename'];
        $name = 'images/'.$subdir.'/'.$name;
        return $name;
    }
}
