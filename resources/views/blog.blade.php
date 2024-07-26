@extends('layouts.app')
@section('content')
<div class="layout">
        <!-- Home -->
        <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header text-center">
                    <h1 class="section-title" style="color:#fff">NOTICIAS</h1>
                </header>
            </div>

            <!-- Lines -->
            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </main>

        <div class="content">

            <!-- Blog List  -->
            <section class="project-details" id="residential">

                @foreach($blog as $item)
                <div class="container" >
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info wow fadeInLeft">
                                <h3 class="project-details-title">
                                    {{ $item->titulo }}
                                </h3>
                                <p class="project-details-descr" >
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

                                        $text = $item->cuerpo;
                                        $newText = Illuminate\Support\Str::limit($text, 80, '...');
                                    @endphp
                                    {!! $newText !!}
                                </p>
                                <div class="text-right"><a href="" class="btn btn-link text-right">Ver más</a></div>
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

            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
