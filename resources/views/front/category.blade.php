@extends('layouts.home')

@section('content')


<div class="container">
<div class="row">
<div class="col-md-8">

<div class="entity_wrapper">
    <div class="entity_title header_purple">
        <h1><a href="category.html" target="_blank">{{$category->name}}</a></h1>
    </div>
    <!-- entity_title -->
</div>
<!-- entity_wrapper -->

<div class="row">

@foreach($posts as $post)
    <div class="col-md-6">
        <div class="category_article_body">
            <div class="top_article_img">
                <img style="width:350px; height: 186px;" class="img-fluid" src="/images/{{$post->photo->file}}" alt="feature-top">
            </div>
            <!-- top_article_img -->

            <div class="category_article_title">
                <h5><a href="{{route('home.post',$post->id)}}" target="_blank">{{$post->title}}</a></h5>
            </div>
            <!-- category_article_title -->

            <div class="article_date">
                <a href="#">{{$post->created_at->diffForHumans()}}</a>, by: <a href="#">{{$post->user->name}}</a>
            </div>
            <!-- article_date -->

            <div class="category_article_content">
          		{{str_limit($post->body,150)}}
            </div>
            <!-- category_article_content -->

            <div class="article_social">

            
                <span><i class="fa fa-comments-o"></i><a href="#">{{count($post->comments)}}</a> Comments</span>
            </div>
            <!-- article_social -->

        </div>
        <!-- category_article_body -->

    </div>
    <!-- col-md-6 -->
@endforeach

</div>
<!-- row -->

<div class="widget_advertisement">
    <img class="img-responsive" src="/img/category_advertisement.jpg" alt="feature-top">
</div>
<!-- widget_advertisement -->



<nav aria-label="Page navigation" class="pagination_section">
    <ul class="pagination">
    {{$posts->links()}}
    </ul>
</nav>
<!-- navigation -->

</div>
<!-- col-md-8 -->

<!--
	Sidebar
-->
@include('front.sidebar')

</div>
<!-- row -->

</div>

@stop