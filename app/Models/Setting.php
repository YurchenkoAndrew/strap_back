<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Setting extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'settings';
    // protected $primaryKey = 'id';
     public $timestamps = false;
    protected $guarded = ['id'];
     protected $fillable = ['logo', 'name', 'address', 'phone', 'whatsapp', 'instagram'];
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

    public function setLogoAttribute($value)
    {
        $pathToImage = '/images/logo/';
        $attributeName = 'logo';
        $width = 96;
        $height = 54;
        $this->workToImage($value, $pathToImage, $attributeName, $width, $height);
    }

    private function workToImage($value, $pathToImage, $attributeName, $width, $height){

        // ???????? ?????????????????????? ???????? ????????????
        if ($value == null) {
//            ?????????????? ?????????????????????? ?? ??????????
            Storage::disk('public')->delete($this->{$attributeName});
//            ?????????????????????????? null ?? ???????? ????????????
            $this->attributes[$attributeName] = null;
        }
//        ???????? ???????????? ?????????????????????? ?????? base64, ?????????????????? ?????? ?????? DB
        if (Str::startsWith($value, 'data:image')) {
            $image = Image::make($value)->encode('png');
            // resize image to fixed size
            $image->resize($width, $height);
            $fileName = md5($value . time()) . '.png';
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
