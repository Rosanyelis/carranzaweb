@extends('layouts.app')

@section('content')
<div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-infraestructura" data-stellar-background-ratio="0.1"> <!--BG Pic en img/bridge-empresa.jpg-->
            <div class="container">
                <header class="main-header">
                    <h1 class="section-title" style="color:#fff">
                        {{ trans('layoutweb.business_partners') }}
                    </h1>
                </header>
           </div>
            <!-- Lines -->


        </main>

        <div class="content">
            <!-- Objects -->

            <section id="services" class="services">
                <div class="container">

                    <div class="section-content">
                        <header class="section-header" style="padding-bottom: 6em !important;">
                            <h4 class="section-title wow fadeInRight" style="margin-top: 1em;">
                            <span class="text-primary">{{ trans('layoutweb.person3') }}</span>
                            {{ trans('layoutweb.alliances_text2') }}
                            </h4>
                        </header>
                        <header class="section-header" style="padding-bottom: 3em !important;">

                            <h1 class="section-title wow fadeInRight">
                            {{ trans('layoutweb.alliances') }} <span class="text-primary">{{ trans('layoutweb.and_correspondents') }}</span>
                            </h1>
                            <h4 class="section-title" style="margin-top: 1em;">
                            {{ trans('layoutweb.alliances_text') }}
                            </h4>
                        </header>
                        <div class="row-services row-base row ">
                            <div class="col-lg-6 col-base  col-service col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                                <h3>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M9.9651 2.12378C11.0562 0.923581 12.9437 0.923583 14.0348 2.12379L21.3319 10.1506C22.2855 11.1995 22.2855 12.8014 21.3319 13.8502L14.0348 21.877C12.9438 23.0772 11.0562 23.0772 9.9651 21.877L2.66806 13.8502C1.71451 12.8014 1.71449 11.1995 2.66804 10.1506L9.9651 2.12378Z" fill="#ff9500"></path>
                                    </svg>
                                    Altamira, Tamaulipas
                                </h3>
                            </div>
                            <div class="col-lg-6 col-base col-service col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                                <h3>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M9.9651 2.12378C11.0562 0.923581 12.9437 0.923583 14.0348 2.12379L21.3319 10.1506C22.2855 11.1995 22.2855 12.8014 21.3319 13.8502L14.0348 21.877C12.9438 23.0772 11.0562 23.0772 9.9651 21.877L2.66806 13.8502C1.71451 12.8014 1.71449 11.1995 2.66804 10.1506L9.9651 2.12378Z" fill="#ff9500"></path>
                                    </svg>
                                    Lázaro Cárdenas, Michoacán
                                </h3>
                            </div>
                            <div class="col-lg-6 col-base col-service col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                                <h3>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M9.9651 2.12378C11.0562 0.923581 12.9437 0.923583 14.0348 2.12379L21.3319 10.1506C22.2855 11.1995 22.2855 12.8014 21.3319 13.8502L14.0348 21.877C12.9438 23.0772 11.0562 23.0772 9.9651 21.877L2.66806 13.8502C1.71451 12.8014 1.71449 11.1995 2.66804 10.1506L9.9651 2.12378Z" fill="#ff9500"></path>
                                    </svg>
                                    Monterrey, Nuevo León
                                </h3>
                            </div>
                            <div class="col-lg-6 col-base col-service col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                                <h3>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M9.9651 2.12378C11.0562 0.923581 12.9437 0.923583 14.0348 2.12379L21.3319 10.1506C22.2855 11.1995 22.2855 12.8014 21.3319 13.8502L14.0348 21.877C12.9438 23.0772 11.0562 23.0772 9.9651 21.877L2.66806 13.8502C1.71451 12.8014 1.71449 11.1995 2.66804 10.1506L9.9651 2.12378Z" fill="#ff9500"></path>
                                    </svg>
                                    Manzanillo, Colima
                                </h3>
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
