@extends('layouts.admin')
 
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Comments</h1>
      </div>
    </div>
  <div>
<div>
  
@if(count($comments) > 0)
  
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>author</th>
        <th>Email</th>
        <th>body</th>       
        <th>Created</th>
        <th>post</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

      @foreach($comments as $comment)

      <tr>
        <td>{{$comment->id}}</td>
        <td>{{$comment->author}}</td>
        <td>{{$comment->email}}</td>
        <td>{{str_limit($comment->body,30)}}</td>
        <td>{{$comment->created_at->diffForHumans()}}</td>
        <td><a href="{{route('home.post',$comment->post->id)}}" >view post</a></td>

        <td>
          
          @if($comment->is_active == 1)

            {!! Form::open(['method' => 'PATCH','action'=>['PostCommentController@update',$comment->id]]) !!}
                <input type="hidden" name="is_active"  value="0">
                        {!! Form::submit('Un Approve', ['class' => 'btn btn-warning']) !!}        
            {!! Form::close() !!}
        @else

          {!! Form::open(['method' => 'PATCH','action'=>['PostCommentController@update',$comment->id]]) !!}
                <input type="hidden" name="is_active"  value="1">
                        {!! Form::submit('Approve',['class'=>'btn btn-default']) !!}        
            {!! Form::close() !!}


          @endif

        </td>


        <td>
        {!! Form::open(['method' => 'DELETE','action'=>['PostCommentController@destroy',$comment->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}        
        {!! Form::close() !!}
        </td>


      </tr>
      @endforeach


    </tbody>
  </table>
  @else
  <h1>No Comments</h1>
@endif

  </div>
</div>

@stop