<?php

namespace App\Services;

use ReflectionClass;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PhotoManagement
{
    public function __construct()
    {
        $this->basePath = config('app.env');
    }

    public function uploadPhoto($model, $image)
    {
        //eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/mgandj/user/33/33.png
        $imgPath = $this->basePath . '/' . $model->getTable() . '/' . $model->id;
        $filename = $model->id . '_' . $model->getTable() . '_' . strtotime("now") . '.' . $image->getClientOriginalExtension();
        Storage::disk('s3')->putFileAs($imgPath, $image, $filename, 'public');
        $photo_url = Storage::disk('s3')->url($imgPath . '/' . $filename);

        // list($width, $height) = getimagesize($photo_url);
        $aspect_ratio = (float) 1280 / (float) 720;
        $thumb_width = 480; #The width of image we want to set for thumbnail
        $thumb_height = (int) ($thumb_width * $aspect_ratio);

        //Thumbnail Resize
        // eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/mgandj/user/33/thumbnail/33.png
        $thumb_imgPath = $imgPath . '/thumbnail';
        $resize_image = Image::make($image)->resize($thumb_width, $thumb_height);
        Storage::disk('s3')->put($thumb_imgPath . '/' . $filename, $resize_image->stream('jpg', 60), 'public');
        $thumb_url = Storage::disk('s3')->url($thumb_imgPath . '/' . $filename);

        return ([
            'file_name' => $filename,
            'file_url' => $photo_url,
            'thumbnail_url' => $thumb_url,
            'cover' => true,
        ]);
    }

    // public function uploadReceiptPhoto($model, $image)
    // {

    //     //Log::info($this->basePath);
    //     //eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/mgandj/user/33/33.png
    //     $imgPath = $this->basePath . '/' . $model->getTable() . '/' . $model->id;
    //     $filename = $model->id . '_' . $model->getTable() . '_' . strtotime("now") . '.' . $image->getClientOriginalExtension();
    //     Storage::disk('s3')->putFileAs($imgPath, $image, $filename, 'public');
    //     $photo_url = Storage::disk('s3')->url($imgPath . '/' . $filename);

    //     $receipt = Receipt::create([
    //         'file_name' => $filename,
    //         'file_url' => $photo_url,
    //         'order_id' => $model->id,
    //     ]);
    //     return $receipt;
    // }

    public function uploadPhotos($model, $images)
    {
        foreach ($images as $image) {
            //Original Size

            //eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/mgandj/user/33/33.png
            $imgPath = $this->basePath . '/' . $model->getTable() . '/' . $model->id;
            $filename = $model->id . '_' . $model->getTable() . '_' . strtotime("now") . '.' . $image->getClientOriginalExtension();
            Storage::disk('s3')->putFileAs($imgPath, $image, $filename, 'public');
            $photo_url = Storage::disk('s3')->url($imgPath . '/' . $filename);

            // list($width, $height) = getimagesize($photo_url);
            $aspect_ratio = (float) $height / (float) $width;
            $thumb_width = 480; #The width of image we want to set for thumbnail
            $thumb_height = (int) ($thumb_width * $aspect_ratio);

            //Thumbnail Resize
            // eg. https://pv-rental-bucket.s3.amazonaws.com/pv-rental/local/user/33/thumbnail/33.png
            $thumb_imgPath = $imgPath . '/thumbnail';
            $resize_image = Image::make($image)->resize($thumb_width, $thumb_height);
            Storage::disk('s3')->put($thumb_imgPath . '/' . $filename, $resize_image->stream('jpg', 60), 'public');
            $thumb_url = Storage::disk('s3')->url($thumb_imgPath . '/' . $filename);

            $model->photos()->Create([
                'file_name' => $filename,
                'file_url' => $photo_url,
                'thumbnail_url' => $thumb_url,
                'cover' => true,
            ]);
        }
    }

    public function uploadOnly($table_name, $image)
    {
        //eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/user/cover/33/33.png
        $imgPath = $this->basePath . '/' . $table_name . '/cover';
        $filename = rand(11111, 99999) . '_' . $table_name . '_' . strtotime("now") . '.' . $image->getClientOriginalExtension();
        Storage::disk('s3')->putFileAs($imgPath, $image, $filename, 'public');
        $photo_url = Storage::disk('s3')->url($imgPath . '/' . $filename);

        list($width, $height) = getimagesize($photo_url);
        $aspect_ratio = (float) $height / (float) $width;
        $thumb_width = 480; #The width of image we want to set for thumbnail
        $thumb_height = (int) ($thumb_width * $aspect_ratio);

        //Thumbnail Resize
        // eg. https://pv-rental-bucket.s3.amazonaws.com/pv-rental/local/user/33/thumbnail/33.png
        $thumb_imgPath = $imgPath . '/thumbnail';
        $resize_image = Image::make($image)->resize($thumb_width, $thumb_height);
        Storage::disk('s3')->put($thumb_imgPath . '/' . $filename, $resize_image->stream('jpg', 60), 'public');
        $thumb_url = Storage::disk('s3')->url($thumb_imgPath . '/' . $filename);

        return ['file_name' => $filename, 'file_url' => $photo_url, 'thumbnail_url' => $thumb_url];
    }

    public function uploadPhotoToSpace($model, $image)
    {
        //eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/user/cover/33/33.png
        $imgPath = $this->basePath . '/' . $model->getTable() . '/cover';
        $filename = $model->id . '_' . $model->getTable() . '_' . strtotime("now") . '.' . $image->getClientOriginalExtension();
        Storage::disk('s3')->putFileAs($imgPath, $image, $filename, 'public');
        $photo_url = Storage::disk('s3')->url($imgPath . '/' . $filename);

        list($width, $height) = getimagesize($photo_url);
        $aspect_ratio = (float) $height / (float) $width;
        $thumb_width = 480; #The width of image we want to set for thumbnail
        $thumb_height = (int) ($thumb_width * $aspect_ratio);

        //Thumbnail Resize
        // eg. https://pv-rental-bucket.s3.amazonaws.com/pv-rental/local/user/33/thumbnail/33.png
        $thumb_imgPath = $imgPath . '/thumbnail';
        $resize_image = Image::make($image)->resize($thumb_width, $thumb_height);
        Storage::disk('s3')->put($thumb_imgPath . '/' . $filename, $resize_image->stream('jpg', 60), 'public');
        $thumb_url = Storage::disk('s3')->url($thumb_imgPath . '/' . $filename);

        return ['file_name' => $filename, 'file_url' => $photo_url, 'thumbnail_url' => $thumb_url];
    }

    public function uploadPhotoForNoti($image)
    {
        //eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/user/cover/33/33.png
        $imgPath = $this->basePath . '/' . 'notifications' . '/cover';
        $filename = rand(1111, 999999) . '_' . 'notifications' . '_' . strtotime("now") . '.' . $image->getClientOriginalExtension();
        Storage::disk('s3')->putFileAs($imgPath, $image, $filename, 'public');
        $photo_url = Storage::disk('s3')->url($imgPath . '/' . $filename);

        list($width, $height) = getimagesize($photo_url);
        $aspect_ratio = (float) $height / (float) $width;
        $thumb_width = 480; #The width of image we want to set for thumbnail
        $thumb_height = (int) ($thumb_width * $aspect_ratio);

        //Thumbnail Resize
        // eg. https://pv-rental-bucket.s3.amazonaws.com/pv-rental/local/user/33/thumbnail/33.png
        $thumb_imgPath = $imgPath . '/thumbnail';
        $resize_image = Image::make($image)->resize($thumb_width, $thumb_height);
        Storage::disk('s3')->put($thumb_imgPath . '/' . $filename, $resize_image->stream('jpg', 60), 'public');
        $thumb_url = Storage::disk('s3')->url($thumb_imgPath . '/' . $filename);

        return ['file_name' => $filename, 'file_url' => $photo_url, 'thumbnail_url' => $thumb_url];
    }

    public function uploadPhotoForProfile($image)
    {
        //eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/user/cover/33/33.png
        $imgPath = $this->basePath . '/' . 'users' . '/cover';
        $filename = rand(1111, 999999) . '_' . 'users' . '_' . strtotime("now") . '.' . $image->getClientOriginalExtension();
        Storage::disk('s3')->putFileAs($imgPath, $image, $filename, 'public');
        $photo_url = Storage::disk('s3')->url($imgPath . '/' . $filename);

        list($width, $height) = getimagesize($photo_url);
        $aspect_ratio = (float) $height / (float) $width;
        $thumb_width = 480; #The width of image we want to set for thumbnail
        $thumb_height = (int) ($thumb_width * $aspect_ratio);

        //Thumbnail Resize
        // eg. https://pv-rental-bucket.s3.amazonaws.com/pv-rental/local/user/33/thumbnail/33.png
        $thumb_imgPath = $imgPath . '/thumbnail';
        $resize_image = Image::make($image)->resize($thumb_width, $thumb_height);
        Storage::disk('s3')->put($thumb_imgPath . '/' . $filename, $resize_image->stream('jpg', 60), 'public');
        $thumb_url = Storage::disk('s3')->url($thumb_imgPath . '/' . $filename);

        return ['file_name' => $filename, 'file_url' => $photo_url, 'thumbnail_url' => $thumb_url];
    }

    public function deleteDirectory($model)
    {
        Storage::disk('s3')->deleteDirectory($this->basePath . '/' . $model->getTable() . '/' . $model->id);
        $model->photos()->delete();
    }

    public function deletePhoto($model, $filename)
    {
        $reflection = new ReflectionClass($model);
        Storage::disk('s3')->delete($this->basePath . '/' . $reflection->getShortName() . '/' . $model->id . '/' . $filename);
    }

    public function deleteThumbPhoto($model, $filename)
    {
        $reflection = new ReflectionClass($model);
        Storage::disk('s3')->delete($this->basePath . '/' . $reflection->getShortName() . '/' . $model->id . '/' . 'thumbnail/' . $filename);
    }

    public function deleteOnePhoto($model, $file_url)
    {
        Storage::disk('s3')->delete($file_url);
    }

    public function deleteFromSpaces($model, $filename)
    {
        $this->deleteThumbPhoto($model, $filename);
        $this->deletePhoto($model, $filename);
        Storage::disk('s3')->deleteDirectory($this->basePath . '/' . $model->getTable() . '/' . $model->id);
    }

    public function uploadDropzonePhoto($model, $image)
    {
        //eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/mgandj/user/33/33.png
        $imgPath = $this->basePath . '/' . $model;
        $filename = $image->getClientOriginalName();
        Storage::disk('s3')->putFileAs($imgPath, $image, $filename, 'public');
        $photo_url = Storage::disk('s3')->url($imgPath . '/' . $filename);

        list($width, $height) = getimagesize($photo_url);
        $aspect_ratio = (float) $height / (float) $width;
        $thumb_width = 480; #The width of image we want to set for thumbnail
        $thumb_height = (int) ($thumb_width * $aspect_ratio);

        //Thumbnail Resize
        // eg. https://bl-playground.s3-ap-southeast-1.amazonaws.com/mgandj/user/33/thumbnail/33.png
        $thumb_imgPath = $imgPath . '/thumbnail';
        $resize_image = Image::make($image)->resize($thumb_width, $thumb_height);
        Storage::disk('s3')->put($thumb_imgPath . '/' . $filename, $resize_image->stream('jpg', 60), 'public');
        $thumb_url = Storage::disk('s3')->url($thumb_imgPath . '/' . $filename);

        $photo = Photo::Create([
            'file_name' => $filename,
            'file_url' => $photo_url,
            'thumbnail_url' => $thumb_url,
            'photoable_id' => 0,
            'photoable_type' => null,
        ]);
        return $photo;
    }

    public function deleteDropzonePhoto($model, $filename)
    {
        Storage::disk('s3')->delete($this->basePath . $model . '/' . $filename);
    }
}
