<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Pizzaro</title>
      <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/assets/css/bootstrap.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/assets/css/font-awesome.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/assets/css/animate.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/assets/css/font-pizzaro.css" media="all" />
      <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/assets/css/style.css" media="all" />
      <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/assets/css/colors/red.css" media="all" />
      <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/assets/css/jquery.mCustomScrollbar.min.css" media="all" />
      <!-- Demo Purpose Only. Should be removed in production -->
      <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/config.css">
      <link href="{{asset('contents/website')}}/assets/css/colors/green.css" rel="alternate stylesheet" title="Green color">
      <link href="{{asset('contents/website')}}/assets/css/colors/pink.css" rel="alternate stylesheet" title="Pink color">
      <link href="{{asset('contents/website')}}/assets/css/colors/blue.css" rel="alternate stylesheet" title="Blue color">
      <link href="{{asset('contents/website')}}/assets/css/colors/red.css" rel="alternate stylesheet" title="Red color">
      <link href="{{asset('contents/website')}}/assets/css/colors/orange.css" rel="alternate stylesheet" title="Orange color">
      <link href="{{asset('contents/website')}}/assets/css/colors/gold.css" rel="alternate stylesheet" title="Gold color">
      <link href="{{asset('contents/website')}}/assets/css/colors/navy.css" rel="alternate stylesheet" title="Navy color">
      <link href="{{asset('contents/website')}}/assets/css/colors/flat-blue.css" rel="alternate stylesheet" title="Flat Blue color">
      <!-- Demo Purpose Only. Should be removed in production : END -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
      <link rel="shortcut icon" href="{{asset('contents/website')}}/assets/images/fav-icon.png">
   </head>
   <body class="page-template-template-homepage-v1 home-v1">
      <div id="page" class="hfeed site">
        @include('forntend.includes.header')

          @yield('content')
         <!-- #content -->
        @include('forntend.includes.footer')
      </div>
   </body>

</html>
