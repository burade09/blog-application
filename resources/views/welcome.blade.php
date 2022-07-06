<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('welcome')}}">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                    </ul> --}}
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->

                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    @foreach ($featured_blogs as $featured )

                    <div class="card mb-4">
                        {{-- <div>
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>

                        </div> --}}
                        @if (empty($featured->image))
                    <img src="{{asset('uploads/blog_images/profile.png')}}" width="100px" height="100px">
                       @else
                        <img src="{{asset('uploads/blog_images/'.$featured->image)}}" width="850" height="350" class="rounded">
                       @endif
                        <div class="card-body">

                            {{-- <div class="small text-muted">January 1, 2022</div> --}}
                            <div>
                                <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> {{$featured->created_at->format('d.m.Y')}}</p>
                            </div>
                            <h2 class="card-title">{{$featured->title}}</h2>
                            <p class="card-text">{!!Str::limit($featured->description, 200)!!}</p>
                            <a class="btn btn-primary" href="{{route('blog.show',$featured->id)}}">Read more →</a>
                        </div>
                    </div>
                    @endforeach


                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($blogs as $status )
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                @if (empty($status->image))
                    <img src="{{asset('uploads/blog_images/profile.png')}}" width="100px" height="100px">
                               @else
                                <img src="{{asset('uploads/blog_images/'.$status->image)}}" width="200" class="rounded">
                               @endif
                                {{-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a> --}}
                                <div class="card-body">
                                    {{-- <h5 class="my-5">{{$status->title}}</h5> --}}
                            {{-- <div>
                                <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> {{$status->created_at->format('d.m.Y')}}</p>
                            </div> --}}
                                    <div class="small text-muted">{{$status->created_at->format('d.m.Y')}}</div>
                                    <h2 class="card-title h4">{{$status->title}}</h2>
                                    <p class="card-text">{!!Str::limit($status->description, 200)!!}</p>
                                    <a class="btn btn-primary" href="{{route('blog.show',$status->id)}}">Read more →</a>
                                </div>
                            </div>

                            <!-- Blog post-->
                            {{-- <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 1, 2022</div>
                                    <h2 class="card-title h4">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div> --}}
                        </div>
                        @endforeach
                        {{-- <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 1, 2022</div>
                                    <h2 class="card-title h4">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 1, 2022</div>
                                    <h2 class="card-title h4">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div> --}}
                        {{$blogs->links()}}

                    </div>
                    <!-- Pagination-->

                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    {{-- <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($status_categories as $status)
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">

                                        <div>
                                            {{-- <a href="#" class="text-muted hover-primary"><i class="fa fa-link"></i> {{$status->name}}</a> --}}
                                            <li><a href="{{route('welcome')}}?category_id={{$status->id}}">{{$status->name}}</a></li>
                                            {{-- <h5 class="my-5">{{$category->name}}</h5> --}}
                                        </div>
                                        {{-- <div>
                                            <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> {{$status->created_at->format('d.m.Y')}}</p>
                                        </div> --}}

                                        {{-- <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li> --}}
                                    </ul>
                                </div>
                                @endforeach

                                {{-- <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    {{-- <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
