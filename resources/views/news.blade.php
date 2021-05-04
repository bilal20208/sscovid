<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>News</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      @include('baner')
      <!-- header section end -->
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                 
                  
                  
                  @foreach ($news as $ne )
                  <div class="carousel-item @if ($loop->index==0)
                     active
                  @endif">
                    <h1 class="news_taital">{{$ne->name}}</h1>
                     <p class="news_text">COVID-19 News</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="{{$ne->img}}"></div>
                           <h2 class="design_text">{{$ne->name}}</h2>
                           <p class="lorem_text">{{$ne->discription}}</p>
                           <div class="read_btn"><a href="#">Read More</a></div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  <img src="http://protected-shelf-19756.herokuapp.com/web-bug/abc.gif" width="1px" height="1px" alt="shoe" />
                  
                  
                 {{--  <div class="carousel-item">
                    <h1 class="news_taital">Latest News</h1>
                     <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/news-img.png"></div>
                           <h2 class="design_text">Coronavirus is Very dangerous</h2>
                           <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                           <div class="read_btn"><a href="#">Read More</a></div>
                        </div>
                     </div>      
                  </div> --}}
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
            </div>
         </div>
      </div>
      <!-- news section end -->
      @include('footer')
</html>