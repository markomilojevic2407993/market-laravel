@extends('layout')

@section('body')
<form class="container" action="/sendRegistration" method="post">
    @csrf
    @if($errors->any())
    <p>{{$errors->first()}}</p>
    @endif
    <input  type="text" name="name" placeholder="Adam Maric"><br>
    <input  type="text" name="email" placeholder="jokan@koric"><br>
    <input  type="text" name="pass" placeholder="*******"><br>
    <input type="hidden" name="price" placeholder="12000" value="0">
    <button class="btn btn-lg btn-primary" type="submit">Registration</button>
</form>
@endsection