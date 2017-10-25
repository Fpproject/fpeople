<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TagCrudRequest as StoreRequest;
use App\Http\Requests\TagCrudRequest as UpdateRequest;

class TagCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\Tag");
        $this->crud->setRoute("admin/tag");
        $this->crud->setEntityNameStrings('tag', 'tags');
        $this->crud->setColumns(['name']);
        $this->crud->addField([
          'name' => 'name',
          'label' => "Tag name"
        ]);
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'browse'
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Will be automatically generated from your title, if left empty.'
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addField([    // TEXT
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date',
            'value' => date('Y-m-d')
        ], 'create');
        $this->crud->addField(
        [
            'name' => 'event_date_range', // a unique name for this field
            'start_name' => 'start_date', // the db column that holds the start_date
            'end_name' => 'end_date', // the db column that holds the end_date
            'label' => 'Event Date Range',
            'type' => 'date_range',
            // OPTIONALS
            'start_default' => '1991-03-28 01:01', // default value for start_date
            'end_default' => '1991-04-05 02:00', // default value for end_date
            'date_range_options' => [ // options sent to daterangepicker.js
                'timePicker' => true,
                'locale' => ['format' => 'DD/MM/YYYY HH:mm']
            ]
        ] 
        );
        $this->crud->addField(
            [   // Checkbox
                'name' => 'active',
                'label' => 'Active',
                'type' => 'checkbox'
        ]);
        $this->crud->addField(
         [   // CKEditor
            'name' => 'description',
            'label' => 'Description',
            'type' => 'ckeditor',
            'extra_plugins' => ['oembed', 'widget', 'justify']
        ]);
        
        
    }

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}