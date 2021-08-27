@extends("template")

@section("content3")
            <p> ------------- CONTACTS -----------------------</p>
            <p> ----------------------------------------------</p>
        @foreach ($contactList as $contact)
            <p>Nome: {{$contact->name}}</p>
            <p>Email: {{$contact->email}}</p>
            <p>Message: {{$contact->message}}</p>
            <p> ----------------------------------------------</p>
        @endforeach
@endsection
@section('content2')
    <body class="subpage">
@stop

@section('content1')
    <title>SUBMITED CONTACTS</title>
@stop
