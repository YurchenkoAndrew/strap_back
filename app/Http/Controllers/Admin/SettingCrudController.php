<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SettingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SettingCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

//    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Setting::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/setting');
        CRUD::setEntityNameStrings('запись', 'Конфигурация');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        if (Setting::count() > 0) {
            $this->crud->denyAccess((array)'create');
        }
        CRUD::addColumn(['name' => 'logo', 'type' => 'image', 'label' => 'Логотип.']); // columns
        CRUD::addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Название.']); // columns
        CRUD::addColumn(['name' => 'address', 'type' => 'text', 'label' => 'Адрес.']); // columns
        CRUD::addColumn(['name' => 'phone', 'type' => 'text', 'label' => 'Телефон.']); // columns
        CRUD::addColumn(['name' => 'whatsapp', 'type' => 'text', 'label' => 'Whatsapp.']); // columns
        CRUD::addColumn(['name' => 'instagram', 'type' => 'text', 'label' => 'Instagram.']); // columns

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
        if (Setting::count() == 0) {
            CRUD::setValidation(SettingRequest::class);

            CRUD::addField(
                [
                    'name' => 'logo',
                    'type' => 'image',
                    'label' => 'Логотип.',
                ]
            ); // field
            CRUD::addField(['name' => 'name', 'type' => 'text', 'label' => 'Название.']); // field
            CRUD::addField(['name' => 'address', 'type' => 'text', 'label' => 'Адрес.']); // field
            CRUD::addField(['name' => 'phone', 'type' => 'text', 'label' => 'Телефон.']); // field
            CRUD::addField(['name' => 'whatsapp', 'type' => 'url', 'label' => 'Whatsapp.']); // field
            CRUD::addField(['name' => 'instagram', 'type' => 'url', 'label' => 'Instagram.']); // field
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
        CRUD::setValidation(SettingRequest::class);

        CRUD::addField(
            [
                'name' => 'logo',
                'type' => 'image',
                'label' => 'Логотип.',
            ]
        ); // field
        CRUD::addField(['name' => 'name', 'type' => 'text', 'label' => 'Название.']); // field
        CRUD::addField(['name' => 'address', 'type' => 'text', 'label' => 'Адрес.']); // field
        CRUD::addField(['name' => 'phone', 'type' => 'text', 'label' => 'Телефон.']); // field
        CRUD::addField(['name' => 'whatsapp', 'type' => 'number', 'label' => 'Whatsapp. (77051234567)']); // field
        CRUD::addField(['name' => 'instagram', 'type' => 'url', 'label' => 'Instagram.']); // field
    }
}
