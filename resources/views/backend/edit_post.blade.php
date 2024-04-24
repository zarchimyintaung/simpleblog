
<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
    @include('backend.head')
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
    @include('backend.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
            @include('backend.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hideen = "true">x  </button>
                    {{session()->get('message')}}
                </div>


            @endif
            <h1 class="post-title">Update Post</h1>
            <div class="container">
                <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Post Title</label>
                        <input type="text" class="form-control"  name="title" value="{{$post->title}}"id="exampleFormControlInput1" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Post Description</label>
                        <textarea class="form-control" name="description"  id="exampleFormControlTextarea1" rows="3">{{$post->description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Old Image</label>
                        <img src="/postImage/{{$post->image}}" style="height:100px; width:150px;margin:auto" alt="">
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
            @include('backend.footer')
      </div>
    </div>
    <!-- JavaScript files-->
        @include('backend.foot')
  </body>
</html>

