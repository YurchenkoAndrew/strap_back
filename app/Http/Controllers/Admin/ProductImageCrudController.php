<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductImageRequest;
use App\Models\ProductImage;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductImageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ProductImageCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\ProductImage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/productimage');
        CRUD::setEntityNameStrings('изображение', 'Изображения продуктов');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        CRUD::addColumn(
            [
                'name' => 'sort',
                'type' => 'number',
                'label' => 'Сортировка.',
            ]
        ); // columns

        CRUD::addColumn(
            [
                'name' => 'product',
                'type' => 'relationship',
                'label' => 'Продукт.',
            ]
        ); // columns

        CRUD::addColumn(
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'Название изображения.',
            ]
        ); // columns

        CRUD::addColumn(
            [
                'name' => 'image_horizontal',
                'type' => 'image',
                'label' => 'Изображение горизонтальное.',
            ]
        ); // columns

        CRUD::addColumn(
            [
                'name' => 'image_vertical',
                'type' => 'image',
                'label' => 'Изображение вертикальное.',
            ]
        ); // columns

        CRUD::addColumn(
            [
                'name' => 'sort',
                'type' => 'number',
                'label' => 'Сортировка.',
            ]
        ); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductImageRequest::class);

        $countItems = ProductImage::count() + 1;


        CRUD::addField(
            [
                'name' => 'sort',
                'type' => 'number',
                'label' => 'Сортировка.',
                'default' => $countItems,
            ]
        );

        CRUD::addField(
            [
                'name' => 'product_id',
                'type' => 'select2',
                'label' => 'Продукт.',
                'entity' => 'product',
                'model' => "App\Models\Product", // related model
                'attribute' => 'name', // foreign key attribute that is shown to user
            ]
        );

        CRUD::addField(
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'Название изображения.',
            ]
        ); // columns

        CRUD::addField(
            [
                'name' => 'image_horizontal',
                'type' => 'image',
                'label' => 'Изображение горизонтальное. (1280x960)',
            ]
        );

        CRUD::addField(
            [
                'name' => 'image_vertical',
                'type' => 'image',
                'label' => 'Изображение вертикальное. (960x1280)',
            ]
        );

        CRUD::addField(
            [
                'name' => 'sort',
                'type' => 'number',
                'label' => 'Сортировка.',
            ]
        );


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
