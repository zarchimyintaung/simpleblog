<!DOCTYPE html>
<html lang="en">
   <head>
      <base href="/public">
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
      <!-- header section start -->
      <div class="header_section">
        @include('frontend.header')

        @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hideen = "true">x  </button>
            {{session()->get('message')}}
        </div>


        @endif

        <h1 class="post-title">Update Post</h1>
        <div class="container">
            <form action="{{url('update_post_data',$data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Post Title</label>
                    <input type="text" class="form-control"  name="title" value="{{$data->title}}"id="exampleFormControlInput1" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Post Description</label>
                    <textarea class="form-control" name="description"  id="exampleFormControlTextarea1" rows="3">{{$data->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Old Image</label>
                    <img src="/postImage/{{$data->image}}" style="height:150px; width:250px" alt="">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Update Image</label>
                    <input type="file" class="form-control"  name="image" id="exampleFormControlInput1" >
                </div>

                <div>
                    <input type="submit" value="Update" class="btn btn-primary" >
                </div>


            </form>
        </div>

      <!-- header section end -->


      <!-- footer section start -->
        @include('frontend.footer')
      <!-- footer section end -->

      @include("frontend.foot")

    </div>

   </body>
</html>

