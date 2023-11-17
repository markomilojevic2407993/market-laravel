
@extends('layout')
@section('body')
@foreach($products as $product)
<style>
        table {
            width: 100%; /* 100% širina tabele */
            table-layout: fixed; /* Fiksirana širina tabele */
        }

        th, td {
            width: 16%; 
            overflow: hidden; 
            white-space: nowrap; 
            text-overflow: ellipsis; 
        }
    </style>
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Amount</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->amount}}</td>
      <td>{{$product->price}}</td>
      <td><a href="/admin/delete/{{$product->id}}">Delete{{$product->id}}</a></td>
    </tr>
    
  </tbody>
</table>
@endforeach
@endsection