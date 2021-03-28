<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Delivery extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'deliveries';
    // protected $primaryKey = 'id';
     public $timestamps = false;
    protected $guarded = ['id'];
     protected $fillable = ['image', 'text'];
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

    public function setImageAttribute($value)
    {
        $pathToImage = '/images/slider-products/';
        // если изображение было стёрто
        if ($value == null) {
//            удаляем изображение с диска
            Storage::disk('public')->delete($this->{'image'});
//            устанавливаем null в базе данных
            $this->attributes['image'] = null;
        }
//        если пришло изображение как base64, сохраняем его для DB
        if (Str::startsWith($value, 'data:image')) {
            $image = Image::make($value)->encode('jpeg');
            // resize image to fixed size
            $image->resize(680, 550);
            $fileName = md5($value . time()) . '.jpeg';
            Storage::disk('public')->put($pathToImage . $fileName, $image->stream());
            Storage::disk('public')->delete($this->{'image'});
            $this->attributes['image'] = $pathToImage . $fileName;
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
