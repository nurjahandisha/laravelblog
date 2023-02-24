@extends('layouts.frontendapp')
@section('content')
<!-- header -->


    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">{{$category->title}}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$category->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <!-- post -->
                            @forelse($posts as $post)
                            
                        <div class="post post-grid rounded bordered">
                                    <div class="thumb top-rounded">
                                        <a href="category.html" class="category-badge position-absolute">{{$post->title}}</a>
                                        <span class="post-format">
                                            <i class="icon-picture"></i>
                                        </span>
                                        <a href="blog-single.html">
                                            <div class="inner">
                                                <img src="{{asset('storage/'.$post->featured_image)}}" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                
                                    <div class="details">
                                        <ul class="meta list-inline mb-0">
                                            <li class="list-inline-item"><a href="category.html#"><img src="images/other/author-sm.png" class="author" alt="author"/>{{ $post->user->name }}</a></li>
                                            <li class="list-inline-item">{{carbon\carbon::parse($post->created_at)->format('d M Y')}}</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3"><a href="{{route('frontend.showpost',$post->slug)}}">{{ $post->title }}</a></h5>
                                        
                                        <p class="excerpt mb-0">{{ $post->content }}</p>
                                    </div>
                                    <div class="post-bottom clearfix d-flex align-items-center">
                                        <div class="social-share me-auto">
                                            <button class="toggle-button icon-share"></button>
                                            <ul class="icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="category.html#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="category.html#"><i class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="category.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="category.html#"><i class="fab fa-pinterest"></i></a></li>
                                                <li class="list-inline-item"><a href="category.html#"><i class="fab fa-telegram-plane"></i></a></li>
                                                <li class="list-inline-item"><a href="category.html#"><i class="far fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="more-button float-end">
                                            <a href="blog-single.html"><span class="icon-options"></span></a>
                                        </div>
                                    </div>
                                </div>
                        @empty


                        @endforelse
                    </div>

                    </div>

					<!-- <nav>
						<ul class="pagination justify-content-center">
							<li class="page-item active" aria-current="page">
								<span class="page-link">1</span>
							</li>
							<li class="page-item"><a class="page-link" href="category.html#">2</a></li>
							<li class="page-item"><a class="page-link" href="category.html#">3</a></li>
						</ul>
					</nav> -->

				</div>
				@include('layouts.frontendssidebar')

			</div>

		</div>
	</section>
@endsection
