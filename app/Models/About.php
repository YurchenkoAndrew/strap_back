<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class About extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'abouts';
    // protected $primaryKey = 'id';
     public $timestamps = false;
    protected $guarded = ['id'];
     protected $fillable = ['text_one', 'image_one', 'text_two', 'image_two', 'text_third', 'image_third', 'image_four'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setImageOneAttribute($value)
    {
        $pathToImage = '/images/about/';
        $attributeName = 'image_one';
        $width = 960;
        $height = 1280;
        $this->workToImage($value, $pathToImage, $attributeName, $width, $height);
    }

    public function setImageTwoAttribute($value)
    {
        $pathToImage = '/images/about/';
        $attributeName = 'image_two';
        $width = 960;
        $height = 1280;
        $this->workToImage($value, $pathToImage, $attributeName, $width, $height);
    }

    public function setImageThirdAttribute($value)
    {
        $pathToImage = '/images/about/';
        $attributeName = 'image_third';
        $width = 960;
        $height = 960;
        $this->workToImage($value, $pathToImage, $attributeName, $width, $height);
    }

    public function setImageFourAttribute($value)
    {
        $pathToImage = '/images/about/';
        $attributeName = 'image_four';
        $width = 960;
        $height = 960;
        $this->workToImage($value, $pathToImage, $attributeName, $width, $height);
    }

    private function workToImage($value, $pathToImage, $attributeName, $width, $height){

        // если изображение было стёрто
        if ($value == null) {
//            удаляем изображение с диска
            Storage::disk('public')->delete($this->{$attributeName});
//            устанавливаем null в базе данных
            $this->attributes[$attributeName] = null;
        }
//        если пришло изображение как base64, сохраняем его для DB
        if (Str::startsWith($value, 'data:image')) {
            $image = Image::make($value)->encode('jpeg');
            // resize image to fixed size
            $image->resize($width, $height);
            $fileName = md5($value . time()) . '.jpeg';
            Storage::disk('public')->put($pathToImage . $fileName, $image->stream());
            Storage::disk('public')->delete($this->{$attributeName});
            $this->attributes[$attributeName] = $pathToImage . $fileName;
        }
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($obj) {
            Storage::disk('public')->delete($obj->image);
        });
    }
}
