<!DOCTYPE html>
<html>
  <head>
    @include('backend.head')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    @include('backend.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
            @include('backend.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
            @include('backend.body')
            @include('backend.footer')
      </div>
    </div>
    <!-- JavaScript files-->
        @include('backend.foot')
  </body>
</html>
