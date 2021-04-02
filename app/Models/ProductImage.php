<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductImage extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'product_images';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['product_id', 'name', 'image_horizontal', 'image_vertical', 'sort'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $type = '';

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

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class)->orderBy('sort');
    }

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

    public function setImageHorizontalAttribute($value)
    {
        $pathToImage1 = '/images/products/horizontal/';
        // если изображение было стёрто
        if ($value == null) {
//            удаляем изображение с диска
            Storage::disk('public')->delete($this->{'image_horizontal'});
//            устанавливаем null в базе данных
            $this->attributes['image_horizontal'] = null;
        }
//        если пришло изображение как base64, сохраняем его для DB
        if (Str::startsWith($value, 'data:image')) {
            $image = Image::make($value)->encode('jpeg');
            // resize image to fixed size
            $image->resize(1280, 960);
            $fileName = md5($value . time()) . '.jpeg';
            Storage::disk('public')->put($pathToImage1 . $fileName, $image->stream());
            Storage::disk('public')->delete($this->{'image_horizontal'});
            $this->attributes['image_horizontal'] = $pathToImage1 . $fileName;
        }
    }

    public function setImageVerticalAttribute($value)
    {
        $pathToImage1 = '/images/products/vertical/';
        // если изображение было стёрто
        if ($value == null) {
//            удаляем изображение с диска
            Storage::disk('public')->delete($this->{'image_vertical'});
//            устанавливаем null в базе данных
            $this->attributes['image_vertical'] = null;
        }
//        если пришло изображение как base64, сохраняем его для DB
        if (Str::startsWith($value, 'data:image')) {
            $image = Image::make($value)->encode('jpeg');
            // resize image to fixed size
            $image->resize(960, 1280);
            $fileName = md5($value . time()) . '.jpeg';
            Storage::disk('public')->put($pathToImage1 . $fileName, $image->stream());
            Storage::disk('public')->delete($this->{'image_vertical'});
            $this->attributes['image_vertical'] = $pathToImage1 . $fileName;
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
