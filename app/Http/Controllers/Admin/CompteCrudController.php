<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CompteRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CompteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CompteCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Compte::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/compte');
        CRUD::setEntityNameStrings('compte', 'comptes');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns
        CRUD::column('numeroCompte')->type('text')->label('numero de compte');
        CRUD::column('solde')->type('text')->label('solde');
        $this->crud->enableExportButtons();

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
        CRUD::setValidation(CompteRequest::class);

        // CRUD::setFromDb(); // fields
        $this->crud->addField([
            'label' => "Client",
            'type' => 'select2',
            'name' => 'id_client',// the db column for the foreign key
            // optional
            'entity'    => 'client', // the method that defines the relationship in your Model
            'model'     => "App\Models\Client", // foreign key model
            'attribute' => 'nom', // foreign key attribute that is shown to user
            'default'   => 1 // set the default value of the select2
        ]);
        CRUD::field('numeroCompte')->type('number')->label('numero de compte');
        CRUD::field('solde')->type('number')->label('solde initial');
        
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
