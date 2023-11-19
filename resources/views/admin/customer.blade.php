@extends('layout')
@section('body')

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
    </table>
<h3 class="container text-center bg-warning">ALL CUSTOMER</h3>
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Price</th>
      <th scope="col">Crud</th>
    </tr>
  </thead>
  <tbody>
@foreach($customers as $customer)
<tr>
  <td>{{$customer->id}}</td>
    <td>{{$customer->name}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->price}}</td>
    <td><a class="btn btn-sm btn-danger" href="{{route('obrisiKorisnika',['customer'=>$customer->id])}}" >Delete{{$customer->id}}</a></p>
  </tr>
@endforeach 
</tbody>
</table>
@endsection