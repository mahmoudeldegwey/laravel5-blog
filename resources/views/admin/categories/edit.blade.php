@extends('layouts.admin')
 
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Edit Category</h1>
      </div>
    </div>
  <div>
<div>
	
<div>
	

{!! Form::model($cats,['method' => 'PATCH','action'=>['AdminCategoryController@update',$cats->id]]) !!}
    
    <div class="form-group">
        
    {!!     Form::label('name', 'Category Name', ['class' => 'awesome']) !!}
    {!!     Form::text('name', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
    	
 	{!! Form::submit('Update Category', ['class' => 'btn btn-primary']) !!}

    </div>




{!! Form::close() !!}

</div>

@include('includes.form_error')

  </div>
</div>

@stop