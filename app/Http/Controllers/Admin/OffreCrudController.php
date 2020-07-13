<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OffreRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OffreCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class OffreCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Offre');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/offre');
        $this->crud->setEntityNameStrings('offre', 'offres');
    }

    public function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    public function setupCreateOperation()
    {
        $this->crud->setValidation(OffreRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
