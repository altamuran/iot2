@extends('layouts.app')
<style type="text/css">
	body {
  background-image: url(http://www.techeconomy.it/wp-content/uploads/2014/07/internet-of-things-IoT.png);
  background-size: cover;
  background-repeat: no-repeat;
  font-family: Arial, sans-serif;
  font-weight: bold;
  font-size: 14px;
}

.wrap {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -86px;
  margin-left: -89px;
  text-align: center;
}

a {
  -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  display: block;
  margin: 20px auto;
  max-width: 180px;
  text-decoration: none;
  border-radius: 4px;
  padding: 20px 30px;
}

a.button {
  color: rgba(70, 22, 54, 0.6);
  box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset;
}

a.button:hover {
  color: rgba(255, 255, 255, 0.85);
  box-shadow: rgba(30, 22, 54, 0.7) 0 0px 0px 40px inset;
}

a.button2 {
  color: rgba(70, 100, 54, 0.6);
  box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset;
}

a.button2:hover {
  color: rgba(255, 255, 255, 0.6);
  box-shadow: rgba(30, 22, 54, 0.7) 0 80px 0px 2px inset;
}
</style>

@section('content')


	
  
	@include('layouts.navbar')
	

	<div class="wrap">
			 @if((Auth::user()->privilegi)==2)
  			<a href='{{route('adduser')}}' class="button">Gestisci richieste</a>
			<a href="{{route('userhandle')}}" class="button2">Gestisci sensori</a>
			@endif
			@if((Auth::user()->privilegi)==0)
			<a href="{{route('handle')}}" class="button2">Gestisci Siti</a>
			@endif
		</div>








 
	@endsection