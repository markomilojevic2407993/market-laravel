
@extends('layout')
@section('body')

<style>
        table {
            width: 100%; 
            table-layout: fixed; 
        }

        th, td {
            width: 16%; 
            overflow: hidden; 
            white-space: nowrap; 
            text-overflow: ellipsis; 
        }
    </style>
    <h2 class=" container text-center bg-primary">ALL PRODUCTS</h2>
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Amount</th>
      <th scope="col">Price</th>
      <th scope="col">Crud</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->amount}}</td>
      <td>{{$product->price}}</td>
      <td><a class="btn btn-sm btn-danger" href="/admin/delete/{{$product->id}}">Delete{{$product->id}}</a></td>  
    </tr>
    @endforeach
  </tbody>
</table>
@endsection