@extends('template')

@section('content')
    <h1>  result form  </h1>
    <div>
        <p><b>Nome:</b> {{$name}} </p>
        <p><b>Email:</b> {{$email}} </p>
        <p><b>Mensagem:</b> {{$message}} </p>
    </div>

@endsection
