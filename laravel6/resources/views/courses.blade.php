@extends('template')

@section('content')
    <section id="courses">
        @foreach ($coursesList as $course)
            <div class="box">
                <img src={{$course->image}}>
                <h3>{{$course->course}}</h3>
                <p>{{$course->description}}</p>
            </div>
        @endforeach
    </section>
    <div class="clr"></div>
@endsection
