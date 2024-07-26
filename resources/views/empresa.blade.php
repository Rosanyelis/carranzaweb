@extends('layouts.app')

@section('content')

<div class="layout">

<!-- Home -->
    <main class="main main-inner bg-residential" data-stellar-background-ratio="0.1"> <!--BG Pic en img/bridge-empresa.jpg-->
        <div class="container">
            <header class="main-header">
                <h1 class="section-title " style="color:#fff">NUESTRA  <span class="text-primary">EMPRESA</span></h1>
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
                    <strong>Agencia Aduanal Juan B. Carranza: Una trayectoria de servicio y excelencia</strong>
                    <br>
                    Fundada en 1945 por <strong><span class="text-primary">Don Juan B. Carranza Garza</span></strong>, la Agencia Aduanal Juan B. Carranza S.C.
                    ha navegado por el mundo del comercio exterior con un timón firme: el compromiso con el
                    servicio, la ética y el profesionalismo.
                    <br>
                    Desde sus inicios en Nuevo Laredo, con la patente nacional 707, la agencia ha pasado por dos
                    generaciones de liderazgo: la del <strong><span class="text-primary">Sr. Juan B. Carranza Elizondo (patente 3142)</span></strong> y la
                    del <strong><span class="text-primary">Lic. Juan B. Carranza González (patente nacional número 3988)</span></strong>.
                    <br>
                    Actualmente, la agencia opera con autorización para actuar en <strong><span class="text-primary">Nuevo Laredo, Tamaulipas,
                    Colombia, Nuevo León y Cd. Reynosa, Tamaulipas</span></strong>, brindando soluciones integrales a sus
                    clientes en cada una de sus operaciones.
                    <br>
                    La clave del éxito de la <strong><span class="text-primary">Agencia Aduanal Juan B. Carranza S.C.</span></strong>
                    radica en su enfoque centrado en el cliente, brindando un servicio personalizado
                    y de alta calidad que supera las expectativas.
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
                                MISION
                            </h3>
                            <p class="project-details-descr">Otorgar un servicio integral, optimo y eficaz, con una asesoría especializada que cubra todas las necesidades y expectativas relacionadas con la actividad del comercio exterior con el compromiso de mejora continua y constante comunicación.
                            </p>
                        </div>
                        <div class="project-details-img col-md-8 col-md-offset-4">
                            <img alt="Misión" class="img-responsive" src="{{ asset('img/oficina1.jpg ') }}">
                        </div>
                    </div>
                </div>

                <div class="project-details-item">
                    <div class="row">
                        <div class="project-details-info wow fadeInRight"
                            style="visibility: visible; animation-name: fadeInRight;">
                            <h3 class="project-details-title">
                                POLITICA DE CALIDAD
                            </h3>
                            <p class="project-details-descr">Proporcionar servicios eficientes e integrales en las actividades de comercio exterior, apoyados en nuestra amplia experiencia y calidad certificada, para satisfacer las necesidades de nuestros clientes tanto internos, así como externos.</p>
                        </div>
                        <div class="project-details-img col-md-8">
                            <img alt="Política de Calidad" class="img-responsive" src="{{ asset('img/empresa-politica-calidad.jpg') }}">
                        </div>
                    </div>
                </div>

                <div class="project-details-item heightItem">
                    <div class="row">
                        <div class="project-details-info wow fadeInLeft">
                            <h3 class="project-details-title">
                                POLITICA DE SEGURIDAD
                            </h3>
                            <p class="project-details-descr">Nuestro equipo está comprometido con el cumplimiento estricto de los lineamientos de seguridad para prevenir actividades ilícitas como el narcotráfico o el terrorismo. Protegemos el flujo del comercio nacional e internacional, garantizando operaciones seguras y confiables.
                            </p>
                        </div>
                        <div class="project-details-img col-md-8 col-md-offset-4">
                            <img alt="Politica de Seguridad" class="img-responsive" src="{{ asset('img/oficina3.png') }}">
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
