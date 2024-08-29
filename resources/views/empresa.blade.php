@extends('layouts.app')

@section('content')

<div class="layout">

<!-- Home -->
    <main class="main main-inner bg-residential" data-stellar-background-ratio="0.1"> <!--BG Pic en img/bridge-empresa.jpg-->
        <div class="container">
            <header class="main-header">
                <h1 class="section-title " style="color:#fff">{{ trans('layoutweb.our3') }}  <span class="text-primary">{{ trans('layoutweb.company') }}</span></h1>
            </header>
        </div>
        <!-- Lines -->


    </main>

    <div class="content">

        <section class="projects section">
            <div class="container">
                <p class="header-text text-center" style="color:#000">
                    {{ trans('layoutweb.founded') }} <strong><span class="text-primary">{{ trans('layoutweb.person1') }}</span></strong>,
                    {{ trans('layoutweb.founded2') }}
                    <strong><span class="text-primary"> {{ trans('layoutweb.person2') }}</span></strong>.
                    <br>
                    {{ trans('layoutweb.founded4') }} <strong><span class="text-primary">{{ trans('layoutweb.person3') }}</span></strong>
                    {{ trans('layoutweb.founded5') }}
                    <br>
                    {{ trans('layoutweb.founded6') }} <strong><span class="text-primary">{{ trans('layoutweb.person4') }}</span></strong>
                    {{ trans('layoutweb.founded7') }}
                </p>
            </div>
        </section>
        <!-- Mision, Vision y Politicas -->
        <section class="project-details" id="residential">
            <div class="container">
                <div class="project-details-item heightItem">
                    <div class="row">
                        <div class="project-details-info wow fadeInLeft">
                            <h3 class="project-details-title">
                                {{ trans('layoutweb.our_mision') }}
                            </h3>
                            <p class="project-details-descr">{{ trans('layoutweb.our_mision_text') }}
                            </p>
                        </div>
                        <div class="project-details-img col-md-8 col-md-offset-4">
                            <img alt="{{ trans('layoutweb.our_mision') }}" class="img-responsive" src="{{ asset('img/oficina1.jpg ') }}">
                        </div>
                    </div>
                </div>

                <div class="project-details-item">
                    <div class="row">
                        <div class="project-details-info wow fadeInRight"
                            style="visibility: visible; animation-name: fadeInRight;">
                            <h3 class="project-details-title">
                            {{ trans('layoutweb.quality_policies') }}
                            </h3>
                            <p class="project-details-descr">{{ trans('layoutweb.quality_policies_text') }}</p>
                        </div>
                        <div class="project-details-img col-md-8">
                            <img alt="{{ trans('layoutweb.quality_policies') }}" class="img-responsive" src="{{ asset('img/empresa-politica-calidad.jpg') }}">
                        </div>
                    </div>
                </div>

                <div class="project-details-item heightItem">
                    <div class="row">
                        <div class="project-details-info wow fadeInLeft">
                            <h3 class="project-details-title">
                            {{ trans('layoutweb.security_policy') }}
                            </h3>
                            <p class="project-details-descr">{{ trans('layoutweb.security_policy_text') }}
                            </p>
                        </div>
                        <div class="project-details-img col-md-8 col-md-offset-4">
                            <img alt="{{ trans('layoutweb.security_policy') }}" class="img-responsive" src="{{ asset('img/oficina3.png') }}">
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
