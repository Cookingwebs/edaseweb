@extends('layouts.plantilla')

@section('title', 'Conocenos')

@section('id-page', 'conocenos')

@section('content')
<div id="conocenos-page">
    <div id="b_cabecera">
        <div class="--copy">
            <h1 class="--title">Conócenos</h1>
        </div>
    </div>
    <div class="--aside" id="b_lideres">
        <div class="--copy">
            <p class="--section_title">líderes</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <h2 class="--lideres_title"><u class="slide-left-delay-0 --first-content">Somos escuela</u> <br>
            <u class="slide-left-delay-1 --first-content"><b>y despacho</u><br> <u class="slide-left-delay-2 --first-content">profesional</u></b></h2>
            <p class="--lideres_subtitle"><u class="slide-left-delay-4 --first-content_2"><span>+</span> LÍDERES EN NUESTRO SECTOR</u></p>
            <p class="--lideres_copy"><u class="fade-in-delay-5 --first-content_3">De nuestra experiencia trabajando con clientes de toda España nace la primera escuela especializada en asesoría.</u></p>
        </div>
    </div>

    <div class="--aside" id="b_compromiso">
        <div class="--copy">
            <p class="--section_title">compromiso</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">compromiso</p>
           <h2 class="--compromiso_title js-scroll slide-left">Nuestro compromiso educativo se basa en la experiencia práctica y real</h2>
           <div class="--compromiso_copy">
               <div class="--compromiso_text js-scroll slide-left">
                   <p>Ponemos el foco en darles a nuestros alumnos el control de los procesos, trámites y herramientas que necesitan para avanzar y escalar en su trabajo.</p>
               </div>
               <img src="{{ URL::to('/') }}/images/conocenos/compromiso.webp" alt="" class="lazyload js-scroll slide-right">
           </div>
        </div>
    </div>
    <div class="--aside" id="b_historia">
        <div class="--copy">
            <p class="--section_title">historia</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">historia</p>
           <h2 class="--historia_title js-scroll slide-left">La historia de <br class="d-none d-md-block">Ayuda T Pymes <br class="d-none d-md-block">es nuestra historia</h2>
           <div class="--transition_niveles js-scroll slide-right" id="__transition_niveles">
            <div class="--content_transition" data="1">
                <div class="--b_date_transition">
                    <p class="--active" data="1">2009</p>
                    <p data="2">2015</p>
                    <p data="3">2018</p>
                    <p data="4">2018</p>
                    <p data="5">2019</p>
                    <p data="6">2020</p>
                    <p data="7">2021</p>
                    <p data="8">2022</p>
                </div>
                <div class="--b_title_transition">
                    <h3 class="--active" data="1">Empezamos como asesoría online</h3>
                    <h3 data="2">Reconocen nuestra trayectoria empresarial</h3>
                    <h3 data="3">Creamos la Escuela de Asesores</h3>
                    <h3 data="4"> Lanzamos el Máster Asesor Experto</h3>
                    <h3 data="5">Tenemos 12.000 clientes</h3>
                    <h3 data="6">Celebramos nuestro 10º aniversario</h3>
                    <h3 data="7">Lanzamos el Curso técnico laboral y contable</h3>
                    <h3 data="8">Seguimos creciendo</h3>
                </div>
                <div class="--b_copy_transition">
                    <p class="--active" data="1">Ofreciendo servicios a autónomos y pymes de toda España</p>
                    <p data="2">En los premios organizados por la Asociación de Jóvenes Empresarios</p>
                    <p data="3">Después de comprobar la necesidad de perfiles especializados</p>
                    <p data="4">Basado en la metodología con la que formamos a nuestros trabajadores</p>
                    <p data="5">Ya contamos con más de 350 especialistas en el equipo.</p>
                    <p data="6">Los primeros 10 años de Ayuda T Pymes como asesoría y empresa tecnológica.</p>
                    <p data="7">En busca de impulsar la integración laboral de todo tipo de perfiles.</p>
                    <p data="8">Más de 15.000 clientes de toda España ya confían en nuestros servicios.</p>
                </div>
            </div>
            <div class="--b_foto_transition">
                <img src="{{ URL::to('/') }}/images/conocenos/2009.webp" alt="" data="1" class="--active lazyload">
                <img src="{{ URL::to('/') }}/images/conocenos/2015.webp" alt="" data="2" class="lazyload">
                <img src="{{ URL::to('/') }}/images/conocenos/2018.webp" alt="" data="3" class="lazyload">
                <img src="{{ URL::to('/') }}/images/conocenos/2018_2.webp" alt="" data="4" class="lazyload">
                <img src="{{ URL::to('/') }}/images/conocenos/2019.webp" alt="" data="5" class="lazyload">
                <img src="{{ URL::to('/') }}/images/conocenos/2020.webp" alt="" data="6" class="lazyload">
                <img src="{{ URL::to('/') }}/images/conocenos/2021.webp" alt="" data="7" class="lazyload">
                <img src="{{ URL::to('/') }}/images/conocenos/2022.webp" alt="" data="8" class="lazyload">
            </div>
            <div class="--mascara_transition">
            </div>
            <div class="--progress_transition" data="1"></div>
        </div>
        
        </div>
    </div>
    <div class="--aside" id="b_profesorado">
        <div class="--copy">
            <p class="--section_title">PROFESORADO </p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">PROFESORADO</p>
            <h2 class="--title js-scroll slide-left">Docentes y asesores en <br>continua formación</h2>
                <p class="--subtitle js-scroll slide-left"><span>+</span> CONECTADOS AL DÍA A DÍA DE CLIENTES Y DESPACHOS.</p>
                @include('layouts.profesorado')
        </div>
    </div>
    <div class="--aside" id="b_equipo">
        <div class="--copy">
            <p class="--section_title">EQUIPO </p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <h3 class="--equipo_title">
                <u class="js-scroll slide-left">Equipo</u> 
                <u class="js-scroll slide-left">de la</u> 
                <u class="js-scroll slide-left">escuela</u></h3>
            <div class="--equipo_column js-scroll slide-right">
                <p><span>+</span> <b>CARMEN MORENO</b><br> Directora</p>
                <p><span>+</span> <b>VANESSA ROMERO</b><br> Asesora de formación</p>
                <p><span>+</span> <b>MARÍA JOSE CASTRO</b><br> Asesora de formación</p>
                <p><span>+</span> <b>INMACULADA VIDAL</b><br> Asesora de formación</p>
                <p><span>+</span> <b>VIRGINIA DÍAZ</b><br> Asesora de formación</p>
                <p><span>+</span> <b>ÁNGELA DÍAZ</b><br> Consultora de despachos</p>
            </div>
            <div class="--equipo_column js-scroll slide-right">
                <p><span>+</span> <b>JUAN BRENES</b><br> Diseñador Audiovisual</p>
                <p><span>+</span> <b>PACO MAZA</b><br> Community Manager</p>
                <p><span>+</span> <b>ANA ROLDÁN</b><br> Creativa publicitaria</p>
                <p><span>+</span> <b>ANA OJEDA</b><br> Copywriter</p>
                <p><span>+</span> <b>JOSE ROA</b><br> Director creativo</p>
                <p><span>+</span> <b>JUAN ROSALES</b><br> Desarrollador web</p>
            </div>
        </div>
    </div>
    <div class="--aside js-scroll fade-in" id="b_vida">
        <div class="--copy">
            <p class="--section_title">EXPERIENCIA</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --bottom">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <h3 class="--vida_title">alumnos & <span>ESCUELA</span></h3>
            <div class="--vida_bloque">
               <div class="--vida_fila_1">
                    <div class="--vida_fila_1_div_1">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria1.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_1_div_2">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria2.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_1_div_3">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria3.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                </div>
                <div class="--vida_fila_2">
                    <div class="--vida_fila_2_div_1">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria4.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_2">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria5.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_3">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria6.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_4">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria7.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_5">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria8.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
               </div>
            </div>
            <div class="--vida_bloque_mobile">
                <div class="--vida_bloque_img --active">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria1.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria2.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria3.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria4.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria5.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria6.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria7.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria8.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-generico')
</div>
@endsection