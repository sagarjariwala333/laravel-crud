@extends('products.layout');
@section('content')

<form action="{{ route('product.store') }}" method="post">
	@csrf
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Email address</label>
  		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Product name" name="name">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  		<textarea class="form-control" id="exampleFormControlTextarea1" name="detail" rows="3"></textarea>
	</div>

	<div class="mb-3">
  		<button type="submit" class="btn btn-primary">Submit</button>
	</div>

</form>

@endsection