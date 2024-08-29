@extends('layouts.app')
@section('content')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h1>{{ trans('layoutweb.blog_detail') }}</h1>
                </header>
            </div>

            <!-- Lines -->


        </main>

        <div class="content blog-content-info">

            <!-- Blog Details -->

            <section class="blog-details">
                <div class="container">
                    <div class="row">
                        @if (Session::get('language') == 'es')
                        <div class="col-primary col-md-8">
                            <article class="post">
                                <header class="post-header">
                                    <h3>{{ $post->titulo_espanol }}</h3>
                                    <div class="blog-meta">
                                        <div class="author">
                                            <!-- by <a href="#">Craig David</a> -->
                                        </div>
                                        <div class="time">{{ $post->created_at->format('d M Y') }}</div>
                                    </div>
                                    </header>
                            <div class="post-thumbnail">
                                    <img alt="{{ $post->titulo_espanol }}" class="img-responsive" src="{{ asset('storage/'.$post->imagen.'') }}">
                                </div>
                                    {!! $post->cuerpo_espanol !!}
                            </article>
                        </div>
                        <div class="col-secondary col-md-4">
                            <div class="widget widget_recent_post">
                                <h3 class="widget-title">{{ trans('layoutweb.recent_posts') }}</h3>
                                @foreach ($data as $item)
                                <article class="recent-post">
                                    <div class="recent-post-thumbnail">
                                        <a href="{{ route('blog-details', $item->id) }}">
                                            <img alt="{{ $item->titulo_espanol }}" src="{{ asset('storage/'.$item->imagen.'') }}" class="wp-post-image">
                                        </a>
                                    </div>
                                    <div class="recent-post-body">
                                        <h4 class="recent-post-title">
                                            <a href="{{ route('blog-details', $item->id) }}">{{ $item->titulo_espanol }}</a>
                                        </h4>
                                        <div class="recent-post-time">{{ $item->created_at->format('d M Y') }}</div>
                                    </div>
                                </article>
                                @endforeach
                            </div>

                        </div>
                        @else
                        <div class="col-primary col-md-8">
                            <article class="post">
                                <header class="post-header">
                                    <h3>{{ $post->titulo_ingles }}</h3>
                                    <div class="blog-meta">
                                        <div class="author">
                                            <!-- by <a href="#">Craig David</a> -->
                                        </div>
                                        <div class="time">{{ $post->created_at->format('d M Y') }}</div>
                                    </div>
                                    </header>
                            <div class="post-thumbnail">
                                    <img alt="{{ $post->titulo_ingles }}" class="img-responsive" src="{{ asset('storage/'.$post->imagen.'') }}">
                                </div>
                                    {!! $post->cuerpo_ingles !!}
                            </article>
                        </div>
                        <div class="col-secondary col-md-4">
                            <div class="widget widget_recent_post">
                                <h3 class="widget-title">{{ trans('layoutweb.recent_posts') }}</h3>
                                @foreach ($data as $item)
                                <article class="recent-post">
                                    <div class="recent-post-thumbnail">
                                        <a href="{{ route('blog-details', $item->id) }}">
                                            <img alt="{{ $item->titulo_ingles }}" src="{{ asset('storage/'.$item->imagen.'') }}" class="wp-post-image">
                                        </a>
                                    </div>
                                    <div class="recent-post-body">
                                        <h4 class="recent-post-title">
                                            <a href="{{ route('blog-details', $item->id) }}">{{ $item->titulo_ingles }}</a>
                                        </h4>
                                        <div class="recent-post-time">{{ $item->created_at->format('d M Y') }}</div>
                                    </div>
                                </article>
                                @endforeach
                            </div>

                        </div>
                        @endif

                    </div>
                </div>
            </section>

            <!-- Footer -->
            @include('layouts.footer')

            <!-- Lines -->


        </div>
    </div>
    @endsection
