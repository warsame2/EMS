
<title>@yield('title')</title>
<!-- Favicon icon -->
<link rel="icon" href="{{ URL::to('files\assets\images\favicon.ico') }}" type="image/x-icon">
<!-- Google font-->
<link href="{{ URL::to('https://fonts.googleapis.com/css?family=Open+Sans:400,600,800')}}" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="{{ URL::to('files\bower_components\bootstrap\css\bootstrap.min.css') }}">
<!-- radial chart.css -->
<link rel="stylesheet" href="{{ URL::to('files\assets\pages\chart\radial\css\radial.css') }}" type="text/css" media="all">
<!-- feather Awesome -->
<link rel="stylesheet" type="text/css" href="{{ URL::to('files\assets\icon\feather\css\feather.css') }}">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="{{ URL::to('files\assets\css\style.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ URL::to('files\assets\css\jquery.mCustomScrollbar.css') }}">

@yield('css')












