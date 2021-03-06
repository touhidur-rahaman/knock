<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class statusController extends CrudController{

    public function all($entity){
        parent::all($entity);

        // Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			$this->filter = \DataFilter::source(new \App\status);
			$this->filter->add('title', 'Status', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Status', true);
			$this->grid->add('code', 'Status Code', true);
			$this->addStylesToGrid();


        return $this->returnView();
    }

    public function  edit($entity){

        parent::edit($entity);

        // Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

			$this->edit = \DataEdit::source(new \App\status());

			$this->edit->label('Statuses');

			$this->edit->add('title', 'Status', 'text')->rule('required');

			$this->edit->add('code', 'Status Code', 'text')->rule('unique:status')->rule('required');



        return $this->returnEditView();
    }
}
