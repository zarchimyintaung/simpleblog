<!DOCTYPE html>
<html lang="en">
   <head>
      @include('frontend.head')

      <style type="text/css">
        .post-title{
            font-size:30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;

        }

        label{
            display: inline-block;
            width:200px;
        }


    </style>
   </head>
   <body>

        @include('sweetalert::alert')
      <!-- header section start -->
      <div class="header_section">
        @include('frontend.header')

      <!-- header section end -->

      <h1 class="post-title">Add Post</h1>
      <div class="container">
          <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">

              @csrf

              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Post Title</label>
                  <input type="text" class="form-control"  name="title" id="exampleFormControlInput1" >
              </div>

              <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Post Description</label>
                  <textarea class="form-control" name="description"  id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Post Image</label>
                  <input type="file" class="form-control"  name="image" id="exampleFormControlInput1" >
              </div>

              <div>
                  <input type="submit" class="btn btn-primary" >
              </div>
          </form>
      </div>


      <!-- footer section start -->
        @include('frontend.footer')
      <!-- footer section end -->

      </div>

      @include("frontend.foot")
   </body>
</html>
