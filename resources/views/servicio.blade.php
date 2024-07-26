@extends('layouts.app')
@section('content')
<div class="layout">
    <main class="main main-inner bg-servicios" data-stellar-background-ratio="0.1">
        <!-- SERVICIOS -->
        <div class="container">
            <header class="main-header">
                <h1 class="section-title " style="color:#fff; font-size: 3em">DISFRUTA DE NUESTROS SERVICIOS<br>
                    <span class="text-primary">ENLAZANDO SU CADENA DE SUMINISTROS</span>
                </h1>
            </header>
        </div>

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
        <section id="about" class="about section">
            <div class="container">
                <div class="section-content">
                    <div class="row-base row">
                        <div class="col-base col-sm-6 col-md-4">
                            <h3 class="col-about-title">LISTADO DE SERVICIOS
                                <!-- <span class="text-primary">.</span> -->
                            </h3>
                            <div class="col-about-info">
                                <p>Con el firme compromiso de ser su mejor opción para el manejo
                                    de sus operaciones de comercio exterior ponemos a su disposición
                                    la más amplia gama de servicios.
                                </p>
                            </div>
                        </div>
                        <div class="col-base col-about-spec col-sm-6 col-md-4">
                            <h3 class="col-about-title">Nuestra<br> Especializacion
                                <span class="text-primary">:</span>
                            </h3>
                            <div class="service-item">
                                <svg width="40px" height="40px" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                    <path
                                        d="M7 19C8.10457 19 9 18.1046 9 17C9 15.8954 8.10457 15 7 15C5.89543 15 5 15.8954 5 17C5 18.1046 5.89543 19 7 19Z"
                                        stroke="#ff9500" stroke-width="1.5" stroke-miterlimit="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M17 19C18.1046 19 19 18.1046 19 17C19 15.8954 18.1046 15 17 15C15.8954 15 15 15.8954 15 17C15 18.1046 15.8954 19 17 19Z"
                                        stroke="#ff9500" stroke-width="1.5" stroke-miterlimit="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M14 17V6.6C14 6.26863 13.7314 6 13.4 6H2.6C2.26863 6 2 6.26863 2 6.6V16.4C2 16.7314 2.26863 17 2.6 17H4.65"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M14 17H9.05005" stroke="#ff9500" stroke-width="1.5" stroke-linecap="round">
                                    </path>
                                    <path
                                        d="M14 9H19.6101C19.8472 9 20.0621 9.13964 20.1584 9.35632L21.9483 13.3836C21.9824 13.4604 22 13.5434 22 13.6273V16.4C22 16.7314 21.7314 17 21.4 17H19.5"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M14 17H15" stroke="#ff9500" stroke-width="1.5" stroke-linecap="round">
                                    </path>
                                </svg>
                                <svg width="40px" height="40px" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                    <path
                                        d="M20 5.99999L20 18C20 19.1046 19.1046 20 18 20H6C4.89543 20 4 19.1046 4 18V6C4 4.89543 4.89543 4 6 4H18C19.1045 4 19.9999 4.89543 20 5.99999Z"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M12 9V4" stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <h4>DISTRIBUCIÓN Y ALMACENAMIENTO</h4>
                            </div>
                            <div class="service-item">
                                <svg width="40px" height="40px" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                    <path
                                        d="M9.99998 15L9.99999 19C10 20.1046 9.10457 21 7.99999 21H4C2.89543 21 2 20.1046 2 19V15C2 13.8954 2.89543 13 4 13H7.99998C9.10455 13 9.99998 13.8954 9.99998 15Z"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M16 4.99999L16 8.99999C16 10.1046 15.1046 11 14 11H10C8.89543 11 8 10.1046 8 9V5C8 3.89543 8.89543 3 10 3H14C15.1045 3 16 3.89543 16 4.99999Z"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M22 15L22 19C22 20.1046 21.1046 21 20 21H16C14.8954 21 14 20.1046 14 19V15C14 13.8954 14.8954 13 16 13H20C21.1045 13 22 13.8954 22 15Z"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M6 16V13" stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M12 6V3" stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M18 16V13" stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <h4>CONTROL DE INVENTARIOS</h4>
                            </div>
                            <div class="service-item">
                                <svg width="40px" height="40px" viewBox="0 0 24 24" stroke-width="1.5" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                    <path
                                        d="M2.90602 17.505L5.33709 3.71766C5.5289 2.62987 6.56621 1.90354 7.654 2.09534L19.4717 4.17912C20.5595 4.37093 21.2858 5.40824 21.094 6.49603L18.6629 20.2833C18.4711 21.3711 17.4338 22.0975 16.346 21.9057L4.52834 19.8219C3.44055 19.6301 2.71421 18.5928 2.90602 17.505Z"
                                        stroke="#ff9500" stroke-width="1.5"></path>
                                    <path d="M8.92902 6.38184L16.8075 7.77102" stroke="#ff9500" stroke-width="1.5"
                                        stroke-linecap="round"></path>
                                    <path d="M8.23444 10.3213L16.1129 11.7105" stroke="#ff9500" stroke-width="1.5"
                                        stroke-linecap="round"></path>
                                    <path d="M7.53986 14.2607L12.4639 15.129" stroke="#ff9500" stroke-width="1.5"
                                        stroke-linecap="round"></path>
                                </svg>
                                <h4>REPORTES EN LÍNEA</h4>
                            </div>
                            <div class="service-item">
                                <svg width="40px" height="40px" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                    <path
                                        d="M18.1336 11C18.7155 16.3755 21 18 21 18H3C3 18 6 15.8667 6 8.4C6 6.70261 6.63214 5.07475 7.75736 3.87452C8.88258 2.67428 10.4087 2 12 2C12.3373 2 12.6717 2.0303 13 2.08949"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M19 8C20.6569 8 22 6.65685 22 5C22 3.34315 20.6569 2 19 2C17.3431 2 16 3.34315 16 5C16 6.65685 17.3431 8 19 8Z"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <h4>NOTIFICACIONES AUTOMÁTICAS</h4>
                            </div>
                            <div class="service-item">
                                <svg width="40px" height="40px" viewBox="0 0 24 24" stroke-width="1.5" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" color="#ff9500">
                                    <path
                                        d="M12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12Z"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M5 20V19C5 15.134 8.13401 12 12 12C13.0736 12 14.0907 12.2417 15 12.6736"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M16.6349 16.4151L17.674 14.2121C17.8073 13.9293 18.1927 13.9293 18.326 14.2121L19.3651 16.4151L21.6886 16.7706C21.9867 16.8162 22.1055 17.1997 21.8897 17.4198L20.2087 19.1334L20.6054 21.5543C20.6564 21.8652 20.3446 22.1022 20.0778 21.9554L18 20.8118L15.9222 21.9554C15.6554 22.1022 15.3436 21.8652 15.3946 21.5543L15.7913 19.1334L14.1103 17.4198C13.8945 17.1997 14.0133 16.8162 14.3114 16.7706L16.6349 16.4151Z"
                                        stroke="#ff9500" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <h4>PERSONAL CALIFICADO</h4>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-base col-about-img col-sm-6 col-md-4">
                            <img alt="Servicio 1" class="img-responsive"
                                src="{{ asset('img/distribucion.jpg') }}">
                            </br>
                            <img alt="Servicio 2" class="img-responsive"
                                src="{{ asset('img/almacen.jpg') }}">
                            </br>

                        </div>
                    </div>
                </div>
        </section>

        <!-- Experience -->

        <section class="experience section">
            <div class="container">
                <div class="text-parallax" data-stellar-background-ratio="0.85"
                    style="background: #111939">
                    <div class="text-parallax-content">75</div>
                </div>
                <h4 class="experience-info wow fadeInRight">
                    <span class="text-primary">MÁS DE 71 AÑOS DE EXPERIENCIA</span>
                    <br>Desde su fundación en 1947 por el Sr. Juan B. Carranza Garza ha operado
                    como agencia aduanal ininterrumpidamente y ahora con la patente nacional número 3988.</h4>
            </div>
        </section>

        <!-- Residential Detail -->
        <section class="project-details" id="residential">
            <div class="container">
                <div class="project-details-item">
                    <div class="row">
                        <div class="project-details-info wow fadeInLeft">
                            <h3 class="project-details-title">
                                DISTRIBUCIÓN <br>Y ALMACENAMIENTO
                            </h3>
                            <p class="project-details-descr">Optima seguridad y control de mercancías haciendo de
                                nuestra bodega la mejor opción para su almacenamiento y distribución.</p>
                        </div>
                        <div class="project-details-img col-md-8 col-md-offset-4">
                            <img alt="Servicio y Distribución" class="img-responsive"
                                src="{{ asset('img/services/servicio-distribucion.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-details-item">
                <div class="row">
                    <div class="project-details-info wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <h3 class="project-details-title " style="margin-top: 1.5em;">
                            CONTROL DE INVENTARIOS
                        </h3>
                        <p class="project-details-descr">Control de inventarios para una inmejorable planeación que le
                            beneficie en toma de decisiones de sus embarques.</p>
                    </div>
                    <div class="project-details-img col-md-8">
                        <img alt="Control de Inventarios" class="img-responsive"
                            src="{{ asset('img/inventario.png') }}">
                    </div>
                </div>
            </div>
        </section>

        <!-- Comercial Detail -->
        <section class="project-details" id="comercial">
            <div class="container">
                <div class="project-details-item" style="padding-bottom: 3em !important;">
                    <div class="row">
                        <div class="project-details-info wow fadeInLeft">
                            <h3 class="project-details-title">
                                REPORTES EN LINEA
                            </h3>
                            <p class="project-details-descr">Información actualizada e histórica en la web: de su
                                mercancía, expediente electrónico con los requisitos del SAT, reportes acordes a sus
                                necesidades.</p>
                        </div>
                        <div class="project-details-img col-md-8 col-md-offset-4">
                            <img alt="Reportes en Linea" class="img-responsive"
                                src="{{ asset('img/oficina2.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-details-item">
                <div class="row">
                    <div class="project-details-info wow fadeInRight"
                        style="visibility: visible; animation-name: fadeInRight;">
                        <h3 class="project-details-title" style="margin-top: 1.2em;">
                            NOTIFICACIONES AUTOMATICAS
                        </h3>
                        <p class="project-details-descr">Información actualizada e histórica en la web: de su mercancía,
                            expediente electrónico con los requisitos del SAT, reportes acordes a sus necesidades.</p>
                    </div>
                    <div class="project-details-img col-md-8">
                        <img alt="Notificaciones Automaticas" class="img-responsive"
                            src="{{ asset('img/services/servicio-notificacion.jpg') }}">
                    </div>
                </div>
            </div>
        </section>

        <!-- Marine Detail -->
        <section class="project-details" id="marine">
            <div class="container">
                <div class="project-details-item">
                    <div class="row">
                        <div class="project-details-info wow fadeInLeft">
                            <h3 class="project-details-title">PERSONAL <br> CALIFICADO</h3>
                            <p class="project-details-descr">Personal competitivo y capacitado en la búsqueda permanente
                                de la mejora continua con una cultura de servicio enfocado a las satisfacciones del
                                cliente.</p>
                        </div>
                        <div class="project-details-img col-md-8 col-md-offset-4">
                            <img alt="Servicio Personal" class="img-responsive"
                                src="{{ asset('img/oficina1.jpg') }}">
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
