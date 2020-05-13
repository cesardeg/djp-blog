<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Directorio Jurídico del Potosí</title>
        <link rel="stylesheet" href="{{ asset('home/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/footer.css') }}">
    </head>
    <body>
        <div class="header">
            <ul class="nav">
                <li class="hide-lg">
                    <a href="#index">Inicio</a>
                </li>
                <li>
                    <a href="#about">Nosotros</a>
                </li>
                <li class="hide-lg">
                    <a href="#members">Integrantes</a>
                </li>
                <li>
                    <a href="#services">Servicios</a>
                </li>
                <li >
                    <a href="#news">Noticias</a>
                </li>
                <li>
                    <a href="#contact">Contacto</a>
                </li>
            </ul>
            <div class="logo"></div>
            <div class="btn-menu"></div>
        </div>
        <main>
            <div id="index" class="section full-height">
                <div id="banners-swiper" class="overlay swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cover banner-1"></div>
                        <div class="swiper-slide cover banner-2"></div>
                        <!--div class="swiper-slide cover banner-3"></div-->
                        <div class="swiper-slide cover banner-4"></div>
                        <!--div class="swiper-slide cover banner-5"></div-->
                    </div>
                </div>
                <div class="overlay">
                    <div class="triangle-1"></div>
                    <div class="triangle-2"></div>
                    <img class="logo" src="{{ asset('home/img/header/logo-white.png') }}" alt="DJP Logo"/>
                </div>
                <div id="triangles-ref" class="row overlay">
                    <div class="col width-md-3 offset-md-3 width-lg-4 offset-lg-4 width-xl-6 offset-xl-6 width-xxl-4 offset-xxl-8
                        full-height secondary-color">
                        <div class="wraper">
                            <h1 class="title">
                                <span class="primary-color">Compromiso</span> por el mejor servicio
                            </h1>
                        </div>
                    </div>
                </div>
                <a href="#about" class="to-bottom"></a>
            </div>
            <div id="about" class="section" has-logo header-clear>
                <div class="overlay">
                    <div class="triangle-3"></div>
                    <div class="triangle-4"></div>
                </div>
                <div class="row content">
                    <h2 class="col width-sm-1 width-md-2 offset-md-1 width-lg-2 offset-lg-2 width-xl-3 offset-xl-3 width-xxl-2 offset-xxl-2">
                        <span>Directorio Jurídico del Potosí</span>
                    </h2>
                    <div class="col width-sm-1 width-md-3 width-lg-4 width-xl-6 width-xxl-4 text">
                        <p>
                            Somos una firma legal conformada por un equipo multidisciplinar altamente preparado y
                            especializado en diversas áreas del derecho, siendo algunas de ellas:
                        </p>
                        <p class="semi-bold italic">
                            Amparo, Mercantil, Laboral, Administrativo y Electoral
                        </p>

                        <p>
                            Nuestro equipo de trabajo cuenta con amplia experiencia en el patrocinio y
                            defensa legal de toda clase de asuntos jurídicos tramitados ante cualquier instancia,
                            teniendo como premisa fundamental la preparación continua y el trato personalizado con nuestros clientes,
                            con el objetivo de prestar en todo momento la mejor asesoría legal posible.
                        </p>
                    </div>
                </div>
            </div>
            <div id="members" class="section" has-logo>
                <div class="content">
                    <h2>Integrantes</h2>
                    <div id="members-swiper" class="row width-md-4 width-lg-6  swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide col width-sm-1 width-md-2 width-xl-4">
                                <div class="member">
                                    <div class="member-image">
                                        <div class="image" style="background-image:url('{{ asset('home/img/members/benjamin.jpg') }}')"></div>
                                    </div>
                                    <div class="member-text">
                                        <div class="name">
                                            <span>Benjamín</span>
                                        </div>
                                        <div class="name">
                                            <span>Rodríguez</span> <span>Coronado</span>
                                        </div>
                                        <div class="position">
                                            <span>Abogado</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col width-sm-1 width-md-2 width-xl-4">
                                <div class="member">
                                    <div class="member-image">
                                        <div class="image" style="background-image:url('{{ asset('home/img/members/miguel.jpg') }}')"></div>
                                    </div>
                                    <div class="member-text">
                                        <div class="name">
                                            <span>Miguel</span> <span>Ernesto</span>
                                        </div>
                                        <div class="name">
                                            <span>Sánchez</span> <span>García</span>
                                        </div>
                                        <div class="position">
                                            <span>Abogado</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--div class="swiper-slide col width-sm-1 width-md-2 width-xl-4">
                                <div class="member">
                                    <div class="member-image">
                                        <div class="image" style="background-image:url('{{ asset('home/img/members/adan.jpg') }}')"></div>
                                    </div>
                                    <div class="member-text">
                                        <div class="name">
                                            <span>Adán</span>
                                        </div>
                                        <div class="name">
                                            <span>Maldonado</span> <span>Sánchez</span>
                                        </div>
                                        <div class="position">
                                            <span>Abogado</span>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                            <div class="swiper-slide col width-sm-1 width-md-2 width-xl-4">
                                <div class="member">
                                    <div class="member-image">
                                        <div class="image" style="background-image:url('{{ asset('home/img/members/eladio.jpg') }}')"></div>
                                    </div>
                                    <div class="member-text">
                                        <div class="name">
                                            <span>Eladio</span>
                                        </div>
                                        <div class="name">
                                            <span>Jiménez</span> <span>Rangel</span>
                                        </div>
                                        <div class="position">
                                            <span>Abogado</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--div class="swiper-slide col width-sm-1 width-md-2 width-xl-4">
                                <div class="member">
                                    <div class="member-image">
                                        <div class="image" style="background-image:url('{{ asset('home/img/members/jose.jpg') }}')"></div>
                                    </div>
                                    <div class="member-text">
                                        <div class="name">
                                            <span>Jose</span> <span>Rosalío</span>
                                        </div>
                                        <div class="name">
                                            <span>Guerrero</span> <span>Landín</span>
                                        </div>
                                        <div class="position">
                                            <span>Asesor</span> <span>juridico</span>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
            <div id="services" class="section" has-logo header-clear>
                <div class="content">
                    <div id="services-swiper" class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="service swiper-slide">
                                <div class="row">
                                    <div class="service-text col width-xs-1 width-sm-1 width-md-3 offset-lg-2 width-lg-3 offset-xl-2 width-xl-6 offset-xxl-4 width-xxl-4">
                                        <h2>
                                            <span class="icon" style="background-image: url('{{ asset('home/img/services/1_amparo-0.png') }}')"></span>
                                            <span>
                                                <span>Derecho de</span>
                                                <span class="highlight">amparo</span>
                                            </span>
                                        </h2>
                                        <p>
                                            Promovemos la defensa constitucional de nuestros clientes,
                                            para protegerlos de actos arbitrarios e ilegales de autoridades,
                                            independientemente de su naturaleza y fuero,
                                            contando nuestro equipo de trabajo con estudios especializados en dicha área del derecho,
                                            así como amplia experiencia en la tramitación y concesión de amparos directos e indirectos.
                                        </p>
                                    </div>
                                    <div class="service-image col width-sm-1 width-md-3 width-lg-3 width-xl-4 offset-xxl-1 width-xxl-2">
                                        <div class="image-wraper" >
                                            <div class="image img-1" data-swiper-parallax="-200" style="background-image: url('{{ asset('home/img/services/1_amparo-1.png') }}')"></div>
                                            <div class="image img-2" data-swiper-parallax="-400" style="background-image: url('{{ asset('home/img/services/1_amparo-2.png') }}')"></div>
                                            <div class="image img-3" data-swiper-parallax="-600" style="background-image: url('{{ asset('home/img/services/1_amparo-3.png') }}')"></div>
                                            <div class="image img-4" data-swiper-parallax="-800" style="background-image: url('{{ asset('home/img/services/1_amparo-4.png') }}')"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service swiper-slide">
                                <div class="row">
                                    <div class="service-text col width-xs-1 width-sm-1 width-md-3 offset-lg-2 width-lg-3 offset-xl-2 width-xl-6 offset-xxl-4 width-xxl-4">
                                        <h2>
                                            <span class="icon" style="background-image: url('{{ asset('home/img/services/2_mercantil-0.png') }}')"></span>
                                            <span>
                                                <span>Derecho</span>
                                                <span class="highlight">mercantil</span>
                                            </span>
                                        </h2>
                                        <p>
                                            Esta rama del derecho resulta fundamental para el adecuado funcionamiento de la empresas,
                                            regulando los actos ejecutados por personas que continua o accidentalmente se dedican al comercio.
                                            Ante la relevancia de tales actividades, nos preocupamos por cuidar el patrimonio de nuestros clientes,
                                            ello a través de consultorías preventivas, correctivas y litigiosas,
                                            patrocinando a personas físicas y morales en litigios mercantiles de cualquier tipo.
                                        </p>
                                    </div>
                                    <div class="service-image col width-sm-1 width-md-3 width-lg-3 width-xl-4 offset-xxl-1 width-xxl-2">
                                        <div class="image-wraper">
                                            <div class="image img-1" data-swiper-parallax="-200" style="background-image: url('{{ asset('home/img/services/2_mercantil-1.png') }}')"></div>
                                            <div class="image img-2" data-swiper-parallax="-400" style="background-image: url('{{ asset('home/img/services/2_mercantil-2.png') }}')"></div>
                                            <div class="image img-3" data-swiper-parallax="-600" style="background-image: url('{{ asset('home/img/services/2_mercantil-3.png') }}')"></div>
                                            <div class="image img-4" data-swiper-parallax="-800" style="background-image: url('{{ asset('home/img/services/2_mercantil-4.png') }}')"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service swiper-slide">
                                <div class="row">
                                    <div class="service-text col width-xs-1 width-sm-1 width-md-3 offset-lg-2 width-lg-3 offset-xl-2 width-xl-6 offset-xxl-4 width-xxl-4">
                                        <h2>
                                            <span class="icon" style="background-image: url('{{ asset('home/img/services/3_laboral-0.png') }}')"></span>
                                            <span>
                                                <span>Derecho</span>
                                                <span class="highlight">laboral</span>
                                            </span>
                                        </h2>
                                        <p>
                                            El derecho laboral tiene como objeto principal regular las relaciones interpersonales
                                            que se establecen como consecuencia del trabajo del hombre,
                                            resultando de vital importancia para esta firma,
                                            el proteger a nuestros clientes de posibles contingencias y
                                            demandas a través de la elaboración y revisión de contratos adecuados a
                                            sus actividades y necesidades, representándolos además en litigios que se
                                            lleguen a presentar ante las autoridades del trabajo.
                                        </p>
                                    </div>
                                    <div class="service-image col width-sm-1 width-md-3 width-lg-3 width-xl-4 offset-xxl-1 width-xxl-2">
                                        <div class="image-wraper">
                                            <div class="image img-1" data-swiper-parallax="-200" style="background-image: url('{{ asset('home/img/services/3_laboral-1.png') }}')"></div>
                                            <div class="image img-2" data-swiper-parallax="-400" style="background-image: url('{{ asset('home/img/services/3_laboral-2.png') }}')"></div>
                                            <div class="image img-3" data-swiper-parallax="-600" style="background-image: url('{{ asset('home/img/services/3_laboral-3.png') }}')"></div>
                                            <div class="image img-4" data-swiper-parallax="-800" style="background-image: url('{{ asset('home/img/services/3_laboral-4.png') }}')"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service swiper-slide">
                                <div class="row">
                                    <div class="service-text col width-xs-1 width-sm-1 width-md-3 offset-lg-2 width-lg-3 offset-xl-2 width-xl-6 offset-xxl-4 width-xxl-4">
                                        <h2>
                                            <span class="icon" style="background-image: url('{{ asset('home/img/services/4_administrativo-0.png') }}')"></span>
                                            <span>
                                                <span>Derecho</span>
                                                <span class="highlight">administrativo</span>
                                            </span>
                                        </h2>
                                        <p>
                                            Es la rama del derecho público que regula la relación que guarda el Estado con los particulares,
                                             por lo que nos avocamos a la defensa de nuestros clientes,
                                             contra actos de las autoridades de distintos órdenes de gobierno,
                                             enfocándonos en gestiones para la obtención de licencias de cualquier tipo,
                                             así como la defensa ante tribunales administrativos locales y federales
                                             mediante la representación en litigios de esta materia.
                                        </p>
                                    </div>
                                    <div class="service-image col width-sm-1 width-md-3 width-lg-3 width-xl-4 offset-xxl-1 width-xxl-2">
                                        <div class="image-wraper">
                                            <div class="image img-1" data-swiper-parallax="-200" style="background-image: url('{{ asset('home/img/services/4_administrativo-1.png') }}')"></div>
                                            <div class="image img-2" data-swiper-parallax="-400" style="background-image: url('{{ asset('home/img/services/4_administrativo-2.png') }}')"></div>
                                            <div class="image img-3" data-swiper-parallax="-600" style="background-image: url('{{ asset('home/img/services/4_administrativo-3.png') }}')"></div>
                                            <div class="image img-4" data-swiper-parallax="-800" style="background-image: url('{{ asset('home/img/services/4_administrativo-4.png') }}')"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service swiper-slide">
                                <div class="row">
                                    <div class="service-text col width-xs-1 width-sm-1 width-md-3 offset-lg-2 width-lg-3 offset-xl-2 width-xl-6 offset-xxl-4 width-xxl-4">
                                        <h2>
                                            <span class="icon" style="background-image: url('{{ asset('home/img/services/5_electoral-0.png') }}')"></span>
                                            <span>
                                                <span>Derecho</span>
                                                <span class="highlight">electoral</span>
                                            </span>
                                        </h2>
                                        <p>
                                            Como base primordial de la soberanía de nuestro país,
                                            el derecho electoral cobra vital importancia para el desarrollo nacional,
                                            pues es a través del voto como la ciudadanía elige a sus representantes y define el rumbo social.
                                            Preocupados por el presente y futuro de la nación,
                                            brindamos asesoría a personas e instituciones políticas que activamente
                                            participan en los procesos correspondientes, representando a los mismos en
                                            contiendas suscitadas en el ámbito político-electoral en los diversos organismos y
                                            tribunales de los distintos fueros.
                                        </p>
                                    </div>
                                    <div class="service-image col width-sm-1 width-md-3 width-lg-3 width-xl-4 offset-xxl-1 width-xxl-2">
                                        <div class="image-wraper">
                                            <div class="image img-1" data-swiper-parallax="-200" style="background-image: url('{{ asset('home/img/services/5_electoral-1.png') }}')"></div>
                                            <div class="image img-2" data-swiper-parallax="-400" style="background-image: url('{{ asset('home/img/services/5_electoral-2.png') }}')"></div>
                                            <div class="image img-3" data-swiper-parallax="-600" style="background-image: url('{{ asset('home/img/services/5_electoral-3.png') }}')"></div>
                                            <div class="image img-4" data-swiper-parallax="-800" style="background-image: url('{{ asset('home/img/services/5_electoral-4.png') }}')"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="pagination width-lg-2 offset-xxl-1">
                            <li class="active">
                                <p>Amparo</p>
                                <span class="icon" style="background-image: url('{{ asset('home/img/services/1_amparo-0.png') }}')"></span>
                            </li>
                            <li>
                                <p>Mercantil</p>
                                <span class="icon" style="background-image: url('{{ asset('home/img/services/2_mercantil-0.png') }}')"></span>
                            </li>
                            <li>
                                <p>Laboral</p>
                                <span class="icon" style="background-image: url('{{ asset('home/img/services/3_laboral-0.png') }}')"></span>
                            </li>
                            <li>
                                <p>Administrativo</p>
                                <span class="icon" style="background-image: url('{{ asset('home/img/services/4_administrativo-0.png') }}')"></span>
                            </li>
                            <li>
                                <p>Electoral</p>
                                <span class="icon" style="background-image: url('{{ asset('home/img/services/5_electoral-0.png') }}')"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="news" class="section" has-logo>
                <div class="row content">
                    <div class="col width-md-4 width-lg-6 width-xl-8 width-xxl-10">
                        <h2>
                            Ultimas noticias
                            <a href="{{ route('blog') }}">ir a blog</a>
                        </h2>
                        <div class="news">
                            @foreach($articles as $article)
                            <div class="new">
                                <h4 class="title">{{ $article->title }}</h4>
                                <p class="fade">
                                    {{ $article->content }}
                                </p>
                                <div class="img" style="background-image:url('{{(!empty($article->article_image))? url(config('blogger.filemanager.upload_path').'/'.$article->article_image): url('images/placeholder_640x480.png')}}')"></div>
                                <div class="separator">
                                    <small>{{ $article->published_at->format('d/m/Y') }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col width-md-2 width-lg-2 width-xl-4 width-xxl-2" id="twitter">
                        <a class="twitter-timeline" data-height="324" data-link-color="#0075a0" href="https://twitter.com/Twitter?ref_src=twsrc%5Etfw"
                            data-chrome="noborders transparent">
                            Tweets by Twitter
                        </a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
            <div id="contact" class="section" has-logo>
                <div class="content">
                    <div class="row title">
                        <div class="col">
                            <h2>Datos de contacto</h2>
                            <p>Sirvace de completar el siguiente formulario a fin de que nos pongamos en contacto con usted</p>
                        </div>
                    </div>
                    <form class="row fieldset" action="#">
                        <div class="row col width-md-3 width-lg-4 width-xl-6 width-xxl-8" id="col-1" no-padding>
                            <div class="col width-sm-2 width-md-3 width-lg-4 width-xl-6 width-xxl-4" padding-xxl>
                                <div class="form-group">
                                    <span class="icon" style="background-image: url('{{ asset('home/img/contact/ic_person.png') }}')"></span>
                                    <input type="text" name="name" placeholder="Nombre completo *" required>
                                </div>
                                <div class="form-group">
                                    <span class="icon name" style="background-image: url('{{ asset('home/img/contact/ic_email.png') }}')"></span>
                                    <input type="email" name="email"  placeholder="Correo electronico *" required>
                                </div>
                            </div>
                            <div class="col width-sm-2 width-md-3 width-lg-4 width-xl-6 width-xxl-4" padding-xxl>
                                <div class="form-group">
                                    <span class="icon" style="background-image: url('{{ asset('home/img/contact/ic_location.png') }}')"></span>
                                    <input type="text" name="city" placeholder="Ciudad *" required>
                                </div>
                                <div class="form-group">
                                    <span class="icon" style="background-image: url('{{ asset('home/img/contact/ic_phone.png') }}')"></span>
                                    <input type="tel" name="phone"  placeholder="Teléfono con lada *" required>
                                </div>
                            </div>
                        </div>
                        <div class="col width-md-3 width-lg-4 width-xl-6 width-xxl-4">
                            <div class="form-group">
                                <span class="icon" style="background-image: url('{{ asset('home/img/contact/ic_email.png') }}')"></span>
                                <textarea name="body" rows="4" placeholder="Mensaje" id="textarea" required></textarea>
                            </div>
                        </div>
                        <div class="row" no-padding>
                            <div class="col" text-right>
                                <button type="submit" name="button">Enviar</button>
                            </div>
                        </div>
                    </form>
                    <div class="info-box">
                        <div class="row offset-xxl-3 width-xxl-6">
                            <div class="col width-xs-1 width-md-2 width-lg-2 offset-xl-1 width-xl-2 offset-xxl-0 width-xxl-2">
                                <p class="form-group">
                                    <i class="icon" style="background-image: url('{{ asset('home/img/contact/ic_email_white.png') }}')"></i>
                                    <a href="mailto:contacto@djp.com.mx">contacto@djp.com.mx</a>
                                </p>
                            </div>
                            <div class="col width-xs-1 width-md-2 offset-lg-1 width-lg-2 offset-xl-2 width-xl-2 offset-xxl-0 width-xxl-2">
                                <p class="form-group">
                                    <i class="icon" style="background-image: url('{{ asset('home/img/contact/ic_phone_white.png') }}')"></i>
                                    <a href="tel:4442115186">(444) 211.51.86</a>
                                </p>
                            </div>
                            <div class="col width-xs-1 width-md-2 offset-lg-1 width-lg-2 offset-xl-1 width-xl-2 offset-xxl-0 width-xxl-2">
                                <p class="form-group">
                                    <i class="icon" style="background-image: url('{{ asset('home/img/contact/ic_location_white.png') }}')"></i>
                                    <a href="https://goo.gl/maps/NMR9Gu9BSyM2" target="_blank">
                                        <b>Francisco I. Madero #225</b>,
                                        Centro Histórico, San Luis Potosí, SLP, CP 78000
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="https://goo.gl/maps/NMR9Gu9BSyM2" target="_blank" class="map"></a>
                    <div class="row title offset-xxl-2 width-xxl-8">
                        <div class="col">
                            <p>
                                ¿Te gustaría colaborar con nosotros?<br>
                                Adjunta tu C.V.
                            </p>
                        </div>
                    </div>
                    <form class="row fieldset offset-xxl-2 width-xxl-8" action="#">
                    <div class="col width-md-3 width-lg-4 width-xl-6 width-xxl-4">
                        <div class="form-group">
                            <span class="icon" style="background-image: url('{{ asset('home/img/contact/ic_person.png') }}')"></span>
                            <input type="text" name="name" placeholder="Nombre completo *" required>
                        </div>
                    </div>
                    <div class="col width-md-3 width-lg-4 width-xl-6 width-xxl-4">
                        <div class="form-group">
                            <span class="icon" style="background-image: url('{{ asset('home/img/contact/ic_upload.png') }}')"></span>
                            <input type="text" name="name" placeholder="Adjuntar archivo" required>
                        </div>
                    </div>
                    <div class="col width-xxl-8" text-right>
                        <button type="submit" name="button">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="footer" id="footer">
                <div class="row">
                    <div class="logo"></div>
                    <p>
                        &copy;
                        <span class="d-inline-block">
                            Derechos Reservados
                        </span> -
                        <span class="d-inline-block">
                            DESPACHO JURÍDICO DEL POTOSÍ
                        </span>
                    </p>
                    <p>
                        <small>
                            Powered by <a href="http://www.recursosdigitales.mx">RED RECURSOS DIGITALES</a>
                        </small>
                    </p>
                </div>
            </div>
        </main>
        <script src="{{ asset('home/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('home/js/swiper.jquery.min.js') }}"></script>
        <script src="{{ asset('home/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('home/js/index.js') }}"></script>
    </body>
</html>
