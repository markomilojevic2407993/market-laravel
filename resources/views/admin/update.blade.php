@extends('layout')
@section('body')
<form action="{{route('saveEdit',['id'=>$product->id])}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="description" placeholder="description">
    <input type="text" name="amount" placeholder="amount">
    <input type="number" name="price" placeholder="price">
    <button type="submit">Update</button>
</form>

@endsection