@extends('layouts.admin')
 
@section('content')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Create Post</h1>
      </div>
    </div>
  <div>
<div>
	

{!! Form::open(['method' => 'POST','action'=>'AdminPostsController@store', 'files'=>true]) !!}
    
    <div class="form-group">
    	
{!!     	Form::label('title', 'title', ['class' => 'awesome']) !!}
 	{!!    	Form::text('title', null, ['placeholder'=>'Title','class' => 'form-control']) !!}

    </div>


    <div class="form-group">
    	
    {!!     Form::label('category_id', 'Category', ['class' => 'awesome']) !!}
 	{!!    	Form::select('category_id', [''=>'choose an option'] + $cats , null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
    	
	{!!     Form::label('photo_id', 'Photo', ['class' => 'awesome']) !!}
 	{!!    	Form::file('photo_id', null ,['class' => 'form-control']) !!}

    </div>


    <div class="form-group">
    	
	{!!     Form::label('body', 'body', ['class' => 'awesome']) !!}
 	{!!    	Form::textarea('body', null,['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
    	
 	{!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}

    </div>




{!! Form::close() !!}

</div>

@include('includes.form_error')

  </div>
</div>

@stop