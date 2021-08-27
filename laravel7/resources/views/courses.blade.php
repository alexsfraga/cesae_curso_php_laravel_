@extends('template')

@section('content3')
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Courses</h2>
						<p>Aliquam erat volutpat nam dui </p>
					</header>
                    @foreach ($coursesList as $course )

                        <h3>{{$course->title}}</h3>
                        <div class="box">
                            <h4>{{$course->subtitle}}</h4>
                            <p><span class="image left">
                                <img src={{$course->image}} alt="" />
                            </span>{{$course->description}}</p>
                        </div>
                        <hr class="major" />

                    @endforeach


				</div>

			</section>
@stop

@section('content2')
    <body class="subpage">
@stop

@section('content1')
    <title>Cursos</title>
@stop
