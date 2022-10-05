<?php

namespace App\Trait;

use PhpParser\Builder\Trait_;

trait pharmacyTrait
{

    // function to add photo
    function storImage($photo, $folder)
    {
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = $folder;
        $photo->move($path, $file_name);

        return $file_name;
    }
}
