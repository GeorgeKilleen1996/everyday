@extends('includes.master_members')

<title>EveryDay | Home</title>

@section('content')

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://via.placeholder.com/1280x512" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/1280x512" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/1280x512" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container" style="padding-top:20px;">
	<h1 style="text-align:center; font-family: 'Damion'; font-size: 50px;">EveryDay</h1>
	<div style="font-size:18px;text-align:center;">Welcome to EveryDay website, for all of your Every Day needs!</div>
<hr class="rounded"></hr>
</div>

<div class="container-flex" style="padding-left: 220px; padding-top: 40px; padding-bottom: 40px;">
	<div class="row" style="text-align:center">
		<div class="col-lg-2">
			<img class="icons" src="{{URL('images/icons/001-schedule.svg')}}" alt="planner" width="140" height="140">
            <h2 style="padding-top: 10px;">Planner</h2>
		</div>
		<div class="col-lg-2">
			<img class="icons" src="{{URL('images/icons/006-money.svg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2 style="padding-top: 10px">Finances</h2>
		</div>
		<div class="col-lg-2">
			<img class="icons" src="{{URL('images/icons/002-portfolio.svg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2 style="padding-top: 10px">Portfolio</h2>
		</div>
		<div class="col-lg-2">
			<img class="icons" src="{{URL('images/icons/004-heartbeat.svg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2 style="padding-top: 10px">Health</h2>
		</div>
		<div class="col-lg-2">
			<img class="icons" src="{{URL('images/icons/003-pokeball.svg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2 style="padding-top: 10px">Pokemon</h2>
		</div>
	</div>
</div>

<div class="container" style="padding-top:10px;">
<hr class="rounded"></hr>
</div>

@endsection