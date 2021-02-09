<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow flex ">
      <img src="{{ asset('logo.png') }}" width="75px" class="m-3">
      <h5 class="mr-3">SIS PKM Management System</h5>
    </nav>

    <div class="container-fluid mt-3">
      <div class="row">
      @yield('sidebar')
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          @yield('content')
        </main>
      </div>
    </div>
    @yield('modal')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>

      
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
      <script src="{{ asset('js/dashboard.js') }}"></script>
  </body>
</html>
