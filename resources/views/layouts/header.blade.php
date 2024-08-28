    <header id="top" class="header-home">
        <div class="brand-panel">
            <a href="{{ route('/') }}" class="brand js-target-scroll">
                <img src="{{ asset('img/') }}/{{ trans('layoutweb.logo_img') }}" class="brand-logo img-responsive" alt="logo"> <!--Logo-->
            </a>
            <!-- <div class="brand-name">Go.arch</div> -->
        </div>
        <!-- Navigation Desctop -->
        <nav class="navbar-desctop visible-md visible-lg">
            <div class="container">
                <a href="{{ route('/') }}" class="brand js-target-scroll">
                    <img src="{{ asset('img/') }}/{{ trans('layoutweb.logo_img') }}" class="brand-logo img-responsive" alt="logo"> <!--Logo-->
                </a>
                <ul class="navbar-desctop-menu">

                    <li>
                        <a href="{{ route('/') }}">{{ trans('layoutweb.home') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ trans('layoutweb.about') }} <i class="fa fa-angle-down"></i></a>
                        <ul>
                        <li><a href="{{ route('empresa') }}">{{ trans('layoutweb.company') }}</a></li>
                            <li><a href="{{ route('infraestructura') }}">{{ trans('layoutweb.location') }}</a></li>
                            <li><a href="{{ route('partners') }}">{{ trans('layoutweb.partners') }}</a></li>
                            <li><a href="{{ route('certificacion') }}">{{ trans('layoutweb.certifications') }}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">{{ trans('layoutweb.operations') }} <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="http://trafico.carranza.net/" target="_blank">{{ trans('layoutweb.reports') }}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('servicio') }}">{{ trans('layoutweb.services') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}">{{ trans('layoutweb.blog') }}</a>
                    </li>

                    <li>
                        <a href="{{ route('contacto') }}">{{ trans('layoutweb.contact') }}</a>
                    </li>
                    <li>
                        @if (Session::has('language') && Session::get('language') == 'es')
                        <a href="{{route('language','en')}}" title="Cambiar a English">
                            <img src="{{ asset('img/us.jpg') }}" width="40%" alt="Ingles">
                        </a>
                        @else
                        <a href="{{route('language','es')}}" title="Cambiar a Español">
                            <img src="{{ asset('img/spain.jpg') }}" width="40%" alt="Español">
                        </a>
                        @endif
                    </li>
                    @if ($redes->facebook)
                    <li>
                        <a href="{{ $redes->facebook }}" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->instagram)
                    <li>
                        <a href="{{ $redes->instagram }}" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->twitter)
                    <li>
                        <a href="{{ $redes->twitter }}" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->linkedin)
                    <li>
                        <a href="{{ $redes->linkedin }}" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->youtube)
                    <li>
                        <a href="{{ $redes->youtube }}" target="_blank">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->whatsapp)
                    <li>
                        <a href="{{ $redes->whatsapp }}" target="_blank">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>

        <!-- Navigation Mobile -->

        <nav class="navbar-mobile">
            <a href="{{ route('/') }}" class="brand js-target-scroll">
                <img src="{{ asset('img/carranza-es.png') }}" class="brand-logo img-responsive" alt="logo"> <!--Logo-->
            </a>

            <!-- Navbar Collapse -->

            <button type="button" class="navbar-toggle collapsed mt-1" data-toggle="collapse" data-target="#navbar-mobile">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="navbar-nav-mobile">
                <li>
                        <a href="{{ route('/') }}">{{ trans('layoutweb.home') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ trans('layoutweb.about') }} <i class="fa fa-angle-down"></i></a>
                        <ul>
                        <li><a href="{{ route('empresa') }}">{{ trans('layoutweb.company') }}</a></li>
                            <li><a href="{{ route('infraestructura') }}">{{ trans('layoutweb.location') }}</a></li>
                            <li><a href="{{ route('partners') }}">{{ trans('layoutweb.partners') }}</a></li>
                            <li><a href="{{ route('certificacion') }}">{{ trans('layoutweb.certifications') }}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">{{ trans('layoutweb.operations') }} <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="http://trafico.carranza.net/" target="_blank">{{ trans('layoutweb.reports') }}</a></li>
                            <li><a href="#">{{ trans('layoutweb.customs_agency') }}<</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('servicio') }}">{{ trans('layoutweb.services') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}">{{ trans('layoutweb.blog') }}</a>
                    </li>

                    <li>
                        <a href="{{ route('contacto') }}">{{ trans('layoutweb.contact') }}</a>
                    </li>
                    <li>
                        @if (Session::has('language') && Session::get('language') == 'es')
                        <a href="{{route('language','en')}}" title="Cambiar a English">
                            <img src="{{ asset('img/us.jpg') }}" width="10%" alt="Ingles">
                        </a>
                        @else
                        <a href="{{route('language','es')}}" title="Cambiar a Español">
                            <img src="{{ asset('img/spain.jpg') }}" width="10%" alt="Español">
                        </a>
                        @endif
                    </li>
                    @if ($redes->facebook)
                    <li>
                        <a href="{{ $redes->facebook }}" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->instagram)
                    <li>
                        <a href="{{ $redes->instagram }}" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->twitter)
                    <li>
                        <a href="{{ $redes->twitter }}" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->linkedin)
                    <li>
                        <a href="{{ $redes->linkedin }}" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->youtube)
                    <li>
                        <a href="{{ $redes->youtube }}" target="_blank">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif

                    @if ($redes->whatsapp)
                    <li>
                        <a href="{{ $redes->whatsapp }}" target="_blank">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
