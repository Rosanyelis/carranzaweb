@extends('layouts.app')
@section('content')
<div class="layout">
        <!-- Home -->
        <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header text-center">
                    <h1 class="section-title" style="color:#fff">{{ trans('layoutweb.blog') }}</h1>
                </header>
            </div>

            <!-- Lines -->

        </main>

        <div class="content">

            <!-- Blog List  -->
            <section class="project-details" id="residential">

                @foreach($blog as $item)
                <div class="container" >
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info wow fadeInLeft">
                                @php
                                    $url = asset('storage/'.$item->imagen.'');
                                    try {
                                        $infoimg = getimagesize($url);
                                    } catch (Exception $e) {
                                        $infoimg = [400, 400];
                                    }
                                    $ancho = $infoimg[0];
                                    $alto = $infoimg[1];

                                    if ($ancho != 1920 && $alto != 1080) {
                                        $imagen = 'img/image-no-corresponde.png';
                                    } else {
                                        $imagen = 'storage/'.$item->imagen;
                                    }
                                @endphp

                                @if (Session::get('language') == 'es')
                                    <h3 class="project-details-title">
                                        {{ $item->titulo_espanol }}
                                    </h3>
                                    <p class="project-details-descr" >
                                    @php
                                        $text = $item->cuerpo_espanol;
                                        $newText = Illuminate\Support\Str::limit($text, 80, '...');
                                    @endphp
                                        {!! $newText !!}
                                    </p>
                                @else
                                    <h3 class="project-details-title">
                                        {{ $item->titulo_ingles }}
                                    </h3>
                                    <p class="project-details-descr" >
                                        @php
                                            $text = $item->cuerpo_ingles;
                                            $newText = Illuminate\Support\Str::limit($text, 80, '...');
                                        @endphp
                                        {!! $newText !!}
                                    </p>
                                @endif

                                <div class="text-right"><a href="{{ route('blog-details', $item->id) }}"
                                class="btn btn-link text-right">{{ trans('layoutweb.see_more') }}</a></div>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="Servicio de Distribución" class="img-responsive"
                                src="{{ asset(''.$imagen.'')}}">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Pagination -->
                <div class="text-center mt-3">{{ $blog->links('vendor.pagination.tailwind') }}</div>


            </section>

            <!-- Footer -->
            @include('layouts.footer')

            <!-- Lines -->


        </div>
    </div>

@endsection
