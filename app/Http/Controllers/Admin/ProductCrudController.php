<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('продукт', 'Продукция');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'sort', 'type' => 'number', 'label' => 'Сортировка.']); // columns
        CRUD::addColumn(
            [
                'name' => 'blockType',
                'type' => 'relationship',
                'label' => 'Тип блока.',
            ]
        ); // columns
        CRUD::addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Наименование.']); // columns
        CRUD::addColumn(['name' => 'description', 'type' => 'text', 'label' => 'Описание.']); // columns
        CRUD::addColumn(['name' => 'price', 'type' => 'text', 'label' => 'Цена.']); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }


    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }


    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);
        $productCount = Product::count() + 1;

        CRUD::addField(['name' => 'sort', 'type' => 'number', 'label' => 'Сортировка.', 'default' => $productCount]);
        CRUD::addField(
            [
                'name' => 'block_type_id',
                'type' => 'select',
                'label' => 'Тип блока.',
                'entity' => 'blockType',
                'model' => "App\Models\BlockType", // related model
                'attribute' => 'name', // foreign key attribute that is shown to user

            ]
        );
        CRUD::addField(['name' => 'name', 'type' => 'text', 'label' => 'Наименование.']);
        CRUD::addField(['name' => 'description', 'type' => 'ckeditor', 'label' => 'Описание.']);
        CRUD::addField(['name' => 'price', 'type' => 'text', 'label' => 'Цена.']);

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
