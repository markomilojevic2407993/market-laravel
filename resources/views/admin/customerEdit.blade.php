@extends('layout')
@section('body')

<div>
    <form action="{{route('saveEditCustomer',['id'=>$customer->id])}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$customer->name}}">
        <input type="text" name="email" value="{{$customer->email}}">
        <input type="text" name="pass" value="{{$customer->pass}}">
        <input type="number" name="price" value="{{$customer->price}}">
        <button type="submit">Edit customer </button>
    </form>
</div>

@endsection