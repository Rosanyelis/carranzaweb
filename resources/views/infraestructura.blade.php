@extends('layouts.app')

@section('content')
<div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-infraestructura" data-stellar-background-ratio="0.1"> <!--BG Pic en img/bridge-empresa.jpg-->
            <div class="container">
                <header class="main-header">
                    <h1 class="section-title" style="color:#fff">
                        {{ trans('layoutweb.insfrastructure') }}
                        <span class="text-primary">{{ trans('layoutweb.and_facilities') }}</span></h1>
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
            <section class="projects section">
                <div class="container">
                    <p class="header-text text-center" style="color:#000">
                        {{ trans('layoutweb.insfrastructure_text') }}
                        <br/>
                        {{ trans('layoutweb.insfrastructure_text2') }}
                        <ul class="header-text text-center">
                            <strong>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    {{ trans('layoutweb.item_1') }}
                                </li>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    {{ trans('layoutweb.item_2') }}
                                </li>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    {{ trans('layoutweb.item_3') }}
                                </li>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    {{ trans('layoutweb.item_4') }}
                                </li>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    {{ trans('layoutweb.item_5') }}
                                </li>
                            </strong>
                        </ul>
                    </p>
                </div>
            </section>
            <!-- OFICINAS -->
            <section class="project-details" id="residential">
                <header class="section-header" style="padding-bottom: 3em !important;">
                    <h1 class="section-title wow fadeInRight">
                        <span class="text-primary">{{ trans('layoutweb.locations') }}</span>
                    </h1>
                    <strong class="fade-title-left">{{ trans('layoutweb.locations') }}</strong>
                </header>
                <div class="container">

                <div class="section-content">

                    <div class="row-services row-base row">

                        <div class="col-base col-service col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <svg width="46px" height="46px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9f23"><path d="M6 20H3V6L12 4L21 6V20H18M6 20H18M6 20V16M18 20V16M6 12V8L18 8V12M6 12L18 12M6 12V16M18 12V16M6 16H18" stroke="#ff9f23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <svg width="46px" height="46px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9f23"><path d="M20 10C20 14.4183 12 22 12 22C12 22 4 14.4183 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10Z" stroke="#ff9f23" stroke-width="1.5"></path><path d="M12 11C12.5523 11 13 10.5523 13 10C13 9.44772 12.5523 9 12 9C11.4477 9 11 9.44772 11 10C11 10.5523 11.4477 11 12 11Z" fill="#ff9f23" stroke="#ff9f23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <h4>NUEVO LAREDO, TAMAULIPAS</h4>
                                <p>{{ trans('layoutweb.location_laredo') }}</p>
                                <ul>
                                    <li><strong>{{ trans('layoutweb.addresses') }}:</strong> Donato Guerra 809, Sector Centro, 88000</li>
                                    <li><strong>{{ trans('layoutweb.phones') }}:</strong> (867) 150-4070 </li>
                                    <li><strong>{{ trans('layoutweb.mails') }}:</strong> sistemas@carranza.net</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-base col-service col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <svg width="46px" height="46px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9f23"><path d="M6 20H3V6L12 4L21 6V20H18M6 20H18M6 20V16M18 20V16M6 12V8L18 8V12M6 12L18 12M6 12V16M18 12V16M6 16H18" stroke="#ff9f23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <svg width="46px" height="46px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9f23"><path d="M20 10C20 14.4183 12 22 12 22C12 22 4 14.4183 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10Z" stroke="#ff9f23" stroke-width="1.5"></path><path d="M12 11C12.5523 11 13 10.5523 13 10C13 9.44772 12.5523 9 12 9C11.4477 9 11 9.44772 11 10C11 10.5523 11.4477 11 12 11Z" fill="#ff9f23" stroke="#ff9f23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <h4>LAREDO, TEXAS</h4>
                                <p>{{ trans('layoutweb.location_texas') }}</p>
                                <ul>
                                    <li><strong>{{ trans('layoutweb.addresses') }}:</strong> 835 Hallmark Dr, Laredo, TX 78045,USA</li>
                                    <li><strong>{{ trans('layoutweb.phones') }}:</strong> (956) 724-4531 </li>
                                    <li><strong>{{ trans('layoutweb.mails') }}:</strong> sistemas@carranza.net</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="section-content">
                    <div class="row-services row-base row">

                        <div class="col-base col-service col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <svg width="46px" height="46px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9f23"><path d="M6 20H3V6L12 4L21 6V20H18M6 20H18M6 20V16M18 20V16M6 12V8L18 8V12M6 12L18 12M6 12V16M18 12V16M6 16H18" stroke="#ff9f23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <svg width="46px" height="46px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9f23"><path d="M20 10C20 14.4183 12 22 12 22C12 22 4 14.4183 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10Z" stroke="#ff9f23" stroke-width="1.5"></path><path d="M12 11C12.5523 11 13 10.5523 13 10C13 9.44772 12.5523 9 12 9C11.4477 9 11 9.44772 11 10C11 10.5523 11.4477 11 12 11Z" fill="#ff9f23" stroke="#ff9f23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <h4>LEON, GUANAJUATO</h4>
                                <p>{{ trans('layoutweb.location_guanajuato') }}</p>
                                <ul>
                                    <li><strong>{{ trans('layoutweb.addresses') }}:</strong> Valle del Mezquital 106-6, Len, Gto. C.P. 37150</li>
                                    <li><strong>{{ trans('layoutweb.phones') }}:</strong> (477) 765-1850</li>
                                    <li><strong>{{ trans('layoutweb.mails') }}:</strong> guanajato@carranza.net</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-base col-service col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <svg width="46px" height="46px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9f23"><path d="M6 20H3V6L12 4L21 6V20H18M6 20H18M6 20V16M18 20V16M6 12V8L18 8V12M6 12L18 12M6 12V16M18 12V16M6 16H18" stroke="#ff9f23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <svg width="46px" height="46px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9f23"><path d="M20 10C20 14.4183 12 22 12 22C12 22 4 14.4183 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10Z" stroke="#ff9f23" stroke-width="1.5"></path><path d="M12 11C12.5523 11 13 10.5523 13 10C13 9.44772 12.5523 9 12 9C11.4477 9 11 9.44772 11 10C11 10.5523 11.4477 11 12 11Z" fill="#ff9f23" stroke="#ff9f23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <h4>MONTERREY, NUEVO LEON</h4>
                                <p>{{ trans('layoutweb.location_monterrey') }}</p>
                                <ul>
                                    <li><strong>{{ trans('layoutweb.phones') }}:</strong> 867 132-8231</li>
                                    <li><strong>{{ trans('layoutweb.mails') }}:</strong> estela@carranza.net</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>


                </div>
            </section>



            <!-- Objects -->

            <section id="objects" class="objects section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title"><span class="text-primary">{{ trans('layoutweb.we_are_in') }}</span></h2>
                    </header>
                    <div class="section-content">
                        <div class="objects text-center">
                            <iframe
                                src="https://www.google.com/maps/d/embed?mid=1cJlmyFuSCCQV-4JxdF6VmKCQGtPluiQ&ehbc=2E312F&noprof=1"
                                width="980" height="600"></iframe>
                        </div>
                    </div>
                </div>
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
