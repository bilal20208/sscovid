
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
      <title>About</title>
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
      <div class="container-fluid">
         <div class="main">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            <div class="menu_text">
               <ul>
                  <div class="togle_">
                     <div class="menu_main">
                       
                     </div>
                  </div>
                  <div id="myNav" class="overlay">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <div class="overlay-content">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('protect') }}">Protect</a>
                        <a href="{{ route('about') }}">About</a>
                        <a href="{{ route('doctors') }}">Doctors</a>
                        <a href="{{ route('news') }}">News</a>
                     </div>
                  </div>
                  <span class="navbar-toggler-icon"></span>
                  <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                  <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
               </ul>
            </div>
         </div>
      </div>
<!-- banner section start -->
      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_img"><img src="{{$news->img}}"></div>
                 </div>
                 <div class="col-md-6">
                    <h1 class="about_taital">{{$news->name}}</span></h1>
                    <p class="about_text">{{$news->discription}}</p>
                     
                 </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      @include('footer')
   </body>
</html>