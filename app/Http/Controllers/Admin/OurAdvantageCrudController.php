<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OurAdvantageRequest;
use App\Models\OurAdvantage;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OurAdvantageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class OurAdvantageCrudController extends CrudController
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
        CRUD::setModel(\App\Models\OurAdvantage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/ouradvantage');
        CRUD::setEntityNameStrings('преимущество', 'Наши преимущества');
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
        CRUD::addColumn(['name' => 'image', 'type' => 'image', 'label' => 'Изображение.']); // columns
        CRUD::addColumn(['name' => 'name', 'label' => 'Заголовок.']); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }


    protected function setupShowOperation()
    {
        CRUD::addColumn(['name' => 'sort', 'type' => 'number', 'label' => 'Сортировка.']); // columns
        CRUD::addColumn(['name' => 'image', 'type' => 'image', 'label' => 'Изображение.']); // columns
        CRUD::addColumn(['name' => 'name', 'label' => 'Заголовок.']); // columns
        CRUD::addColumn(['name' => 'description', 'label' => 'Описание.']); // columns

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
        $countItems = OurAdvantage::count() + 1;
        CRUD::setValidation(OurAdvantageRequest::class);

        CRUD::addField(['name' => 'sort', 'type' => 'number', 'label' => 'Сортировка.', 'default' => $countItems]); // fields
        CRUD::addField(
            ['name' => 'image',
                'type' => 'image',
                'label' => 'Изображение. (44x44)',
            ]
        ); // fields

        CRUD::addField(['name' => 'name', 'type' => 'text', 'label' => 'Заголовок.']); // fields
        CRUD::addField(['name' => 'description', 'type' => 'textarea', 'label' => 'Описание.']); // fields

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
