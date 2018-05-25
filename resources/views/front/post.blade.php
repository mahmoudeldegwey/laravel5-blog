@extends('layouts.home')
@section('content')
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">
    <div class="entity_title">
        <h1><a href="#">{{$post->title}}</a></h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta"><a href="#" target="_self">{{$post->created_at->diffForHumans()}}</a>, by: <a href="#" target="_self">{{$post->user->name}}</a>
    </div>
    <div class="entity_thumb">
        <img class="img-responsive" src="/img/{{$post->photo->file}}" alt="feature-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>
        {{$post->body}}
        </p>




    </div>
    <!-- entity_content -->

    <div class="entity_footer">
        <div class="entity_tag">
            <span class="blank"><a href="#">{{$post->category->name}}</a></span>
        </div>
        <!-- entity_tag -->

        <div class="entity_social">
            <span><i class="fa fa-comments-o"></i>{{count($post->comments)}} <a href="#">Comments</a> </span>
        </div>
        <!-- entity_social -->

    </div>
    <!-- entity_footer -->

</div>
<!-- entity_wrapper -->

<div class="related_news">
    <div class="entity_inner__title header_purple">
        <h2><a href="#">Related News</a></h2>
    </div>
    <!-- entity_title -->

    <div class="row">

    @foreach($relatedposts as $relatedpost)
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a href="#"><img style="height:122px; width:122px;" class="media-object" src="/images/{{$relatedpost->photo->file}}" alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">

                    <h3 class="media-heading"><a href="{{route('home.post', $relatedpost->id )}}" target="_self">{{$relatedpost->title}}</a></h3>
                    <span class="media-date"><a href="#">{{$relatedpost->created_at->diffForHumans()}}</a>,  by: <a href="#">{{$relatedpost->user->name}}</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-comments-o"></i>{{count($relatedpost->comments)}}</a> Comments</span>
                    </div>
                </div>
            </div>
        
        </div>
    @endforeach

    </div>
</div>
<!-- Related news -->

<div class="widget_advertisement">
    <img class="img-responsive" src="/img/category_advertisement.jpg" alt="feature-top">
</div>
<!--Advertisement-->

<div class="readers_comment">
    <div class="entity_inner__title header_purple">
        <h2>Readers Comment</h2>
    </div>
    <!-- entity_title -->
        <div id="messageCommentsas"></div>
@foreach($comments as $comment)
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img alt="64x64" class="media-object" data-src="/img/reader_img1.jpg" src="/img/reader_img1.jpg" data-holder-rendered="true">
            </a>
        </div>
        <div class="media-body">
            <h2 class="media-heading"><a href="#">{{$comment->author}}</a></h2>

                {{$comment->body}}


        </div>

    </div>
    <!-- media end -->
@endforeach

</div>
<!--Readers Comment-->


<div class="widget_advertisement">
    <img class="img-responsive" src="/img/category_advertisement.jpg" alt="feature-top">
</div>
<!--Advertisement-->

<div class="entity_comments">
    <div class="entity_inner__title header_black">
        <h2>Add a Comment</h2>
    </div>
    <!--Entity Title -->

    <div class="entity_comment_from">
{!! Form::open(['id'=>'comments','method' => 'POST','action'=>'PostCommentController@store']) !!}
            <div class="form-group">
                <input type="hidden" name="post_id" value="{{$post->id}}">
            </div>
            <div class="form-group comment">
    {!! Form::textarea('body', null,['placeholder'=>'Comment','class' => 'form-control','id'=>'inputComment']) !!}
            </div>

    {!! Form::submit('Comment', ['class' => 'btn btn-submit red']) !!}

{!! Form::close() !!}
    </div>
    <!--Entity Comments From -->

</div>
<!--Entity Comments -->

</div>


<!--Left Section-->
@include('front.sidebar')

</div>
<!-- row -->

</div>
<!-- container -->

</section>


@stop