<?php
namespace Shetabit\Base\Traits;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


trait Images
{
    public function storeImage($image, $path, $size = null, $encode = 'jpg')
    {
        $id = generateRandomCharacters(5);
        $img = Image::make($image);

        if($size <> null) {
            $img->resize($size, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }

        $img->encode($encode)->save(public_path() . '/' . $path . '/' . $id . '.' . $encode);

        return $id;
    }


    public function deleteImage($path, $image)
    {
        File::delete(public_path() . '/' . $path . '/' . $image . '.jpg');
    }


    public function storeImages($files, $path, $size = null)
    {
        $ids = [];
        foreach($files as $file) {
            $id = $this->storeImage($file, $path, $size);
            array_push($ids, $id);
        }
        return $ids;
    }


    public function deleteImages($files, $path)
    {
        if ($files) {
            foreach($files as $file) {
                $this->deleteImage(public_path() . '/' . $path . '/' . $file);
            }
        }
    }
}