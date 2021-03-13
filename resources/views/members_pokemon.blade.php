@extends('includes.master_members')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<title>EveryDay | Pokemon</title>

@section('content')

<div class="container" style="padding-bottom:20px;">

  <div class="container" style="padding-top:20px;">
    <h1 style="text-align:center; font-size: 50px;">Pokemon Collection</h1>
      <div style="font-size:18px;text-align:center;">Welcome to the Pokemon Collectors section. This is where you can save all of the pokemon cards you've collected! </div>
    <hr class="rounded"></hr>
  </div>

  <div class="container" style=" padding-top: 40px; padding-bottom: 40px;">
    <div class="row" style="text-align:center">
      <div class="col-lg-3">
        <img class="icons" src="{{URL('images/icons/003-plus.svg')}}" alt="addcard" width="50" height="50">
        <h4 style="padding-top: 10px;">Add Cards</h4>
        <div style="padding-bottom: 10px;">Add all of your Pokemon cards that are in your collection.</div>
      </div>
      <div class="col-lg-3">
        <img class="icons" src="{{URL('images/icons/002-bin.svg')}}" alt="removecard" width="50" height="50">
        <h4 style="padding-top: 10px;">Remove Cards</h4>
        <div style="padding-bottom: 10px;">Remove any cards which are no longer in your collection.</div>
      </div>
        <div class="col-lg-3">
        <img class="icons" src="{{URL('images/icons/001-diagram.svg')}}" alt="cardprices" width="50" height="50">
        <h4 style="padding-top: 10px;">Card Prices</h4>
        <div style="padding-bottom: 10px;">Check the current prices for cards within your collection.</div>
      </div>
        <div class="col-lg-3">
        <img class="icons" src="{{URL('images/icons/004-ellipsis.svg')}}" alt="comingsoon" width="50" height="50">
        <h4 style="padding-top: 10px;">Coming Soon</h4>
        <div style="padding-bottom: 10px;">A complete rework for this page...new dashboard...new features...</div>
      </div>
    </div>
  </div>

  <hr class="rounded"></hr>

  <div class="container" style="padding-bottom:0px; padding-top: 20px;">

    <form method="post" action="{{route('addcard')}}">
      @csrf
      <table class="table" >
        <caption>Enter Your Card Details Above and Add Them To Your Collection.</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Set</th>
            <th scope="col">Year</th>
            <th scope="col">Language</th>
            <th scope="col">Price</th>
            <th scope="col">Base</th>
            <th scope="col">PSA9</th>
            <th scope="col">PSA10</th>
          </tr>
        </thead>
          <tr style="text-align: left;">
            <td><input type="text" name="number" placeholder="Number" size="6" maxlength="7" style="border:0px;"></td>
            <td><input type="text" name="card_name" placeholder="Card Name" size="15" maxlength="25" style="border:0px;"></td>
            <td><input type="text" name="set_name" placeholder="Set Name" size="20" maxlength="30" style="border:0px;"></td>
            <td><input type="text" name="year_released" placeholder="Year" size="3" maxlength="4" style="border:0px;"></td>
            <td><select id = "languageList" style="border:0px;" name="language">
             <option value = "english">ENG</option>
             <option value = "japanese">JPN</option>
            </select></td>
            <td><input type="double" name="bought_for" placeholder="Price"  size="4" maxlength="8" style="border:0px;"></td>
            <td><input type="text" name="ungraded_price" placeholder="Base" size="4" maxlength="8" style="border:0px;"></td>
            <td><input type="text" name="psa_nine_value" placeholder="PSA9" size="4" maxlength="8" style="border:0px;"></td>
            <td><input type="text" name="psa_ten_value" placeholder="PSA10" size="4" maxlength="8" style="border:0px;"></td>
          </tr>
      </table>

      <div style="text-align: right;">
      <button type="submit" class="btn btn-dark btn-rounded" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">Add</button>
      </div>
    </form>
  </div>

  <hr class="rounded" style="padding-top:20px;"></hr>

  <div class="container">
    <table class="table">
      <caption>Your Card Collection - *Card Price of '£0' are Packed Cards</caption>
      <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Set</th>
        <th scope="col">Year</th>
        <th scope="col">Price*</th>
        <th scope="col">Base</th>
        <th scope="col">PSA9</th>
        <th scope="col">PSA10</th>
        </tr>
      </thead>
      <tbody>
      @foreach($pokemoncards as $pokemoncard)
        <tr>
          <td>{{$pokemoncard->number}}</td>
          <td>{{$pokemoncard->card_name}}</td>
          <td>{{$pokemoncard->set_name}}({{$pokemoncard->language}})</td>
          <td>{{$pokemoncard->year_released}}</td>
          <td>£{{$pokemoncard->bought_for}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>

<hr class="rounded"></hr>

@endsection