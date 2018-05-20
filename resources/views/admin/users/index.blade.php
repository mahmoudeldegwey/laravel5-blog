@extends('layouts.admin')
 
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Users</h1>
      </div>
    </div>
    <div class="col-lg-6 ">
      <a href="{{url('admin/user/create')}}" class="btn btn-info">Add User</a>
      <br><br>
    </div>  
  <div>
    
     @if(Session::has('deleted_user'))
      
    <div class="alert">{{session('deleted_user')}}</div>
  @endif
  <table id="table_id" class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @if($users)

      @foreach($users as $user)

      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == "1" ? "Active" : "Not Active"}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
        <td><a class="btn btn-default" href="{{route('user.edit',$user->id)}}" title="">Edit</a></td>
        <td>
        {!! Form::open(['method' => 'DELETE','action'=>['AdminUserController@destroy',$user->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}        
        {!! Form::close() !!}
        </td>


      </tr>
      @endforeach
    @endif

    </tbody>
  </table>


  </div>
</div>

@stop