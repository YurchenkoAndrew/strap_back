<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AboutCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class AboutCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;

//    use DeleteOperation;
    use ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\About::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/about');
        CRUD::setEntityNameStrings('запись', 'О нас');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        if (About::count() > 0) {
            $this->crud->denyAccess((array)'create');
        }
//        CRUD::addColumn(['name' => 'text_one', 'label' => 'Текст первый']); // columns
        CRUD::addColumn(['name' => 'image_one', 'type' => 'image', 'label' => 'Изображение первое']); // columns
//        CRUD::addColumn(['name' => 'text_two', 'label' => 'Текст второй']); // columns
        CRUD::addColumn(['name' => 'image_two', 'type' => 'image', 'label' => 'Изображение второе']); // columns
        CRUD::addColumn(['name' => 'image_third', 'type' => 'image', 'label' => 'Изображение второе']); // columns
        CRUD::addColumn(['name' => 'image_four', 'type' => 'image', 'label' => 'Изображение второе']); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }


    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupShowOperation()
    {
        CRUD::addColumn(['name' => 'text_one', 'label' => 'Текст первый.']); // columns
        CRUD::addColumn(['name' => 'image_one', 'type' => 'image', 'label' => 'Изображение первое.']); // columns
        CRUD::addColumn(['name' => 'text_two', 'label' => 'Текст второй.']); // columns
        CRUD::addColumn(['name' => 'image_two', 'type' => 'image', 'label' => 'Изображение второе.']); // columns
        CRUD::addColumn(['name' => 'text_third', 'label' => 'Текст третий.']); // columns
        CRUD::addColumn(['name' => 'image_third', 'type' => 'image', 'label' => 'Изображение третье.']); // columns
        CRUD::addColumn(['name' => 'image_four', 'type' => 'image', 'label' => 'Изображение четвертое.']); // columns

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
        if (About::count() === 0) {
            $this->createUpdate();
        }

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
        $this->createUpdate();
    }

    protected function createUpdate()
    {
        CRUD::setValidation(AboutRequest::class);

        CRUD::addField(['name' => 'text_one', 'type' => 'ckeditor', 'label' => 'Текст первый.']); // columns
        CRUD::addField(['name' => 'image_one', 'type' => 'image', 'label' => 'Изображение первое. (960x1280)']); // columns
        CRUD::addField(['name' => 'text_two', 'type' => 'ckeditor', 'label' => 'Текст второй.']); // columns
        CRUD::addField(['name' => 'image_two', 'type' => 'image', 'label' => 'Изображение второею (960x1280)']); // columns
        CRUD::addField(['name' => 'text_third', 'type' => 'ckeditor', 'label' => 'Текст третий.']); // columns
        CRUD::addField(['name' => 'image_third', 'type' => 'image', 'label' => 'Изображение третье. (1000x1000)']); // columns
        CRUD::addField(['name' => 'image_four', 'type' => 'image', 'label' => 'Изображение четвертое. (1000x1000)']); // columns

    }
}
