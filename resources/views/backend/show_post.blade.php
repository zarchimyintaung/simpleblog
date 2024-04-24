<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('backend.head')

    <style type="text/css">
        .title-design{
            font-size:30px;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            color: white;
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
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hideen = "true">x  </button>
            {{session()->get('message')}}
        </div>


        @endif

            <h1 class="title-design">All Post</h1>
            <div class="p-5">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Post Title</th>

                          <th scope="col">Description</th>

                          <th scope="col">Post By</th>

                          <th scope="col">Post Status</th>

                          <th scope="col">User Type</th>

                          <th scope="col">Image</th>

                          <th scope="col">Delete</th>

                          <th scope="col">Edit</th>

                          <th scope="col">Status Accept</th>

                          <th scope="col">Status Reject</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($postData  as $post )
                        <tr>
                            <td>{{$post->title}}</td>

                            <td>{{$post->description}}</td>

                            <td>{{$post->name}}</td>

                            <td>{{$post->post_status}}</td>

                            <td>{{$post->usertype}}</td>

                            <td>
                                <img  src="postImage/{{$post->image}}" alt="" style="height:100px;width:150px">
                            </td>

                            <td>
                                <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger"  onclick="confirmation(event)">Delete</a>
                            </td>

                            <td>
                                <a href="{{url('edit_post',$post->id)}}" class="btn btn-success">Edit</a>
                            </td>

                            <td>
                                <a href="{{url('accept_post',$post->id)}}" class="btn btn-success">Accept</a>
                            </td>

                            <td>
                                <a href="{{url('reject_post',$post->id)}}" class="btn btn-danger">Reject</a>
                            </td>

                          </tr>
                        @endforeach

                      </tbody>
                </table>
            </div>
            @include('backend.footer')
      </div>
    </div>
        @include('backend.foot')

        <script type="text/javascript">
            function confirmation(ev)
            {
                ev.preventDefault();

                var urlToRedirect = ev.currentTarget.getAttribute('href');


                swal({

                    title : "Are You Sure To Delete!",

                    text :  "You won't be able to revert the delete",

                    icon : "warning",

                    buttons : true ,

                    dangerMode : true,


                })

                .then((willCancel)=>
                {
                    if(willCancel)
                    {
                        window.location.href = urlToRedirect;
                    }
                });
            }
        </script>
  </body>
</html>

