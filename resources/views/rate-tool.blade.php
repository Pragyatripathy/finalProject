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



<form method="GET">
    @csrf
    <label for="rating">Rate this tool</label>
    <select name="rating">
        <option value="0">0 - worst</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5 - best</option>
    </select>
    <input type="submit" value="Give Rating">
</form>
<p><img src={{ $tool->picture }} /></p>
<p>Name : {{ $tool->name }}</p>
<p>Watt : {{ $tool->watt }}</p>
<p>Rating : {{ $tool->rating }}</p>
<p>Amount Of Ratings : {{ $tool->amountOfRatings }}</p>
<p>Price : {{ $tool->price }}$</p>
<p>Seller : {{ $tool->seller }}</p>
<p>Serial Number : {{ $tool->serialnumber }}</p>
<hr>

@endsection