@extends('layouts.app')

@section('content')
<div class="layout">
    <main class="main">

        <div class="arrow-left"></div>
        <div class="arrow-right"></div>

        <!-- Start revolution slider -->

        <div class="rev_slider_wrapper">
            <div id="rev_slider" class="rev_slider fullscreenbanner" data-version="5.0">
                <ul>

                    <!-- Slide 1 -->

                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                        data-fsmasterspeed="1000">

                        <!-- Main image-->

                        <img src="{{ asset('img/slider/slider1.png') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg">

                        <!-- Layer 1 -->

                        <div class="slide-title tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                            data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                            data-lineheight="['80','75', '65']" data-width="['1100','700','550']" data-height="none"
                            data-whitespace="normal" data-transform_idle="o:1;"
                            data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                            data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                            data-elementdelay="0.05">
                            {{ trans('layoutweb.slider_title_1') }}

                        </div>

                        <!-- Layer 2 -->

                        <div class="slide-subtitle tp-caption tp-resizeme"
                            data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['95','130']"
                            data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:1000;s:1000;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none">
                            {{ trans('layoutweb.slider_subtitle_1') }} <br>
                            {{ trans('layoutweb.slider_subtitle_1_2') }} <br>
                            {{ trans('layoutweb.slider_subtitle_1_3') }} <br>
                            {{ trans('layoutweb.slider_subtitle_1_4') }}
                        </div>

                        <!-- Layer 3 -->
                    </li>

                    <!-- Slide 2 -->

                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000">

                        <!-- Main image -->

                        <img src="{{ asset('img/slider/slider2.png') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg">

                        <!-- Layer 1 -->

                        <div class="slide-title tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                            data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                            data-lineheight="['80','75', '65']" data-width="['1100','700','550']" data-height="none"
                            data-whitespace="normal" data-transform_idle="o:1;"
                            data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                            data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                            data-elementdelay="0.05">
                            {{ trans('layoutweb.slider_title_2') }}
                        </div>

                        <!-- Layer 2 -->

                        <div class="slide-subtitle tp-caption tp-resizeme"
                            data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['95','130']"
                            data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:1000;s:1000;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none">
                            {{ trans('layoutweb.slider_subtitle_2') }} <br>
                            {{ trans('layoutweb.slider_subtitle_2_1') }} <br>
                            {{ trans('layoutweb.slider_subtitle_2_2') }} <br>
                            {{ trans('layoutweb.slider_subtitle_2_3') }}
                        </div>

                        <!-- Layer 3 -->

                    </li>

                    <!-- Slide 3 -->

                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000">

                        <!-- Main image-->

                        <img src="{{ asset('img/slider/slider3.png') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg">

                        <!-- Layer 1 -->

                        <div class="slide-title tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                            data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                            data-lineheight="['80','75', '65']" data-width="['1100','700','550']" data-height="none"
                            data-whitespace="normal" data-transform_idle="o:1;"
                            data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                            data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                            data-elementdelay="0.05">{{ trans('layoutweb.slider_title_3') }}
                        </div>


                        <!-- Layer 2 -->

                        <div class="slide-subtitle tp-caption tp-resizeme"
                            data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['95','130']"
                            data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:1000;s:1000;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none">
                            {{ trans('layoutweb.slider_subtitle_3') }}</br>
                            {{ trans('layoutweb.slider_subtitle_3_1') }}</br>
                            {{ trans('layoutweb.slider_subtitle_3_2') }}
                        </div>

                        <!-- Layer 3 -->
                    </li>

                    <!-- Slide 4 -->
                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000">

                        <!-- Main image-->

                        <img src="{{ asset('img/slider/') }}/{{ trans('layoutweb.slider4') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg">

                        <!-- Layer 3 -->

                    </li>
                </ul>
            </div>
        </div>
    </main>

    <div class="content">

        <section id="about"
            style="background-image: url({{ asset('img/bannner.png') }}) !important;
            background-size: cover !important;
            padding-top: 1.5em !important;
            padding-bottom: 1.2em !important;">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h2 class="section-title" style="color: white !important;">
                        {{ trans('layoutweb.our_company') }}
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-play" data-toggle="modal" data-target="#myModal">
                            <h4 class="section-title" style="color: white !important;">
                                <svg width="18" height="18"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9l0 176c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
                                <span class="text-primary mt-0" style="color: black !important;">Play video</span>
                            </h4>
                        </button>
                    </div>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close"  aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <video id="myVideo" src="{{asset('img/')}}/{{ trans('layoutweb.video') }}" controls loop
                                width="100%" class="my-0"></video>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($popup)
                    @if (Session::get('language') == 'es')
                    <dialog id="myDialog" open class="slide-in-from-right" style="background: url({{ asset('storage/') }}/{{ $popup->imagen }}) !important;
                        background-size: cover !important; padding-top: 1.5em !important; padding-bottom: 1.2em !important; background-position: center center !important;   ">
                        <form method="dialog">
                        <button type="button" class="btnClose" aria-label="Close">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        </form>

                        <div class="row p-5">
                            <div class="col-md-12 text-center">
                                <h2 style="color: white !important;font-weight: 800 !important;">{{ $popup->titulo_espanol }}</h2>
                            </div>
                            <div class="col-md-12 text-center" style="padding-left: 3em !important;padding-right: 3em !important;">
                                <p style="color: #fff !important;">{!! $popup->cuerpo_espanol !!}</p>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                @if ($popup->link)
                                <a href="{{ $popup->link }}" target="_blank" class="btn btn-play" style="color: black !important;">{{ trans('layoutweb.see_more') }}</a>
                                @endif
                            </div>
                        </div>
                    </dialog>
                    @elseif(Session::get('language') == 'en')
                    <dialog id="myDialog" open class="slide-in-from-right" style="background: url({{ asset('storage/') }}/{{ $popup->imagen }}) !important;
                        background-size: cover !important; padding-top: 1.5em !important; padding-bottom: 1.2em !important; background-position: center center !important;   ">
                        <form method="dialog">
                        <button type="button" class="btnClose" aria-label="Close">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        </form>

                        <div class="row p-5">
                            <div class="col-md-12 text-center">
                                <h2 style="color: white !important;font-weight: 800 !important;">{{ $popup->titulo_ingles }}</h2>
                            </div>
                            <div class="col-md-12 text-center" style="padding-left: 3em !important;padding-right: 3em !important;">
                                <p style="color: #fff !important;">{!! $popup->cuerpo_ingles !!}</p>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                @if ($popup->link)
                                <a href="{{ $popup->link }}" target="_blank" class="btn btn-play" style="color: black !important;">{{ trans('layoutweb.see_more') }}</a>
                                @endif
                            </div>
                        </div>
                    </dialog>
                    @endif
                @endif

            </div>

        </section>

        <section id="about" class="about section" style="">
            <div class="container">
                <header class="section-header" style="padding-bottom: 3em !important;">
                    <h2 class="section-title wow fadeInRight">
                    {{ trans('layoutweb.our') }}<span class="text-primary"> {{ trans('layoutweb.certifications') }}</span>
                    </h2>
                    <strong class="fade-title-left">{{ trans('layoutwoueb.certificates') }}</strong>
                </header>
                <div class="row mt-5 ">
                    <div class="col-md-6">
                        <div class="about-img " style="float: right !important;" >
                            <img alt="{{ trans('layoutweb.ola_certification') }}" class="img-responsive"
                                src="{{ asset('img/OLA.png') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img alt="{{ trans('layoutweb.oea_certification') }}" class="img-responsive"
                                src="{{ asset('img/certificacion-oea.png') }}" width="90%">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about section parallax img-parallax "
            style="margin-bottom: 14rem !important;padding-top: 5em !important;padding-bottom: 5em !important;">
            <div class="container">
                <header class="section-header wow fadeInLeft">
                    <h2 class="section-title " style="color: white !important;">{{ trans('layoutweb.parallax_title') }}<br>
                        <span class="text-primary">{{ trans('layoutweb.parallax_subtitle') }}</span></h2>
                    <h3 class="section-title" style="margin-top: 1em;color: white !important;">{{ trans('layoutweb.parallax_subtitle2') }}</h3>
                </header>
                <div class="row" style="margin-top: 3em;">
                    <div class="col-sm-4 col-md-4 ">
                        <div class="col-about-number" style="color: white !important;" data-count="200">0</div>
                        <div class="col-about-separator"></div>
                        <h4 class="col-about-title" style="color: white !important;">{{ trans('layoutweb.satisfied_customers') }}</h4>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="col-about-number" style="color: white !important;" data-count="75">0</div>
                        <div class="col-about-separator"></div>
                        <h4 class="col-about-title" style="color: white !important;">{{ trans('layoutweb.years_experience') }}</h4>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="col-about-number" style="color: white !important;" data-count="365">0</div>
                        <div class="col-about-separator"></div>
                        <h4 class="col-about-title" style="color: white !important;">{{ trans('layoutweb.days_year') }}</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients  -->

        <section class="clients section" style="margin-bottom: 10rem !important;">
            <div class="container">
                <header class="section-header">
                    <h2 class="section-title">{{ trans('layoutweb.our2') }} <span class="text-primary">{{ trans('layoutweb.clients') }}</span></h2>
                    <strong class="fade-title-left">{{ trans('layoutweb.clients') }}</strong>
                </header>
                <div class="section-content">
                    <ul class="clients-list">
                        <li class="client">
                            <a href="#">
                                <img alt="driscolls" src="{{ asset('img/clients/driscolls.png') }}" width="171" >
                            </a>
                        </li>
                        <li class="client">
                            <a href="#">
                                <img alt="Frexport" src="{{ asset('img/clients/Frexport.jpg') }}" width="171">
                            </a>
                        </li>
                        <li class="client">
                            <a href="#">
                                <img alt="Munters" src="{{ asset('img/clients/Munters.png') }}" width="171">
                            </a>
                        </li>
                        <li class="client">
                            <a href="#">
                                <img alt="sumitomo" src="{{ asset('img/clients/sumitomo.png') }}" width="171">
                            </a>
                        </li>
                        <li class="client">
                            <a href="#">
                                <img alt="TraneTechnologieslogo" src="{{ asset('img/clients/TraneTechnologieslogo.png') }}" width="171">
                            </a>
                        </li>
                        <li class="client">
                            <a href="#">
                                <img alt="Sesajal" src="{{ asset('img/clients/Sesajal.png') }}" width="171">
                            </a>
                        </li>
                        <li class="client">
                            <a href="#">
                                <img alt="totis" src="{{ asset('img/clients/totis.png') }}" width="171" >
                            </a>
                        </li>
                        <li class="client">
                            <a href="#">
                                <img alt="chiquita" src="{{ asset('img/clients/chiquita.png') }}" width="171" >
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- About  -->
        <section id="about" class="about section parallax img-parallax2"
            style="padding-top: 5em !important;padding-bottom: 5em !important; margin-bottom: 0rem !important;">
            <div class="container">
                <header class="section-header wow fadeInLeft">
                    <h2 class="section-title" style="color: white !important;">{{ trans('layoutweb.our') }}
                        <span class="text-primary"> {{ trans('layoutweb.advantages') }}</span>
                    </h2>
                    <strong class="fade-title-right" style="color: white !important;">{{ trans('layoutweb.advantages') }}</strong>
                </header>
                <div class="row text-center" style="margin-top: 3em; color: white !important;">
                    <div class="col-sm-3 col-md-3 ">
                        <h4 class="section-title " style="color: white !important;">{{ trans('layoutweb.vanguard') }}</h4>
                        <div class="col-about-separator"></div>
                        <p>{{ trans('layoutweb.vanguard_subtitle') }}</p>
                    </div>
                    <div class="col-sm-3 col-md-3 ">
                        <h4 class="section-title " style="color: white !important;">{{ trans('layoutweb.efficiency') }}</h4>
                        <div class="col-about-separator"></div>
                        <p>{{ trans('layoutweb.efficiency_subtitle') }}</p>
                    </div>
                    <div class="col-sm-3 col-md-3 ">
                        <h4 class="section-title " style="color: white !important;">{{ trans('layoutweb.professionalism') }}</h4>
                        <div class="col-about-separator"></div>
                        <p>{{ trans('layoutweb.professionalism_subtitle') }}</p>
                    </div>
                    <div class="col-sm-3 col-md-3 ">
                        <h4 class="section-title " style="color: white !important;">{{ trans('layoutweb.attention') }} </h4>
                        <div class="col-about-separator"></div>
                        <p>{{ trans('layoutweb.attention_subtitle') }}</p>
                    </div>

                </div>
            </div>
        </section>


        <!-- Contacts -->

        <section class="contacts section" >
            <div class="container">
                <header class="section-header">
                    <h2 class="section-title">{{ trans('layoutweb.contact') }} <span class="text-primary">{{ trans('layoutweb.with_us') }}</span></h2>
                    <p class="text-center">{{ trans('layoutweb.contact_subtitle') }}</p>
                    <strong class="fade-title-left">{{ trans('layoutweb.contact_us') }}</strong>
                </header>
                <div class="section-content">
                    <div class="row-base row">
                        <div class="col-address col-base col-md-4">
                            +52 (867) 150-4070 <br>
                            +1 (956) 724-4531 <br>
                            sistemas@carranza.net
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
    @endsection
