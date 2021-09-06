<?php
	$css = [
			"assets/css/plugins/fontawesome-free/css/all.min.css",
			"assets/css/dist/adminlte.min.css",
      "assets/js/plugins/daterangepicker/daterangepicker.css",
      "https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css",
      "assets/css/custom.css",
	];


  $js = [
        "assets/js/plugins/jquery/jquery.min.js",
        "assets/js/plugins/bootstrap/js/bootstrap.bundle.min.js",
        "assets/js/plugins/bs-custom-file-input/bs-custom-file-input.min.js",
        "assets/js/plugins/daterangepicker/daterangepicker.js",
        "assets/js/adminlte.min.js",
        "assets/js/demo.js",
       

    ];


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Jen Finacle</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

   @foreach ($css as $addcss)
    @if( strstr($addcss,"http"))
      <link rel="stylesheet" type="text/css" href="{{$addcss}}" />
    @else
      <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/{{$addcss}}" />
    @endif
  @endforeach

</head>

<body class="hold-transition login-page">
	
  @yield('content')


@foreach ($js as $addjs)
  @if( strstr($addjs,"http") )
    <script type="text/javascript" src="{{$addjs}}" ></script>
  @else
    <script type="text/javascript" src="<?php echo URL::to('/'); ?>/{{$addjs}}" ></script>
  @endif
@endforeach

</body>
</html>