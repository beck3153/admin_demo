<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                position: relative;
                text-align: center;
                margin-top: 80px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* stylelint-disable selector-list-comma-newline-after */

            .blog-header {
                line-height: 1;
                border-bottom: 1px solid #e5e5e5;
            }

            .blog-header-logo {
                font-family: "Playfair Display", Georgia, "Times New Roman", serif;
                font-size: 2.25rem;
            }

            .blog-header-logo:hover {
                text-decoration: none;
            }

            h1, h2, h3, h4, h5, h6 {
                font-family: "Playfair Display", Georgia, "Times New Roman", serif;
            }

            .display-4 {
                font-size: 2.5rem;
            }
            @media (min-width: 768px) {
                .display-4 {
                    font-size: 3rem;
                }
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }

            .nav-scroller .nav-link {
                padding-top: .75rem;
                padding-bottom: .75rem;
                font-size: .875rem;
            }

            .card-img-right {
                height: 100%;
                border-radius: 0 3px 3px 0;
            }

            .flex-auto {
                -ms-flex: 0 0 auto;
                -webkit-box-flex: 0;
                flex: 0 0 auto;
            }

            .h-250 { height: 250px; }
            @media (min-width: 768px) {
                .h-md-250 { height: 250px; }
            }

            .border-top { border-top: 1px solid #e5e5e5; }
            .border-bottom { border-bottom: 1px solid #e5e5e5; }

            .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

            /*
             * Blog name and description
             */
            .blog-title {
                margin-bottom: 0;
                font-size: 2rem;
                font-weight: 400;
            }
            .blog-description {
                font-size: 1.1rem;
                color: #999;
            }

            @media (min-width: 40em) {
                .blog-title {
                    font-size: 3.5rem;
                }
            }

            /* Pagination */
            .blog-pagination {
                margin-bottom: 4rem;
            }
            .blog-pagination > .btn {
                border-radius: 2rem;
            }

            /*
             * Blog posts
             */
            .blog-post {
                margin-bottom: 4rem;
            }
            .blog-post-title {
                margin-bottom: .25rem;
                font-size: 2.5rem;
            }
            .blog-post-meta {
                margin-bottom: 1.25rem;
                color: #999;
            }

            /*
             * Footer
             */
            .blog-footer {
                padding: 2.5rem 0;
                color: #999;
                text-align: center;
                background-color: #f9f9f9;
                border-top: .05rem solid #e5e5e5;
            }
            .blog-footer p:last-child {
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="container">
                    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                        <div class="col-md-6 px-0">
                            <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#">Featured post</a>
                                    </h3>
                                    <div class="mb-1 text-muted">Nov 12</div>
                                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#">Continue reading</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#">Post title</a>
                                    </h3>
                                    <div class="mb-1 text-muted">Nov 11</div>
                                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
