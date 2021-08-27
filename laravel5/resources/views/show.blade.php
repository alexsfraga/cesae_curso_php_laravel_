@extends('principal')

@section('content')
        <section id="contact-form" class="py-3">
            <div class="container">
                <h1 class="l-heading"><span class="text-primary">Result</span> </h1>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type=text name="name" id="name" value="{{$name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type=text name="email" id="email" value="{{$email}}">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message">{{$message}}</textarea>
                    </div>
            </div>
        </section>
@endsection
