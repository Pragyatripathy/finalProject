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





<!-- Header-->
<header class="bg-warning py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Best energy-saving gadgets for 2022</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>

<div class="card h-100">
    <!-- Product image-->
    <img class="card-img-top" src="" alt="..." />
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 id="product-title" class="fw-bolder"></h5>
            <h5 id="product-description" class="fw-bolder"></h5>
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="">View
                details</a></div>
    </div>
</div>


<button id="product-btn">Fetch Product</button>

<script>
    document.getElementById('product-btn').addEventListener("click", function () {
        const productTitle = document.getElementById('product-title');
        const productDescription = document.getElementById('product-description');
        fetch('https://fakestoreapi.com/products/1')
            .then(response => response.json())
            .then(json => { console.log(json); productTitle.innerHTML = json.title; productDescription.innerHTML = json.description; })
    })
</script>

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($tools as $tool)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://robohash.org/{{ $tool->picture }}.jpg?bgset=bg2" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$tool->name}}</h5>
                            <!-- Product price-->
                            {{ $tool->price }} $
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="/store-details/{{$tool->id}}">View details</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection