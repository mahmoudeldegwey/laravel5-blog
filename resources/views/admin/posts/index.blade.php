@extends('layouts.admin')
 
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <div class="col-lg-6">
        <h1 class="page-header">Posts</h1>
      </div>

  </div>
      
    
    <div class="col-lg-6 ">
      <a href="{{url('admin/posts/create')}}" class="btn btn-info">Create Post</a>
      <br><br>
    </div>  

  <div>
    
  <table id="table_id" class="table" >
    <thead>
      <tr>
        <th>title</th>
        <th>shotr body</th>
        <th>category</th>
        <th>user</th>       
        <th>view comments</th>       
        <th>Created</th>
        <th>Updated</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @if($posts)

      @foreach($posts as $post)

      <tr>
        <td>{{$post->title}}</td>
        <td>{{str_limit($post->body,100)}}</td>
        <td>{{$post->category->name}}</td>
        <td>{{$post->user->name}}</td>
        <td><a href="{{route('comments.show',$post->id)}}" >Comments</a></td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
        <td><a class="btn btn-default" href="{{route('posts.edit',$post->id)}}" title="">Edit</a></td>
        <td>
        {!! Form::open(['method' => 'DELETE','action'=>['AdminUserController@destroy',$post->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}        
        {!! Form::close() !!}
        </td>


      </tr>
      @endforeach
    @else
      No Posts
    @endif

    </tbody>
  </table>
  </div>
</div>


@stop