@extends('layout')
@section('title')
Shop
@endsection
@section('body')
    <div class="container">
  <div class="row">
    @foreach ($allProducts as $product)
      <div class="col-md-4 mb-4">
        <div class="card bg-info" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->amount}}-Kg</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->price}}.00rsd</h6>
            <p class="card-text">{{$product->description}}</p>
            <a href="#" class="card-link btn btn-success">info</a>
            <a href="#" class="card-link btn btn-success">buy</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
    @endsection