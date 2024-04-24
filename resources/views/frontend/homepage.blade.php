<!DOCTYPE html>
<html lang="en">
   <head>
      @include('frontend.head')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('frontend.header')
         <!-- banner section start -->
        @include('frontend.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
        @include('frontend.service')
      <!-- services section end -->
      <!-- about section start -->
        @include('frontend.about')
      <!-- about section end -->
      <!-- choose section start -->
        @include('frontend.choose')
      <!-- choose section end -->
      <!-- footer section start -->
        @include('frontend.footer')
      <!-- footer section end -->

      @include("frontend.foot")
   </body>
</html>
