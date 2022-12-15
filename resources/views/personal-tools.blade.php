@extends('template')

@section('title', 'personal_tools list')

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

@foreach ($personal_tools as $personal_tool)
@foreach ($users as $user)
@if ($user->id == $personal_tools->user_id)
<p>User : {{ $user->username }}</p>
@foreach ($tools as $tool)
@if ($user->personal_item == $tool->id)
<p>Picture : <img src={{ $tool->picture }} /></p>
<p>Name : {{ $tool->name }}</p>
<p>Watt : {{ $tool->watt }} $</p>
@endif
@endforeach
@endif
@endforeach
@endforeach

@endsection