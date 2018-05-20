@extends('layouts.admin')
 
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Categories</h1>
      </div>
    </div>
    <div class="col-lg-6 ">
      <a href="{{url('admin/categories/create')}}" class="btn btn-info">Create Category</a>
      <br><br>
    </div>  
  <div>
  <table id="table_id" class="table">
    <thead>
      <tr>
        <th>Name</th>    
        <th>Created</th>
        <th>Updated</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @if($cats)

      @foreach($cats as $cat)

      <tr>
        <td>{{$cat->name}}</td>
        <td>{{$cat->created_at->diffForHumans()}}</td>
        <td>{{$cat->updated_at->diffForHumans()}}</td>
        <td><a class="btn btn-default" href="{{route('categories.edit',$cat->id)}}" title="">Edit</a></td>
        <td>
        {!! Form::open(['method' => 'DELETE','action'=>['AdminCategoryController@destroy',$cat->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}        
        {!! Form::close() !!}
        </td>


      </tr>
      @endforeach
    @else
      No Categories
    @endif

    </tbody>
  </table>
  </div>
</div>

@stop