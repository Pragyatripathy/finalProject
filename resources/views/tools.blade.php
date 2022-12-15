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

<div id="quotes" style='font-size:30px;'></div>
<button id="quote-btn">Fetch Quote</button>

<script>
	document.getElementById('quote-btn').addEventListener("click", function () {
		const quoteHolder = document.getElementById('quotes');
		const options = {
			method: 'GET',
			headers: {
				'X-RapidAPI-Key': 'ef0dc86aedmshf291447f1765273p16c623jsn8735b69b9ed5',
				'X-RapidAPI-Host': 'famous-quotes4.p.rapidapi.com'
			}
		};

		fetch('https://famous-quotes4.p.rapidapi.com/random?category=technology&count=1', options)
			.then(response => response.json())
			.then(response => quoteHolder.innerHTML = response[0].text)
			.catch(err => console.error(err));
	})
</script>

<form method="POST">
	@csrf
	<input type="submit" name="all" value="Show All">
	<input type="submit" name="smartphones" value="Show Smartphones Only">
	<input type="submit" name="laptops" value="Show laptops Only">
	<input type="submit" name="coffee_machines" value="Show coffee machines Only">
</form>

<!--<h1><a href="store">Vist the Store</a></h1>-->

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
							<h6 class="fw-bolder">Name : {{ $tool->name }} <br> Watt : {{ $tool->watt }} <br> Rating :
								{{ $tool->rating }} <br> category : {{ $tool->category }}</h6>
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