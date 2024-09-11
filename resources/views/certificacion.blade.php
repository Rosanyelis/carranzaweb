@extends('layouts.app')

@section('content')
<div class="layout">

        <!-- Home -->
        <main class="main main-inner bg-certificaciones" data-stellar-background-ratio="0.1"> <!--BG Pic en img/bridge-empresa.jpg-->
            <div class="container">
                <header class="main-header">
                    <h1 class="section-title"><span class="text-primary">{{ trans('layoutweb.certifications') }}</span></h1>
                </header>
           </div>
            <!-- Lines -->
        </main>


        <div class="content">
            <section class="projects section">
                <div class="container">
                    <p class="header-text text-center" style="color:#000">
                        {{ trans('layoutweb.certifications_text') }}
                        </br></br>
                        {{ trans('layoutweb.certifications_text2') }}
                    </p>
                </div>
                <div class="section-content container">
                    <div class="row mt-5">
                        <div class="col-md-6" >
                            <div class="about-img">
                                <img alt="Certificación OLA" class="img-responsive" src="{{ asset('img/OLA.png') }}">
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="about-img">
                                <img alt="Certificación OEA" class="img-responsive" src="{{ asset('img/certificacion-oea.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Footer -->

            @include('layouts.footer')

            <!-- Lines -->


        </div>
    </div>
@endsection
