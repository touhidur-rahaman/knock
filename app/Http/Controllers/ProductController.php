<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class ProductController extends CrudController{

    public function all($entity){
        parent::all($entity);

        // Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			$this->filter = \DataFilter::source(new \App\Product);
			$this->filter->add('title', 'Product Title', 'text');
      $this->filter->add('id', 'Product ID', 'text');
      $this->filter->add('category', 'Category Code', 'select')->options(\App\Category::lists("title", "code")->all());
      // $this->filter->add('status', 'Status Code', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
      $this->grid->add('id', 'ID', true);
			$this->grid->add('title', 'Title', true);
      $this->grid->add('price', 'Price', true);
      $this->grid->add('stock', 'Stock');
      $this->grid->add('stock_unit', 'Stock Unit');
			$this->grid->add('category', 'Category', true);
      $this->grid->add('status', 'Status', true);
      $this->grid->add('photo', 'Photo');
      $this->grid->add('remark', 'Remark');
      // $this->grid->add('created_at', 'Created', true);
      $this->grid->add('updated_at', 'Updated', true);

			$this->addStylesToGrid();

      $this->grid->paginate(10);
      $this->grid->orderBy('id','desc');

        return $this->returnView();
    }

    public function  edit($entity){

        parent::edit($entity);

        // Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

			$this->edit = \DataEdit::source(new \App\Product());

			$this->edit->label('Products');

			$this->edit->add('title', 'Title', 'text')->rule('required');
			$this->edit->add('price', 'Price', 'text')->rule('required');
      $this->edit->add('stock', 'Stock', 'text')->rule('required');
      $this->edit->add('stock_unit', 'Stock Unit', 'text');
      $this->edit->add('category', 'Category', 'select')->rule('required')->options(\App\Category::lists("title", "code")->all());
      $this->edit->add('status', 'Status', 'select')->rule('required')->insertValue(1)->options(\App\status::lists("title", "code")->all());
      $this->edit->add('photo', 'Photo', 'image')->move('images/uploads/products/')->preview(300,200);
      $this->edit->add('remark', 'Remark', 'text');


        return $this->returnEditView();
    }
}
