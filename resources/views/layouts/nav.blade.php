
    <nav id="nav">
        <div class="--nav_primary">
            <div class="--logo">
                <a href="{{route('home')}}">
                    <img src="{{ URL::to('/') }}/images/svg/edase.svg" alt="" class="lazyload">
                </a>
            </div>
            <div class="--menu">
                <ul class="--menu_list">
                    <li class="--menu_list_item --menu_list_item_desp" data="1" data-order="1"><span data="1">titulaciones</span></li>
                    <li class="--menu_list_item --menu_list_item_desp" data="2" data-order="2"><span data="2">la escuela</span></li>
                    <li class="--menu_list_item {{ Route::currentRouteNamed('carrera') ? '--active' : '' }}" data-order="3"><a href="{{route('carrera')}}"><span>plan de carrera</a></span></li>
                    <li class="--menu_list_item {{ Route::currentRouteNamed('becas') ? '--active' : '' }}" data-order="4"><a href="{{route('becas')}}"><span>becas y admisión</a></span></li>
                </ul>
                <p class="--phone_tablet"><a href="tel:900 866 336">900 866 336</a></p>
                {{-- <p class="--acceder_mobile"><a href="https://campusayudatlearning.com/iniciar/">Acceso</a></p> --}}
            </div>
            <div class="--submenu">
                <ul class="--submenu_list">
                    {{-- <li class="--submenu_list_item --menu_list_item_desp" data="rrss"><span data="rrss">redes sociales</span></li> --}}
                    <li class="--submenu_list_item --acceder"><a href="https://campusayudatlearning.com/iniciar/"><b>acceso alumno</b></a></li>
                    <li class="--submenu_list_item"><a href="tel:900 866 336"><b>900 866 336</b></a></li>
                </ul>
            </div>
            <div class="--icon_menu">
                <div class="--icon_menu_line"></div>
                <div class="--icon_menu_line"></div>
                <div class="--icon_menu_line"></div>
            </div>
        </div>
        <div class="--desplegable">
            <div class="--mascara"></div>
            <ul class="--deplegable_list --visible" data="1">
                <a href="{{route('master')}}">
                    <li class="--desplegable_list_item {{ Route::currentRouteNamed('master') ? '--active' : '' }}">
                        Master Asesor Experto
                    </li>
                </a>
                <a href="{{route('mba')}}">
                    <li class="--desplegable_list_item {{ Route::currentRouteNamed('mba') ? '--active' : '' }}">
                        MBA
                    </li>
                </a>
                <a href="{{route('tecnico')}}">
                    <li class="--desplegable_list_item {{ Route::currentRouteNamed('tecnico') ? '--active' : '' }}">
                        Técnico Asesoría
                    </li>
                </a>
            </ul>
            <ul class="--deplegable_list" data="2">
                <a href="{{route('conocenos')}}">
                    <li class="--desplegable_list_item {{ Route::currentRouteNamed('conocenos') ? '--active' : '' }}">
                        Conócenos
                    </li>
                </a>
                <a href="{{route('metodologia')}}">
                    <li class="--desplegable_list_item {{ Route::currentRouteNamed('metodologia') ? '--active' : '' }}">
                        Metodología
                    </li>
                </a>
                <a href="{{route('social')}}">
                    <li class="--desplegable_list_item {{ Route::currentRouteNamed('social') ? '--active' : '' }}">
                        Causa Social
                    </li>
                </a>
                <a href="{{route('investigacion')}}">
                    <li class="--desplegable_list_item {{ Route::currentRouteNamed('investigacion') ? '--active' : '' }}">
                        I + D
                    </li>
                </a>
            </ul>
            <ul class="--deplegable_list" data="3">
                <li class="--desplegable_list_item">Lorem ipsum 3</li>
                <li class="--desplegable_list_item">Lorem ipsum</li>
                <li class="--desplegable_list_item">Lorem ipsum</li>
            </ul>
        </div>
        <div class="--content_menu">
            <ul class="--links --open_menu --left_menu {{ Route::currentRouteNamed('home') ||  Route::currentRouteNamed('becas') ||  Route::currentRouteNamed('carrera') ? '__current' : '' }}" data-select="1">
                <li class="--content_menu_link {{ Route::currentRouteNamed('home') ? '--active' : '' }}">
                    <a href="{{route('home')}}">
                        HOME
                    </a>
                </li>
                <li class="--content_menu_link __cambio_seccion" data-link="2">
                    TITULACIONES
                </li>
                <li class="--content_menu_link __cambio_seccion" data-link="3">
                    LA ESCUELA
                </li>
                {{-- <li class="--content_menu_link" data-link="4">
                    PLANES DE CARRERA
                </li> --}}
                <li class="--content_menu_link {{ Route::currentRouteNamed('carrera') ? '--active' : '' }}">
                        <a href="{{route('carrera')}}">
                        PLAN DE CARRERA
                    </a>
                </li>
                <li class="--content_menu_link {{ Route::currentRouteNamed('becas') ? '--active' : '' }}">
                        <a href="{{route('becas')}}">
                        BECAS Y ADMISIONES
                    </a>
                </li>
                <li class="--content_menu_link --green">
                    <a href="https://campusayudatlearning.com/iniciar/">
                    <span>ACCESO ALUMNO</span>
                    </a>
                </li>
            </ul>
            <ul class="--links {{ Route::currentRouteNamed('master') ||  Route::currentRouteNamed('mba') || Route::currentRouteNamed('tecnico') ? '--open_menu' : '' }}" data-select="2">
                <li class="--return">< Volver</li>
                <a href="{{route('master')}}">
                    <li class=" {{ Route::currentRouteNamed('master') ? '--active' : '' }}">
                        MASTER ASESOR EXPERTO
                    </li>
                </a>
                <a href="{{route('mba')}}">
                    <li class=" {{ Route::currentRouteNamed('mba') ? '--active' : '' }}">
                        MBA
                    </li>
                </a>
                <a href="{{route('tecnico')}}">
                    <li class=" {{ Route::currentRouteNamed('tecnico') ? '--active' : '' }}">
                        TÉCNICO ASESORÍA
                    </li>
                </a>
            </ul>
            <ul class="--links {{ Route::currentRouteNamed('conocenos') ||  Route::currentRouteNamed('metodologia') ||  Route::currentRouteNamed('social') ||  Route::currentRouteNamed('investigacion') ? '--open_menu' : '' }}" data-select="3">
                <li class="--return">< Volver</li>
                <a href="{{route('conocenos')}}">
                    <li class=" {{ Route::currentRouteNamed('conocenos') ? '--active' : '' }}">
                        CONÓCENOS
                    </li>
                </a>
                <a href="{{route('metodologia')}}">
                    <li class=" {{ Route::currentRouteNamed('metodologia') ? '--active' : '' }}">
                        METODOLOGÍA
                    </li>
                </a>
                <a href="{{route('social')}}">
                    <li class=" {{ Route::currentRouteNamed('social') ? '--active' : '' }}">
                        CAUSA SOCIAL
                    </li>
                </a>
                <a href="{{route('investigacion')}}">
                    <li class=" {{ Route::currentRouteNamed('investigacion') ? '--active' : '' }}">
                        I + D
                    </li>
                </a>
            </ul>
            <ul class="--links" data-select="4">
                <li class="--return">< Volver</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
            </ul>
            <ul class="--links" data-select="5">
                <li class="--return">< Volver</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
            </ul>
        </div>
    </nav>    

    <div class="--llamar_mobile">
        <p><span class="--go_form_down">SOLICITAR INFORMACIÓN</span></p>
    </div>

