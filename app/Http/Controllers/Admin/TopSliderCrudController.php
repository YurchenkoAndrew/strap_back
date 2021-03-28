<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TopSliderRequest;
use App\Models\TopSlider;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TopSliderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TopSliderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\TopSlider::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/topslider');
        CRUD::setEntityNameStrings('слайд', 'Карусель верх');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'sort', 'type' => 'number', 'label' => 'Сортировка.']);
        CRUD::addColumn(['name' => 'title', 'type' => 'text', 'label' => 'Заголовок.']);
        CRUD::addColumn(['name' => 'image', 'type' => 'image', 'label' => 'Изображение.']);
        CRUD::addColumn(['name' => 'description', 'type' => 'text', 'label' => 'Описание.']);
        CRUD::addColumn(['name' => 'price', 'type' => 'text', 'label' => 'Цена.']);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();

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
        if (TopSlider::count() <= 4) {
            CRUD::setValidation(TopSliderRequest::class);

            $itemsCount = TopSlider::count() + 1;

            CRUD::addField(['name' => 'sort', 'type' => 'number', 'label' => 'Сортировка.', 'default' => $itemsCount]);
            CRUD::addField(['name' => 'title', 'type' => 'text', 'label' => 'Заголовок.']);
            CRUD::addField(['name' => 'description', 'type' => 'text', 'label' => 'Описание.']);
            CRUD::addField(['name' => 'price', 'type' => 'text', 'label' => 'Цена.']);
            CRUD::addField(
                [
                    'name' => 'image',
                    'type' => 'image',
                    'label' => 'Изображение.'
                ]
            );
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
        CRUD::setValidation(TopSliderRequest::class);

        CRUD::addField(['name' => 'sort', 'type' => 'number', 'label' => 'Сортировка.']);
        CRUD::addField(['name' => 'title', 'type' => 'text', 'label' => 'Заголовок.']);
        CRUD::addField(['name' => 'description', 'type' => 'text', 'label' => 'Описание.']);
        CRUD::addField(['name' => 'price', 'type' => 'text', 'label' => 'Цена.']);
        CRUD::addField(['name' => 'image', 'type' => 'image', 'label' => 'Изображение.']);
    }
}
