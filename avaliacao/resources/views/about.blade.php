@extends('template')

@section('content')

<!-- Start content -->
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="content">
									<h2 class="entry-title">Our History</h2>
									<figure class="featured-image">
										<img src="dummy/post-image.jpg" alt="post image">
									</figure>
									<p class="leading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat odio autem iste neque architecto alias culpa, ab libero, praesentium esse natus quae possimus sed qui dolorum laudantium illum, incidunt eligendi?</p>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>

									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
								</div>
							</div>
<!-- Start albums -->
							<div class="col-md-4 col-md-push-1">
								<aside class="sidebar">
									<div class="widget">
										<h3 class="widget-title">Discography</h3>
										<ul class="discography-list">
                                            @foreach ($listAbout as $item )

                                                <li>
                                                    <figure class="cover"><img src={{$item->cover}} alt="thumbnail 1"></figure>
                                                    <div class="detail">
                                                        <h3><a href="#">{{$item->name}}</a></h3>
                                                        <span class="year">{{$item->year}}</span>
                                                        <span class="track">{{$item->track}}</span>
                                                    </div>
                                                </li>

                                            @endforeach

										</ul>
									</div>
								</aside>
							</div>
<!-- End albums -->
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
    <title>About Us| Band Template</title>
@endsection
