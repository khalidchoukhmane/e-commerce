<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
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
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->removeButton('create');

        $f1 = [
            'name' => 'name',
            'type' => 'text',
            'label' => 'Nom Complet'
        ];

        $f2 = [
            'name' => 'email',
            'type' => 'text',
            'label' => 'Email'
        ];

        $f3 = [
            'name' => 'active',
            'type' => 'boolean',
            'label' => 'Active'
        ];

        $f4 = [
            'name' => 'society',
            'type' => 'text',
            'label' => 'Société'
        ];

        $f5 = [
            'name' => 'adresse',
            'type' => 'text',
            'label' => 'adresse'
        ];
        $this->crud->addColumns([$f1, $f2, $f3,$f4,$f5]);

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
        CRUD::setValidation(UserRequest::class);

        $this->crud->addField([
            'name' => 'name',
            'label' => "Nom",
            'hidden' => true,
        ]);
        $this->crud->addField([
            'name' => 'email',
            'label' => "Email",
            'hidden' => true,
        ]);
        $this->crud->addField([
            'name'            => 'active',
            'label'           => "Active",
            'type'            => 'select_from_array',
            'options'         => ['0' => 'Non', '1' => 'Oui'],
        ]);

        $this->crud->addField([
            'name' => 'society',
            'label' => "Société",
            'hidden' => true,
        ]);

        $this->crud->addField([
            'name' => 'adresse',
            'label' => "Adresse",
            'hidden' => true,
        ]);
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