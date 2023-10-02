<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MenuRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MenuCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MenuCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Menu::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/menu');
        CRUD::setEntityNameStrings('menu', 'menus');
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
        CRUD::column('nom_element');
        CRUD::column('element');
        CRUD::column('parent_id');

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
        CRUD::setValidation(MenuRequest::class);

        CRUD::field('nom_element');
        CRUD::field('ordre');
        
        $this->crud->addField([
            'name'            => 'status',
            'label'           => "Status",
            'type'            => 'select_from_array',
            'options'         => ['1' => 'Publié', '2' => 'Non publié'],
            'allows_null'     => false,
        ]);

        $this->crud->addField([
            'name'            => 'element',
            'label'           => "Element",
            'type'            => 'select_from_array',
            'options'         => [
                'http://127.0.0.1:8000/accueil' => 'Accueil', 
                'http://127.0.0.1:8000/mot-de-president' => 'Mot de président',
                'http://127.0.0.1:8000/produits' => 'Produits',
                'http://127.0.0.1:8000/services' => 'SERVICES',
                'http://127.0.0.1:8000/materiel' => 'MATÉRIEL',
                'http://127.0.0.1:8000/erp' => 'ERP',
                'http://127.0.0.1:8000/creation-des-sites-web' => 'Création des sites Web',
                'http://127.0.0.1:8000/hebergements' => 'Hébergements',
                'http://127.0.0.1:8000/contrat-de-maintenance' => 'Contrat de Maintenance',
                'http://127.0.0.1:8000/serveurs' => 'Serveurs',
                'http://127.0.0.1:8000/ordinateurs-fixes' => 'Ordinateurs Fixes',
                'http://127.0.0.1:8000/ordinateurs-portables' => 'Ordinateurs Portables',
                'http://127.0.0.1:8000/imprimantes' => 'Imprimantes',
                'http://127.0.0.1:8000/nos-references' => 'Nos Références',
                'http://127.0.0.1:8000/contact' => 'Contact'
                ],
            'allows_null'     => false,
        ]);

        CRUD::field('element');
        CRUD::field('parent_id');

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
