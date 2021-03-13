<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link href="{{asset('css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Damion' rel='stylesheet'>
</head>

<body>

@include('includes.navigationbar')
<div id="page-container">
<div id="content-wrap">
<!-- all other page content -->
@yield('content')
</div>


<script src="{{asset('js/app.js')}}"></script>
	
</body>

<footer id="footer">
@include('includes.footer')
</footer>
</div>
</html>