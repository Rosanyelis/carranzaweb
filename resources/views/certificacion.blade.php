@extends('layouts.app')

@section('content')
<div class="layout">

        <!-- Home -->
        <main class="main main-inner bg-certificaciones" data-stellar-background-ratio="0.1"> <!--BG Pic en img/bridge-empresa.jpg-->
            <div class="container">
                <header class="main-header">
                    <h1 class="section-title"><span class="text-primary">CERTIFICACIONES</span></h1>
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
                        Acreditados dentro del esquema de certificación de empresas en la modalidad de socio comercial
                        establecidos en el <span class="text-primary">articulo 100-A</span>
                        de la ley Aduanera; y en las <span class="text-primary">reglas 7.1.1, 7.1.4</span>
                        primer párrafo, <span class="text-primary">fracción I y 7.1.5</span>; primer párrafo,
                        fracción II de las Reglas Generales de Comercio Exterior para 2017 y sus modificaciones.
                        </br></br>
                        Algunos de los beneficios que obtenemos con esta certificación son los siguientes:
                        <span class="text-primary">Mayor flexibilidad en el Reconocimiento Aduanero de Mercancías</span>,
                        pudiendo realizar el despacho aduanero de mercancías para su importación y exportación, utilizando
                        <span class="text-primary">carriles exclusivos “Express”</span> establecidos por la AGA,
                        entre muchos otros.
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
