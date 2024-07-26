@extends('layouts.app')
@section('content')
<div class="layout">

    <section>
        <div class="body-list">
            <div class="list">
                <h2>Aduanas</h2>
                <ul>
                    <li>
                        <span>
                            <a href="http://www.aaacolombia.org/inicio.html" target="_blank">
                                <img alt="Asociación de A.A. de Colombia" src="{{ asset('images/links/gobierno/aaacnl.jpg') }}"> Asociación de A.A. de Colombia
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="http://www.aaanld.org/" target="_blank">
                                <img alt="Asociación de A.A. de Nuevo Laredo" src="images/links/gobierno/aaanld.jpg"> Asociación de A.A. de Nuevo Laredo
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="https://www.usitc.gov/" target="_blank">
                                <img alt="U.S International Trade Comission" src="{{ asset('images/links/gobierno/tradecomission.jpg') }}">U.S International Trade Comission
                            </a>
                        </span>
                    </li>
                </ul>
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