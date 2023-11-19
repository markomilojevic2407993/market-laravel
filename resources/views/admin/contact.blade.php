@extends('layout')
@section('body')

<div class="container border">
  @foreach($allContacts as $message)
  <div class="border">
  <ul >
    <li >email :  {{$message->email}}</li>
    <li >Poruka: {{$message->message}}</li>
    <a href="/admin/custoerDelete/{{$message->id}}">Delete</a>
  </ul>
  </div>
  
  @endforeach
</div>


@endsection