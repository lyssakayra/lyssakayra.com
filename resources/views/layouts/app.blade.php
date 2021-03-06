<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/images/logo_header.png">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Tags -->
    <title>{{ Meta::get('title') }}</title>
    {!! Meta::tag('robots') !!}
    {!! Meta::tag('description') !!}
    {!! Meta::tag('image') !!}
    {!! Meta::tag('url') !!} 
    {!! Meta::tag('type') !!} 
    {!! Meta::tag('site_name') !!} 

    
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Palanquin:400,600" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/app.css?{{ date('l jS \of F Y h:i:s A') }}" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/assets/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="/assets/js/jquery-lazyload/jquery.lazyload.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/lib/jquery-easing-1.3.0.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/lib/modernizr.mediaqueries.transforms3d.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/lib/responsive-hub.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/src/jquery.silver_track.js" charset="utf-8"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/src/plugins/jquery.silver_track.navigator.js" charset="utf-8"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/src/plugins/jquery.silver_track.bullet_navigator.js" charset="utf-8"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/src/plugins/jquery.silver_track.remote_content.js" charset="utf-8"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/src/plugins/jquery.silver_track.responsive_hub_connector.js" charset="utf-8"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/src/plugins/jquery.silver_track.css3_animation.js" charset="utf-8"></script>
    <script type="text/javascript" src="/assets/js/jquery.silver_track/src/plugins/jquery.silver_track.circular_navigator.js" charset="utf-8"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    })
    </script>
</head>
<body id="app-layout">
    <div class="loader"></div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
