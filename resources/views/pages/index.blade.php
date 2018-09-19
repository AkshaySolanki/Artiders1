
@extends('layouts.app')


 
@include('inc.navbar')

      <div id="main-category">
        <div class="container-full">
        	<div class="row">
                <div class="col-md-12">
                    <ul class="main-category-menu">
                        <li class="color-1"><a href="02-category.html"><i class="fa fa-music"></i>Music</a>
                        <ul>
                            	<li><a href="#">01-Singers</a></li>
                            	<li><a href="#">02-Guitarists </a></li>
                            	<li><a href="#">03-Pianists  </a></li>
                            	<li><a href="#">04-Drummers </a></li>
                            	<li><a href="#">05-Other Instrumentalists </a></li>
                            	<li><a href="#">06-Music Bands </a></li>
                            	<li><a href="#">07-Music Composers </a></li>
                            	<li><a href="#">08-DJs </a></li>
                            	<li><a href="#">09-Music Engineers </a></li>
                            	<li><a href="#">10-Street Music </a></li>
                            </ul>
                        </li>
                        <li class="color-2"><a href="02-category.html"><i class="fa fa-blind"></i>Dance</a>
                        <ul>
                            	<li><a href="#">01-Hip-Hop</a></li>
                            	<li><a href="#">02-Jazz </a></li>
                            	<li><a href="#">03-Ballet Dance  </a></li>
                            	<li><a href="#">04-Tap Dance </a></li>
                            	<li><a href="#">05-Modern Dance</a></li>
                            	<li><a href="#">06-Lyrican Dance </a></li>
                            	<li><a href="#">07-Contemporary Dance</a></li>
                            	<li><a href="#">08-Line Dance </a></li>
                            	<li><a href="#">09-Freestyle Dance </a></li>
                            </ul>
                        </li>
                        <li class="color-3"><a href="02-category.html"><i class="fa fa-paint-brush"></i>Artworks</a>
                        <ul>
                            	<li><a href="#">01-Painting</a></li>
                            	<li><a href="#">02-Sculpture </a></li>
                            	<li><a href="#">03-Crafts  </a></li>
                            	<li><a href="#">04-Performance art </a></li>
                            	<li><a href="#">05-Graffiti Artists</a></li>
                            	<li><a href="#">06-Folk Artists </a></li>
                            	<li><a href="#">07-Calligraphy </a></li>
                            	<li><a href="#">08-Sand Artists </a></li>
                            	<li><a href="#">09-Architecture </a></li>
                            </ul>
                        </li>
                        <li class="color-4"><a href="02-category.html"><i class="fa fa-pencil"></i>Writing</a>
                        <ul>
                            	<li><a href="#">01-Painting</a></li>
                            	<li><a href="#">02-Sculpture </a></li>
                            	<li><a href="#">03-Crafts  </a></li>
                            	<li><a href="#">04-Performance art </a></li>
                            	<li><a href="#">05-Graffiti Artists</a></li>
                            	<li><a href="#">06-Folk Artists </a></li>
                            	<li><a href="#">07-Calligraphy </a></li>
                            	<li><a href="#">08-Sand Artists </a></li>
                            	<li><a href="#">09-Architecture </a></li>
                            </ul>
                        </li>
                        <li class="color-1"><a href="02-category.html"><i class="fa fa-play-circle-o"></i>Filming</a></li>
                        <li class="color-2"><a href="02-category.html"><i class="fa fa-camera-retro"></i>Photography</a></li>
                        <li class="color-3"><a href="02-category.html"><i class="fa fa-smile-o"></i>Acting</a>
                        </li>
                    </ul>
                </div><!-- // col-md-14 -->
              </div><!-- // row -->
          </div><!-- // container-full -->
      </div><!-- // main-category -->

	  <div class="site-output">
      	<div class="col-md-2 no-padding-left hidden-sm hidden-xs">
        	<div class="left-sidebar">
            	<div id="sticky-sidebar" >
            	<ul class="menu-sidebar">
                	<li><a href="01-home.html"><i class="fa fa-home"></i>Home</a></li>
                	<li><a href="#"><i class="fa fa-bolt"></i>Trending</a></li>
                	<li><a href="14-history.html"><i class="fa fa-clock-o"></i>History</a></li>
                	<li style="background-color: "><a href="10-upload.html"><i class="fa fa-upload"></i>upload</a></li>
                </ul>
            	<ul class="menu-sidebar">
                	<li><a href="#"><i class="fa fa-edit"></i>edit profile</a></li>
                	<li><a href="#"><i class="fa fa-sign-out"></i>sing out</a></li>
                </ul>
            	<ul class="menu-sidebar">
                	<li><a href="#"><i class="fa fa-gear"></i>Settings</a></li>
                	<li><a href="#"><i class="fa fa-question-circle"></i>Help</a></li>
                	<li><a href="#"><i class="fa fa-send-o"></i>Send feedback</a></li>
                </ul>
                </div><!-- // sidebar-stick -->
                <div class="clear"></div>
            </div><!-- // left-sidebar -->
        </div><!-- // col-md-2 -->

        <div id="all-output" class="col-md-10">
        	<h1 class="new-video-title"><i class="fa fa-bolt"></i>Top Trending</h1>
            <div class="row">
				

                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v1.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v2.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v3.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v4.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->
			
            </div><!-- // row -->
        	<h1 class="new-video-title"><i class="fa fa-soccer-ball-o"></i>Trending Artists</h1>
            <div class="row">

                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v5.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v6.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v7.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v8.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->

            </div><!-- // row -->
        	<h1 class="new-video-title"><i class="fa fa-globe"></i>Trending Events</h1>
            <div class="row">

                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v9.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v10.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v11.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">00:00</small>
                            <a href="#"><img src="demo_img/v12.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Content title...</a>
                            <a class="channel-name" href="#">Artist Name<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>Views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>Date Posted </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->

            </div><!-- // row -->

            <!-- Loading More Videos -->
            <div id="loading-more">
            	<i class="fa fa-refresh faa-spin animated"></i> <span>Loading more</span>
            </div>
            <!-- // Loading More Videos -->

		</div>
      </div>

      

