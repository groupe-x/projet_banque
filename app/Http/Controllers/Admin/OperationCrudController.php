<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OperationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OperationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OperationCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Operation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/operation');
        CRUD::setEntityNameStrings('operation', 'operations');
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
        $this->crud->addColumn([
            'label' => "Client",
            'type' => 'select',
            'name' => 'id_client',// the db column for the foreign key
            // optional
            'entity'    => 'client', // the method that defines the relationship in your Model
            'model'     => "App\Models\Client", // foreign key model
            'attribute' => 'nom', // foreign key attribute that is shown to user
            'default'   => 1 // set the default value of the select2
        ]);
        CRUD::column('solde_initial')->type('text')->label('Solde initial');

        // CRUD::addColumn(['solde_initial' => 'Solde initial', 'type' => 'text']);
        $this->crud->addColumn([
            'label' => "Type Operation",
            'type' => 'select',
            'name' => 'id_type_op',// the db column for the foreign key
            // optional
            'entity'    => 'typeOp', // the method that defines the relationship in your Model
            'model'     => "App\Models\TypeOperation", // foreign key model
            'attribute' => 'libelle', // foreign key attribute that is shown to user
            'default'   => 1 // set the default value of the select2
        ]);
        CRUD::addColumn(['name'=>'montant', 'label' => 'montant de l\'operation', 'type' => 'text']);
        CRUD::addColumn(['name'=>'new_solde' , 'label' =>  'nouveau solde', 'type' => 'text']);
        CRUD::addColumn(['name'=>'date', 'label' => 'date', 'type' => 'date']);
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
        CRUD::setValidation(OperationRequest::class);

        // CRUD::setFromDb(); // fields

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
