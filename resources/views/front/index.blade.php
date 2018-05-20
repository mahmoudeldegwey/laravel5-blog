@extends('layouts.home')

@section('content')
	

	<section id="category_section" class="category_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="category_section mobile">
    <div class="article_title header_purple">
        <h2><a href="category.html" target="_self">{{$mobile->name}}</a></h2>
    </div>
    <!----article_title------>

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="top_article_img">
                    <a href="single.html" target="_self">
                    <img class="img-responsive" src="img/cat-mobi-left-1.jpg" alt="feature-top">
                    </a>
                </div>
                <!----top_article_img------>
            </div>
            <div class="col-md-6">
                <span class="tag purple">Mobile</span>

                <div class="category_article_title">
                    <h2><a href="single.html" target="_self">Airbnb launches photo-centric app for iPads and Android
                        tablets. </a></h2>
                </div>
                <!----category_article_title------>
                <div class="category_article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a></div>
                <!----category_article_date------>
                <div class="category_article_content">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate
                    B2C users after installed base benefits. Dramatically visualize customer directed convergence
                    without revolutionary ROI.
                </div>
                <!----category_article_content------>
                <div class="media_social">
                    <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                    <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                </div>
                <!----media_social------>
            </div>
        </div>
    
    </div>



    <div class="category_article_wrapper">
        <div class="row">
       	@if(count($lastPost) > 0)
    	@foreach($lastPost as $last)
            <div class="col-md-6">

                <div class="media">
                    <div class="media-left">
                        <a href="#">
                        <img style="height:122px; width: 122px;" class="media-object" src="images/{{$last->photo->file}}" alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <span class="tag purple">{{$last->category->name}}</span>

                        <h3 class="media-heading"><a href="{{route('home.post',$last->id)}}" target="_self">{{$last->title}}</a></h3>
                        <span class="media-date"><a href="#">{{$last->created_at->diffForHumans()}}</a>,  by: <a href="#">{{$last->user->name}}</a></span>

                        <div class="media_social">
                            <span><a href="#"><i class="fa fa-comments-o"></i>{{count($last->comments)}}</a> Comments</span>
                        </div>
                    </div>
                </div>

            </div>
	    @endforeach
	    @else 
	    	<h2>No News</h2>
	    @endif

        </div>
    </div>


    <p class="divider"><a href="#">More News&nbsp;»</a></p>
</div>
<!-- Mobile News Section -->

<div class="category_section tablet">
    <div class="article_title header_pink">
        <h2><a href="category.html" target="_self">{{ucfirst($tablet->name)}}</a></h2>
    </div>
    <!-- Mobile News Section -->

    <div class="category_article_wrapper">
        <div class="row">

        	@foreach($lasttablet as $tablet)
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                        <img class="img-responsive" src="images/{{$tablet->photo->file}}" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag pink"><a href="category.html" target="_self">{{$tablet->category->name}}</a></span>

                    <div class="category_article_title">
                        <h2><a href="{{route('home.post',$tablet->id)}}" target="_self">{{$tablet->title}}</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date">{{$tablet->created_at->diffForHumans()}}<a href="#"></a>, by: <a href="#">{{$tablet->user->name}}</a></div>
                    <!----article_date------>
                    <!-- article_date -->

                    <div class="category_article_content">
                        {{str_limit($tablet->body,150)}}
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><i class="fa fa-comments-o"></i><a href="#">{{count($tablet->comments)}}</a> Comments</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->
            @endforeach

        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->

    <p class="divider"><a href="#">More News&nbsp;»</a></p>
</div>
<!-- Tablet News Section -->

<div class="category_section camera">
    <div class="article_title header_orange">
        <h2><a href="category.html" target="_self">{{$camera->name}}</a></h2>
    </div>
    <!-- article_title -->
    @foreach($lastcamera as $camera)
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="top_article_img">
                    <a href="single.html" target="_self">
                        <img class="img-responsive" src="images/{{$camera->photo->file}}" alt="feature-top">
                    </a>
                </div>
                <!-- top_article_img -->

            </div>
            <div class="col-md-7">
                <span class="tag orange">{{$camera->category->name}}</span>

                <div class="category_article_title">
                    <h2><a href="{{route('home.post',$camera->id)}}" target="_self">{{$camera->title}}</a></h2>
                </div>
                <!-- category_article_title -->

                <div class="article_date"><a href="#">{{$camera->created_at->diffForHumans()}}</a>, by: <a href="#">{{$camera->user->name}}</a></div>
                <!----article_date------>
                <!-- category_article_wrapper -->

                <div class="category_article_content">
                {{str_limit($camera->body,150)}}
                </div>
                <!-- category_article_content -->

                <div class="media_social">
                    <span><i class="fa fa-comments-o"></i><a href="#">{{count($camera->comments)}}</a> Comments</span>
                
                </div>
                <!-- media_social -->

            </div>
            <!-- col-md-7 -->

        </div>
        <!-- row -->

    </div>
    @endforeach
    <p class="divider"><a href="#">More News&nbsp;»</a></p>
</div>
<!-- Camera News Section -->

<div class="category_section design">
    <div class="article_title header_blue">
        <h2><a href="category.html" target="_self">{{ucfirst($design->name)}}</a></h2>
    </div>
    <!-- row -->

    <div class="category_article_wrapper">
        <div class="row">

        @foreach($lastdesign as $design)
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="images/{{$design->photo->file}}" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="category.html" target="_self">{{$design->category->name}}</a></span>

                    <div class="category_article_title">
                        <h2><a href="{{route('home.post',$design->id)}}" target="_self">{{$design->title}}</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#">{{$design->created_at->diffForHumans()}}</a>, by: <a href="#">{{$design->user->name}}</a></div>
                    <!----category_article_date------>
                    <!-- category_article_date -->

                    <div class="category_article_content">

                    	{{str_limit($design->body,150)}}
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><i class="fa fa-comments-o"></i><a href="#">{{count($design->comments)}}</a> Comments</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->
        @endforeach

        </div>
        <!-- row -->

    </div>

    <!-- top_article_img -->

    <p class="divider"><a href="#">More News&nbsp;»</a></p>
</div>
<!-- Design News Section -->
</div>
<!-- Left Section -->

<div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Popular News</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Canon launches photo centric 00214 Model supper shutter camera</a>
            </h3> <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Samsung galaxy note are the supper mobile of all products.</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Kodak Hi-Speed shutter double shot camera comming soon</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;»</a></p>
</div>
<!-- Popular News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive adv_img" src="img/right_add1.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="img/right_add2.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="img/right_add3.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="img/right_add4.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="img/right_add5.jpg" alt="add_one">
</div>
<!-- Advertisement -->


<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="img/right_add6.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Most Commented</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Yasaki camera launches new generic hi-speed shutter camera.</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Samsung is the best mobile in the android market.</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">DSLR is the most old camera at this time readmore about new
                    products</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;» </a></p>
</div>
<!-- Most Commented News -->


<div class="widget hidden-xs m30">
    <img class="img-responsive add_img" src="img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="img/right_add7.jpg" alt="add_one">
</div>
<!--Advertisement -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="img/podcast.jpg" alt="add_one">
</div>
<!--Advertisement-->
</div>
<!-- Right Section -->

</div>
<!-- Row -->

</div>
<!-- Container -->

</section>
	
@stop