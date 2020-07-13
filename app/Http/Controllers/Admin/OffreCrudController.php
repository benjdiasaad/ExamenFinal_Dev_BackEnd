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
        $f1 = [
            
            'name' => 'imgPath',
            'type' => 'image',
            'label' => 'Image',
            'height' => '120px',
             'width' => '120px',
        ];
        $f2 = [
            'name' => 'adresse',
            'type' => 'text',
            'label' => 'Adresse de logement',
        ];
        $f3 = [
            'name' => 'prix',
            'type' => 'text',
            'label' => 'Prix',
        ];
        $f4 = [
            'name' => 'capacite',
            'type' => 'text',
            'label' => 'La capacité',
        ];
       
        $f5 = [
            'name' => 'privilege',
            'type' => 'text',
            'label' => 'Les privilèges'
        ];
        $this->crud->addColumns([$f1, $f2, $f3, $f4,$f5]);
    }

    public function setupCreateOperation()
    {
        $this->crud->setValidation(OffreRequest::class);
        
        $this->crud->addField([
            'label' => "Adresse de logement",
            'name' => 'adresse','type' => 'address_algolia']);
        
        $this->crud->addField( [
            'label' => "La superficé",
            'name' => 'superficie','type' => 'number']);
        $this->crud->addField( [
            'label' => "Prix",
            'name' => 'prix','type' => 'number']);
        $this->crud->addField([
            'label' => "La capacité",
            'name' => 'capacite','type' => 'number']);
        $this->crud->addField([
            'label' => "Les privilèges",
            'name' => 'privilege',
            'type' => 'text'
            ]);    
        $this->crud->addField( [ 
            'name' => 'imgPath', 'type' => 'image', 
            'label' => 'Image','prefix' => 'uploads/images/offres/',
            'height' => '300px','crop' => true, 'aspect_ratio' => 1, 
            'upload' => true, 'tab' => 'Photos de logement']);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
