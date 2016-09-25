<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;
use Hash;

class UserController extends CrudController{

    public function all($entity){
        parent::all($entity);

        // Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			$this->filter = \DataFilter::source(new \App\User);
			$this->filter->add('name', 'Name', 'text');
      $this->filter->add('id', 'ID', 'text');
      $this->filter->add('email', 'Email', 'text');
      // $this->filter->add('status', 'Status Code', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
      $this->grid->add('id', 'ID', true);
			$this->grid->add('name', 'Name');
      $this->grid->add('email', 'Email');
      $this->grid->add('status', 'Status');
      $this->grid->add('password', 'Password');
      $this->grid->add('created_at', 'Date Created', true);
      $this->grid->add('remember_token', 'Token');
      // $this->grid->add('updated_at', 'Date Updated', true);
			$this->addStylesToGrid();
      $this->grid->paginate(10);
      $this->grid->orderBy('id','asc');

        return $this->returnView();
    }

    public function  edit($entity){

        parent::edit($entity);

        // Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

        \App\User::creating(function($data) {
            $data->password = Hash::make(\Request::input('password'));
        });

			$this->edit = \DataEdit::source(new \App\User());

			$this->edit->label('Edit User');

			$this->edit->add('name', 'Name', 'text')->rule('required');

      $this->edit->add('email', 'Email', 'text')->rule('required'); // ->rule('unique:users,email')

      $this->edit->add('password', 'Password', 'text')->rule('required');

      $this->edit->add('remember_token', 'Remember Token', 'text');

      $this->edit->add('status', 'Status', 'select')->rule('required')->insertValue(1)->options(\App\status::lists("title", "code")->all());

        return $this->returnEditView();
    }

}
