<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class CategoryController extends CrudController{

    public function all($entity){
        parent::all($entity);

        // Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			$this->filter = \DataFilter::source(new \App\Category);
			$this->filter->add('title', 'Category', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Category', true);
			$this->grid->add('code', 'Category Code', true);

      $this->addStylesToGrid();

      // $this->grid->paginate(10);
      $this->grid->orderBy('id','asc');

        return $this->returnView();
    }

    public function  edit($entity){

        parent::edit($entity);

        // Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

			$this->edit = \DataEdit::source(new \App\Category());

			$this->edit->label('Categories');

			$this->edit->add('title', 'Category', 'text')->rule('required');

      $this->edit->add('code', 'Category Code', 'text')->rule('unique:categories')->rule('required');


        return $this->returnEditView();
    }
}
