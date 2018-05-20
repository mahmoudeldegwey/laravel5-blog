@extends('layouts.admin')
 
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Create Category</h1>
      </div>
    </div>
  <div>
<div>
	
<div>
	

{!! Form::open(['method' => 'POST','action'=>'AdminCategoryController@store']) !!}
    
    <div class="form-group">
    	
    {!!     Form::label('name', 'Category Name', ['class' => 'awesome']) !!}
 	{!!    	Form::text('name', null, ['placeholder'=>'Category Name','class' => 'form-control']) !!}

    </div>

    <div class="form-group">
    	
 	{!! Form::submit('Create Catrgoty', ['class' => 'btn btn-primary']) !!}

    </div>
{!! Form::close() !!}

</div>

@include('includes.form_error')

  </div>
</div>

@stop