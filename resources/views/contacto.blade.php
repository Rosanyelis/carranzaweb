@extends('layouts.app')
@section('content')
<div class="layout">

    <!-- Home -->

    <main class="main main-inner main-contacts bg-contacts" data-stellar-background-ratio="0.6">
        <div class="container">
            <header class="main-header">
                <h1>Contactanos</h1>
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
        <section class="clients section">
            <div class="container">
                <header class="section-header">
                    <h2 class="section-title mb-2">
                        <span class="text-primary">TRANSFORMANDO</span> EL COMERCIO,
                        FACILITANDO TU NEGOCIO</h2>
                    <strong class="fade-title-left">IMPORT</strong>
                </header>
            </div>
        </section>

        <!-- Contacts -->

        <section class="contacts section">
            <div class="container">
                <div class="section-content" style="margin: 0;">
                    <div class="row-base row">
                        <div class="col-address col-base col-md-4">
                            Llamanos:   <br>Nuevo Laredo: +52 (867) 150-4070
                                        <br>Laredo, Texas: +1 (956) 724-4531
                                        <br>Email: sistemas@carranza.net
                        </div>
                        <div class="col-base  col-md-8">
                            <form class="js-ajax-form">
                                <div class="row-field row">
                                    <div class="col-field col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" required
                                                placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-field col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control" >
                                                <option value="">Tipo de Operación</option>
                                                <option value="Importación">Importación</option>
                                                <option value="Exportación">Exportación</option>
                                                <option value="Importación y Exportación">Importación y Exportación</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-field col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message"
                                                placeholder="Mensaje"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-message col-field col-sm-12">
                                        <div class="form-group">
                                            <div class="success-message"><i class="fa fa-check text-primary"></i> Thank
                                                you!. Your message is successfully sent...</div>
                                            <div class="error-message">We're sorry, but something went wrong</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit text-right">
                                    <button class="btn btn-shadow-2 wow swing">Enviar
                                        <i class="icon-next"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.footer')

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
