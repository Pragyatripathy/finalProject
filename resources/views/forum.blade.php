@extends('template')

@section('title', 'Posts list')

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


<div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
    @foreach ($posts as $post)
    <div class="card mb-2">
        <div class="card-body p-2 p-sm-3">
            <div class="media forum-item">
                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                        src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50"
                        alt="User" /></a>
                <div class="media-body">
                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                            class="text-body">{{$post->firstname}} {{$post->lastname}}</a></h6>
                    <p class="text-secondary">
                        {{$post->title}}
                    </p>
                    <p class="text-secondary">
                        {{$post->text}}
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