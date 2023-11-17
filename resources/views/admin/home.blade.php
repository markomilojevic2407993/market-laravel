@extends('layout')

@section('body')
<div class="container">
    <nav class="text-center">
        <a class="m-4" href="/admin/home">HomeAdmin</a>
        <a class="m-4" href="/admin/products">ProductsList</a>
    </nav>
</div>
<form class="container" action="/admin/addProducts" method="post">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="description" placeholder="description"><br>
    <input type="number" name="amount" placeholder="amount"><br>
    <input type="number" name="price" placeholder="price"><br>
    <button class="btn btn-light" type="submit">add product</button>
</form>

@endsection