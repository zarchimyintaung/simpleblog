<!DOCTYPE html>
<html lang="en">
   <head>
      <base href="/public">
      @include('frontend.head');
      <style type="text/css">

        .title-design{
            font-size:30px;
            font-weight: bold;
            text-align: center;
        }

    </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('frontend.header')
      </div>
      <!-- header section end -->
      <div class="container">

        <div style="text-align: center" class="col-md-12">
            <h1 class="title-design">Post Details</h1>

            <div>
                <img style="padding: 20px;" src="/postImage/{{$post->image}}" class="services_img">
            </div>

            <h3><b></b>{{$post->title}}</h3>

            <h4>{{$post->description}}</h4>

            <p>Post by <b>{{$post->name}}</b></p>

        </div>

      </div>




      <!-- footer section start -->
        @include('frontend.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      @include("frontend.foot")
   </body>
</html>

