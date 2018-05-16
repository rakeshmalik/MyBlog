
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SQL Server Helper</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

   
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        @include('layouts.nav')
      </div>
    </div>
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">SQL Server Helper</h1>
        <p class="lead blog-description">All About SQL</p>
      </div>
  
     <div class="row">
        <div class="col-sm-8 blog-main">
          @yield('content')  
        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          @include('layouts.sidebar')
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

    @include('layouts/footer')

  </body>
</html>
