<!doctype html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <title>Learning Laravel Website </title>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery.js"></script>
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 </head>
 <body>

 <header>

 <nav class="navbar navbar-default" role="navigation">
 <!-- Brand and toggle get grouped for better mobile display -->

 <a class="navbar-brand" href="/">Learning Laravel</a>
 </div>

 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse">

 <ul class="nav navbar-nav navbar-right">
 <li><a href="/">Home</a></li>
 <li><a href="/about">About</a></li>
 <li><a href="/contact">Contact</a></li>
 </ul>
 </div><!-- /.navbar-collapse -->
 </nav>

</header>


 @yield('content')


 <div class="bottom-menu">
     <div class="container">
         <div class="row">
             <div class="col-md-2 navbar-brand">
                 <a href="/">Learning Laravel</a>
             </div>
             <div class="col-md-10">
                <ul class="bottom-links">
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
             </div>
         </div>

     </div>

 </div>

 </body>
 </html>
