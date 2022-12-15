
@extends('template')

@section('title', 'Update your personal tool collection')

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

    <form method="POST">
        @csrf
        <label for="name">Name of Tool</label><br>
        <input name="name"  value="ashavhasvhs" /><br>
        <label for="watt">Watt</label><br>
        <input name="watt" value="1000" ><br>
        <label for="picture">picture</label><br>
        <input name="picture" value="tool.jpg"><br>
        <label for="price">price</label><br>
        <input name="price"  value="10"><br>
        <label for="seller">seller</label><br>
        <input name="seller" value="ashavhasvhs" ><br>
        <label for="rating">rating</label><br>
        <input name="rating" value="5" ><br>
        <label for="serialnumber">serialnumber</label><br>
        <input name="serialnumber" value="1" ><br>
        <input type="submit" value="insert tool" />
    </form>

    
@endsection