@extends('template')

@section('title', 'users list')

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


<!--
@foreach ($users as $user)
<p>Picture : <img src=https://robohash.org/{{ $user->avatar }}.jpg?bgset=bg2 /></p>
<p>id : {{ $user->id }}</p>
<p>First Name : {{ $user->firstname }}</p>
<p>Last Name : {{ $user->lastname }}</p>
<p>Daily Hours Energy Use : {{ $user->daily_hours_electricity_use }}</p>
<p>email : {{ $user->email }}</p>
<p>password : {{ $user->password }}</p>
<p>personal item : {{ $user->personal_item }}</p>
<hr>
@endforeach
-->

<div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
    @foreach ($users as $user)
    <div class="card mb-2">
        <div class="card-body p-2 p-sm-3">
            <div class="media forum-item">
                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                        src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50"
                        alt="User" /></a>
                <div class="media-body">
                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                            class="text-body">{{$user->firstname}} {{$user->lastname}}</a></h6>
                    <p class="text-secondary">
                    <p>Daily Hours Energy Use : {{ $user->daily_hours_electricity_use }}</p>
                    <p>email : {{ $user->email }}</p>
                    <p>password : {{ $user->password }}</p>
                    <p>personal item : {{ $user->personal_item }}</p>
                    <hr>
                    </p>
                    <p class="text-secondary">

                    </p>
                </div>
                <!--<div class="text-muted small text-center align-self-center">
                                <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                <span><i class="far fa-comment ml-2"></i> 3</span>
                            </div>-->
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection