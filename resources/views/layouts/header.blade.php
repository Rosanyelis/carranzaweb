    <header id="top" class="header-home">
        <div class="brand-panel">
            <a href="{{ route('/') }}" class="brand js-target-scroll">
                <img src="{{ asset('img/carranza-es.png') }}" class="brand-logo img-responsive" alt="logo"> <!--Logo-->
            </a>
            <!-- <div class="brand-name">Go.arch</div> -->
        </div>
        <!-- Navigation Desctop -->
        <nav class="navbar-desctop visible-md visible-lg">
            <div class="container">
                <a href="{{ route('/') }}" class="brand js-target-scroll">
                    <img src="{{ asset('img/carranza-es.png') }}" class="brand-logo img-responsive" alt="logo"> <!--Logo-->
                </a>
                <ul class="navbar-desctop-menu">

                    <li>
                        <a href="{{ route('/') }}">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Conocenos <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('empresa') }}">Empresa</a></li>
                            <li><a href="{{ route('infraestructura') }}">Infraestructura</a></li>
                            <li><a href="{{ route('ubicacion') }}">Ubicacion</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Certificaciones <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('certificacion') }}">Certificaciones</a></li>
                            <li><a href="#">Socios Comerciales</a></li>
                            <li><a href="#">Enlaces de Interes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Servicios <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="http://trafico.carranza.net/" target="_blank">Reportes</a></li>
                            <li><a href="{{ route('servicio') }}">Agencia Aduanal</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('blog') }}">Noticias</a>
                    </li>

                    <li>
                        <a href="{{ route('contacto') }}">Contacto</a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- Navigation Mobile -->

        <nav class="navbar-mobile">
            <a href="{{ route('/') }}" class="brand js-target-scroll">
                <img src="{{ asset('img/carranza-es.png') }}" class="brand-logo img-responsive" alt="logo"> <!--Logo-->
            </a>

            <!-- Navbar Collapse -->

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="navbar-nav-mobile">
                    <li >
                        <a href="{{ route('/') }}">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Conocenos <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('empresa') }}">Empresa</a></li>
                            <li><a href="{{ route('infraestructura') }}">Infraestructura</a></li>
                            <li><a href="{{ route('ubicacion') }}">Ubicacion</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Certificaciones <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{ route('certificacion') }}">Certificaciones</a></li>
                            <li><a href="#">Socios Comerciales</a></li>
                            <li><a href="#">Enlaces de Interes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Servicios <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="#">Reportes</a></li>
                            <li><a href="#">Agencia Aduanal</a></li>
                            <li><a href="#">Logistica</a></li>
                            <li><a href="#">Transporte</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}">Noticias</a>
                    </li>
                    <li>
                        <a href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
