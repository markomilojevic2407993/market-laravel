@extends('layout')
@section('title')
Contact
@endsection
@section('body')
<form action="/contactSend"  method="post"> 
@csrf
@if($errors->any())
<p>{{$errors->first()}}</p>
@endif
<div class="container">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <button class="btn btn-danger" type="submit">Send your message</button>
</div>
</div>
</form>


<div class="container">
  @foreach($allContacts as $message)
  <p>{{$message->email}}</p>
  <p>{{$message->message}}</p>
  @endforeach
</div>
@endsection