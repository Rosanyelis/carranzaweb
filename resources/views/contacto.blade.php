@extends('layouts.app')
@section('content')
<div class="layout">

    <!-- Home -->

    <main class="main main-inner main-contacts bg-contacts" data-stellar-background-ratio="0.6">
        <div class="container">
            <header class="main-header">
                <h1>{{ trans('layoutweb.contact_us') }}</h1>
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
                        <span class="text-primary">{{ trans('layoutweb.contact_title1') }}</span> {{ trans('layoutweb.contact_title2') }}</h2>
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
                            <br>Nuevo Laredo: +52 (867) 150-4070
                            <br>Laredo, Texas: +1 (956) 724-4531
                            <br>Email: sistemas@carranza.net
                        </div>
                        <div class="col-base  col-md-8">
                            <form id="contact-form" >
                                <div class="row-field row">
                                    <div class="col-field col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="{{ trans('layoutweb.form_name') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" required
                                                placeholder="{{ trans('layoutweb.form_email') }} *">
                                        </div>
                                    </div>
                                    <div class="col-field col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone" placeholder="{{ trans('layoutweb.form_phone') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company"
                                                placeholder="{{ trans('layoutweb.form_company') }}">
                                        </div>
                                    </div>
                                    <div class="col-field col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <select name="subject" id="subject" class="form-control" >
                                                <option value="">{{ trans('layoutweb.form_type') }}</option>
                                                <option value="Importación">{{ trans('layoutweb.form_type2') }}</option>
                                                <option value="Exportación">{{ trans('layoutweb.form_type3') }}</option>
                                                <option value="Importación y Exportación">{{ trans('layoutweb.form_type4') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-field col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message"
                                                placeholder="{{ trans('layoutweb.form_message') }}"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-message col-field col-sm-12">
                                        <div class="form-group">
                                            <div class="success-message"><i class="fa fa-check text-primary"></i>
                                                {{ trans('layoutweb.text_success') }}
                                            </div>
                                            <div class="error-message">{{ trans('layoutweb.text_error') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit text-right">
                                    <button id="send" type="submit" class="btn btn-shadow-2 wow swing">
                                        {{ trans('layoutweb.form_send') }}
                                        <i class="icon-next"></i></button>
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
