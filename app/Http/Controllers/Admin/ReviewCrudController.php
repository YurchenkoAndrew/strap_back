<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReviewCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReviewCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Review::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/review');
        CRUD::setEntityNameStrings('отзыв', 'Отзывы');
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
        CRUD::addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Имя.']); // columns
//        CRUD::addColumn(['name' => 'description', 'type' => 'ckeditor', 'label' => 'Отзыв.']); // columns
        CRUD::addColumn(['name' => 'image', 'type' => 'image', 'label' => 'Фото.']); // columns
//        CRUD::addColumn(['name' => 'instagram', 'type' => 'text', 'label' => 'Instagram.']); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Show operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-show-entries
     * @return void
     */
    protected function setupShowOperation()
    {
        CRUD::addColumn(['name' => 'sort', 'type' => 'number', 'label' => 'Сортировка.']); // columns
        CRUD::addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Имя.']); // columns
        CRUD::addColumn(['name' => 'description', 'type' => 'ckeditor', 'label' => 'Отзыв.']); // columns
        CRUD::addColumn(['name' => 'image', 'type' => 'image', 'label' => 'Фото.']); // columns
        CRUD::addColumn(['name' => 'instagram', 'type' => 'text', 'label' => 'Instagram.']); // columns

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
        CRUD::setValidation(ReviewRequest::class);
        $countItems = Review::count() + 1;

        CRUD::addField(['name' => 'sort', 'type' => 'number', 'label' => 'Сортировка.', 'default' => $countItems]); // field
        CRUD::addField(['name' => 'name', 'type' => 'text', 'label' => 'Имя.']); // field
        CRUD::addField(['name' => 'description', 'type' => 'ckeditor', 'label' => 'Отзыв.']); // field
        CRUD::addField(['name' => 'image', 'type' => 'image', 'label' => 'Фото.']); // columns
        CRUD::addField(['name' => 'instagram', 'type' => 'url', 'label' => 'Instagram.']); // field

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
