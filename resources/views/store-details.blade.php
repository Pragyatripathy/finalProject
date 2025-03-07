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

<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                    src="https://robohash.org/{{ $tool->picture }}.jpg?bgset=bg2" alt="..." height="900px"></div>
            <div class="col-md-6">
                <div class="small mb-1">SKU: BST-498</div>
                <h1 class="display-5 fw-bolder">{{$tool->name}}</h1>
                <div class="fs-5 mb-5">
                    <span>Normal Price:</span><span class="text-decoration-line-through">${{$tool->price+20}}</span><br>
                    <span>Current Price:</span><span>${{$tool->price}}</span><br>
                    <span class="lead">{{$tool->description}}</span><br>
                    <span>Watt : {{ $tool->watt }}</span><br>
                    <span>Rating : {{ $tool->rating }}</span><br>
                    <span>Seller : {{ $tool->sellername }}</span><br>
                    <span>Seller-Website : {{ $tool->sellerurl }}</span><br>
                    <span>Serial Number : {{ $tool->serialnumber }}</span><br>
                    <hr>
                </div>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                        style="max-width: 3rem" />
                    <button onclick="location.href='http://www.example.com'" class="btn btn-outline-dark flex-shrink-0"
                        type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Related products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($tools as $index => $tool)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://robohash.org/{{ $tool->name }}.jpg?bgset=bg2" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$tool->name}}</h5>
                            <!-- Product price-->
                            ${{$tool->price}}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View details</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!--
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


-->
@endsection