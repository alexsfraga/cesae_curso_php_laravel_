@extends('template')

@section('content')

<!-- Start content -->
			<main class="main-content">
				<div class="fullwidth-block download">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
                                <h2 class="page-title">Next Concerts</h2>

                                @foreach ($listTour as $item)

                                    <div class="item">
                                    <h3 class="item-title">{{$item->title}}</h3>
                                        <span class="year">{{$item->date}}</span>
                                        <a href="#" class="button small primary">Buy Ticket</a>
                                        <div class="social-share">
                                            <span>Share:</span>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>

                                @endforeach
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

			</main> <!-- .main-content -->
<!-- End content -->

@endsection

@section('body')
        <body>
@endsection

@section('title')
    <title>Gallery | Band Template</title>
@endsection
