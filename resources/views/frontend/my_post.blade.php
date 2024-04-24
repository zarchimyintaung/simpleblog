<!DOCTYPE html>
<html lang="en">
   <head>
      @include('frontend.head')
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

      <div class="services_section layout_padding">
        <div class="container">

            @if (session()->has('message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hideen = "true">x  </button>
                {{session()->get('message')}}
            </div>


            @endif

           <h1 class="title-design">User Posts</h1>
           <div class="services_section_2">
              <div class="row">
                @foreach ($data  as $data)
                <div class="col-md-12" style="padding: 20px;display:flex;flex-direction:column;">

                    <div><img style="margin-bottom:20px;height:200px;width:350px;" src="/postImage/{{$data->image}}" class="services_img"></div>

                    <h4>{{$data->title}}</h4>

                    <p>{{$data->description}}</p>

                    <div>

                    <a href="{{url('my_post_delete',$data->id)}}" class="btn btn-danger w-20">Delete</a>

                    <a href="{{url('my_post_update',$data->id)}}" class="btn btn-primary w-20">Update</a>
                    </div>

                </div>
                @endforeach


              </div>
           </div>
        </div>
     </div>


      <!-- footer section start -->
        @include('frontend.footer')
      <!-- footer section end -->

      @include("frontend.foot")
   </body>
</html>

