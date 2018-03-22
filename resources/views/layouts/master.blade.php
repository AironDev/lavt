<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LAV</title>
 	
	<!--  CUstom CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
		

    <!-- bootstrap CSS -->
    	<!-- <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    	<link href="{{asset('bootstrap/css/bootstrap-theme.css')}}" rel="stylesheet"> -->

     <!-- Font awesome -->
    	<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.css')}}">
</head>

<body>
<div class="container m-t-md">
	@include('partials/navbar')
	@yield('content')


</div>
</body>
<!-- JS -->
	<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

<!-- Custom CSS for overidings -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
</html>