@extends('layouts.admin')
 
@section('content')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Add User</h1>
      </div>
    </div>
  <div>

<div>
    
<div>
	

{!! Form::open(['method' => 'POST','action'=>'AdminUserController@store', 'files'=>true]) !!}
    
    <div class="form-group">
    	
{!!     	Form::label('name', 'User Name', ['class' => 'awesome']) !!}
 	{!!    	Form::text('name', 'User Name', ['class' => 'form-control']) !!}

    </div>

        <div class="form-group">
    	
{!!     	Form::label('email', 'Email Address', ['class' => 'awesome']) !!}
 	{!!    	Form::email('email', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
    	
    {!!     Form::label('role_id', 'Role', ['class' => 'awesome']) !!}
 	{!!    	Form::select('role_id', [''=>'choose and option'] + $roles , null, ['class' => 'form-control']) !!}

    </div>

            <div class="form-group">
    	
	{!!     Form::label('is_active', 'Status', ['class' => 'awesome']) !!}
 	{!!    	Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0 ,['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
    	
	{!!     Form::label('photo_id', 'Photo', ['class' => 'awesome']) !!}
 	{!!    	Form::file('photo_id', null ,['class' => 'form-control']) !!}

    </div>



    <div class="form-group">
    	
	{!!     Form::label('password', 'password', ['class' => 'awesome']) !!}
 	{!!    	Form::password('password',['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
    	
 	{!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}

    </div>




{!! Form::close() !!}

</div>

@include('includes.form_error')