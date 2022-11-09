@extends('layouts.front')
@section('temp')
 

<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">My Blog</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Profesional Blog Page</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">
                    <!-- start single post -->
                    @foreach ($blogList as $item)
                        
                    <div class="recent-single-post">
                        <div class="post-img">
                            <a href="#">
                                <img src="{{url('images')}}/{{$item->image}}" alt="">
                            </a>
                        </div>
                        <div class="pst-content">
                            <h5><a href="{{route('blogview.viewDetails',['id'=>$item->id])}}"> {{$item->title}}</a></h5>
                        </div>
                    </div>
                    @endforeach
                    <!-- End single post -->
                    
                  </div>
                </div>
                <!-- recent end -->
              </div>
              
              
              <div class="single-blog-page">
                <div class="left-tags blog-tags">
                  <div class="popular-tag left-side-tags left-blog">
                    <h4>popular tags</h4>
                    <ul>
                      <li>
                        <a href="#">Portfolio</a>
                      </li>
                      <li>
                        <a href="#">Project</a>
                      </li>
                      <li>
                        <a href="#">Design</a>
                      </li>
                      <li>
                        <a href="#">Website</a>
                      </li>
                      <li>
                        <a href="#">Joomla</a>
                      </li>
                      <li>
                        <a href="#">Html</a>
                      </li>
                      <li>
                        <a href="#">wordpress</a>
                      </li>
                      <li>
                        <a href="#">Masonry</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                      <img src="{{url('images')}}/{{$blog->image}}" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="bi bi-chat"></i>
                      <a href="#">11 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="bi bi-calendar"></i>{{$blog->created_at}}
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <h2>{{$blog->title}}</h2>
                    </h4>
                    <p style="text-align: justify">
                     {{$blog->description}}
                    </p>
                  </div>
                 
                </div>
              </div>
              <!-- End single blog -->
          

  </main><!-- End #main -->


@endsection