<?php
namespace App\Traits;

trait ImageUpload
{

    public function ImageUpload($image, $location, $name)
    {
        if($name){

            $extension = $image->extension();


            // custom image name
            $time           = time();
            $new_image_name = $name.$time.".".$extension;
            // Storing Image

            $image->move(public_path('/storage/uploads/'.$location), $new_image_name);
         //   $image->move(base_path('/storage/uploads/'.$location), $new_image_name);

            return $new_image_name;

        }
        $extension = $image->extension();


        // custom image name
        $time           = time();
        $new_image_name = $location.$time.".".$extension;
        // Storing Image

        $image->move(public_path('/storage/uploads/'.$location), $new_image_name);
      //  $image->move(base_path('/storage/uploads/'.$location), $new_image_name);

        return $new_image_name;

    }

}
