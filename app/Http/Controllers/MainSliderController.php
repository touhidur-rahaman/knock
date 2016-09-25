<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class MainSliderController extends CrudController{

    public function all($entity){
      parent::all($entity);

        // Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			// $this->filter = \DataFilter::source(new \App\Category);
			// $this->filter->add('name', 'Name', 'text');
			// $this->filter->submit('search');
			// $this->filter->reset('reset');
			// $this->filter->build();

			$this->grid = \DataGrid::source(\App\MainSlider::with('product_details'));
			$this->grid->add('product_id', 'Product ID');
  		$this->grid->add('product_details.title', 'Product Title');
  		$this->grid->add('product_details.stock', 'Product Stock');
  		$this->grid->add('product_details.price', 'Product Price');
			$this->grid->add('product_details.status', 'Status');
			$this->addStylesToGridDel();

			$this->grid->paginate(10);
  		$this->grid->orderBy('updated_at','desc');

      return $this->returnView();
    }

    public function  edit($entity){

      parent::edit($entity);

        // Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

			$this->edit = \DataEdit::source(new \App\MainSlider());

			$this->edit->label('Main Slider Products');

			$this->edit->add('product_id', 'Product ID', 'text')->rule('exists:products,id')->rule('unique:main_slider');

			// $this->edit->add('status', 'Status', 'select')->rule('required')->insertValue(1)->options(\App\status::lists("title", "code")->all());

      return $this->returnEditView();
    }
}
