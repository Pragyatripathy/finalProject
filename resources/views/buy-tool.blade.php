@extends('template')

@section('title', 'tools list')

@section('content')

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif

<h1>Do you want to buy this tool?</h1>
<form method="POST">
@csrf
<input type="hidden" value="{{$tool->id}}"><br>
<label for="qty">Quantity to Buy</label><br>
<input name="qty" type="number" value=1><br>
<label for="totalPrice">Price for one unity of this Tool: </label><br>
<input name="totalPrice" type="text" value="{{$tool->price}}"><br>
<input type="submit" value="Buy this shit">
</form>
<p><img src=https://robohash.org/{{ $tool->picture }}.jpg?bgset=bg2 /></p>
<p>Name : {{ $tool->name }}</p>
<p>Watt : {{ $tool->watt }}</p>
<p>Rating : {{ $tool->rating }}</p>
<p>Seller : {{ $tool->seller }}</p>
<p>Serial Number : {{ $tool->serialnumber }}</p>
<hr>

@endsection