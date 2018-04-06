<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="/css/codestore.css">
    <link rel="stylesheet" href="/Awesome/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" name="button" data-target="#navbar" data-toggle="collapse" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Clothing Store</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">View Cart<i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><form action="#" class="navbar-form" enctype="multipart/form-data" method="post">
                            <div class="form-group-sm">
                                <label for="search" class="sr-only">Search Form</label>
                                <input type="text" name="search" class="form-control" placeholder="Search Site..." value="" id="search">
                            </div>
                            <button class="btn btn-md btn-primary search-btn" type="button" name="button">
                                <span class="fa fa-search"></span>
                            </button>
                            </form>
                        </li>
                        <!--<li><a href="#"><span class="fa fa-shopping-cart fa-2x"></span></a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">@yield('content')</div>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/clothin_store.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>