@extends('layouts.app')

@section('content')
<div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-infraestructura" data-stellar-background-ratio="0.1"> <!--BG Pic en img/bridge-empresa.jpg-->
            <div class="container">
                <header class="main-header">
                    <h1 class="section-title" style="color:#fff">INFRAESTRUCTURA e <span class="text-primary">INSTALACIONES</span></h1>
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
                        Contamos con varias oficinas a lo largo del territorio americano y mexicano, debidamente
                        acondicionadas para atender los aspectos operativos y administrativos del Comercio Exterior.
                        <br/>
                        Con un gran almacén de 150,000 pies cuadrados, así como un patio de 7 acres.
                        Todo ello en unas instalaciones de primer nivel con sistemas de seguridad inteligentes
                        y los elementos necesarios para garantizar la integridad y protección de su mercancía.
                        <ul class="header-text text-center">
                            <strong>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Operamos hasta 24/7.
                                </li>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Sistema contra incendios de última generación.
                                </li>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Vigilancia 24 horas a cargo de personal altamente capacitado.
                                </li>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Puertas para descarga de plataforma que facilitan el acceso y la salida de mercancías.
                                </li>
                                <li class="text-primary">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" stroke-width="3" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                        <path d="M3 12L21 12M21 12L12.5 3.5M21 12L12.5 20.5" stroke="#ff9500" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Montacargas con diversas capacidades.
                                </li>
                            </strong>
                        </ul>
                    </p>
                </div>
            </section>
            <!-- OFICINAS -->
            <section class="project-details" id="residential">
                <div class="container">

                    <div class="project-details-item heightItem">
                        <div class="row">
                            <div class="project-details-info wow fadeInLeft">
                                <h3 class="project-details-title">
                                    NUEVO LAREDO, TAMAULIPAS
                                </h3>
                                <ul>
                                      <li>Direccion: Donato Guerra 809, Sector Centro, 88000</li>
                                      <li>Tel: (867) 150-4070 </li>
                                      <li>Email: sistemas@carranza.net</li>
                                </ul>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="Infraestructura Nuevo Laredo" class="img-responsive" src="{{ asset('img/nuevo-laredo.jpg') }}">
                            </div>
                        </div>
                    </div>

                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    LAREDO, TEXAS
                                </h3>
                                <ul>
                                      <li>Direccion: 835 Hallmark Dr, Laredo, TX 78045,USA</li>
                                      <li>Tel: (956) 724-4531 </li>
                                      <li>Email: sistemas@carranza.net</li>
                                </ul>
                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="infraestructura Laredo" class="img-responsive" src="{{ asset('img/infraestructura-laredo.jpg') }}">
                            </div>
                        </div>
                    </div>

                    <div class="project-details-item heightItem">
                        <div class="row">
                            <div class="project-details-info wow fadeInLeft">
                                <h3 class="project-details-title">
                                    LEON, GUANAJUATO
                                </h3>
                                 <ul>
                                      <li>Direccion: Valle del Mezquital 106-6, Len, Gto. C.P. 37150</li>
                                      <li>Tel: (477) 765-1850</li>
                                      <li>Email: guanajato@carranza.net</li>
                                 </ul>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="infraestructura Leon" class="img-responsive" src="{{ asset('img/infraestructura-leon.jpg') }}">
                            </div>
                        </div>
                    </div>

                     <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <h3 class="project-details-title">
                                    MONTERREY, NUEVO LEON
                                </h3>
                                <ul>
                                        <li>Tel: 867 132-8231</li>
                                        <li>Email: estela@carranza.net</li>
                                    </ul>

                            </div>
                            <div class="project-details-img col-md-8">
                                <img alt="Infraestructura Monterrey" class="img-responsive" src="{{ asset('img/infraestructura-monterrey.jpg') }}">
                            </div>
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
