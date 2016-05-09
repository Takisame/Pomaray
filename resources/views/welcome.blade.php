
<!DOCTYPE HTML>
<html>
<head lang="es">
    <title>Pomaray | "No se cansen de hacer el bien"</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/estilos.css')!!}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('//fonts.googleapis.com/css?family=Open+Sans:400,600,700')!!}
    {!!Html::style('css/lightgallery.css')!!}
    {!!Html::style('css/justifiedGallery.min.css')!!}
    {!!Html::style('css/lg-animations.css')!!}
    {!!Html::style('css/main.css')!!}
    <!-- Custom Theme files -->
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/move-top.js')!!}
    {!!Html::script('js/easing.js')!!}
    
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},500);
            });
            $(".links").click(function (event) {
                event.preventDefault();
            });
        });
    </script>

</head>
<body>
<style>
    .dim{
        padding:10px;
        background:#2AC069;
        color:#fff;
    }
    .dim:hover{color:rgba(0,0,0,.5); }
</style>
    <!--header-->
    <ul class="side_nav">
        <li><a class="active scroll color1" href="#home"><span>Inicio</span><i class="icon icon-home3"></i></a></li>
        <li><a class="scroll color2" href="#services"><span>Técnicas</span><i class="icon icon-file-text"></i></a></li>
        <li><a class="scroll color3" href="#about"><span>Nosotros</span><i class="icon icon-question"></i></a></li>
        <li><a class="scroll color5" href="#team"><span>Profesores</span><i class="icon icon-users"></i></a></li>
        <li><a class="scroll color7" href="#gallery"><span>Galería</span><i class="icon icon-images"></i></a></li>
        <li><a class="scroll color9" href="#contact"><span>Contactanos</span><i class="icon icon-bubble"></i></a></li>
    </ul>
    <div class="btn-nav"> <span class="glyphicon glyphicon-menu-hamburger"></span>  </div>

    <div class="header-section" id="home">
        <div class="header-top">
            <div class="container">
                <div class="inner-head">
                    <p class="col-md-3 col-sm-12 phone"><i class="glyphicon glyphicon-earphone"></i>(809) 560-8529, Dist. Educ. 15-05</p>
                    <p class="col-md-5 col-sm-12 location"><i class="glyphicon glyphicon-map-marker"></i>Prolongación 27 de Febrero #796,Sto Dgo</p>

                    <p style="float:right;" class="col-md-3 col-sm-12 mail"><i class="glyphicon glyphicon-user"></i>
                    @if (Auth::check())
                        <a href="{!!URL::to('admin/teacher')!!}">Ir a Panel De Administración</a></p>
                    @else
                        <a href="{!!URL::to('admin/login')!!}">Iniciar Sesión</a></p>

                    @endif
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="down"><a class="scroll" href="#about"><img src="images/down.png" alt=""/></a></div>
        </div>
        <!--logo-->
    </div>

<!--banner-->
<div class="banner">
    <div class="banner-top">
        <h3>Politécnico Madre Rafaela Ybarra</h3>
        <a class="ready" href="#">"No se cansen de hacer el bien"</a>
    </div>
</div>
<svg id="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
</svg>
<!--start-services-->
<div class="services" id="services">
    <div class="container">
        <h3 class="tittle">Técnicas </h3>
        <div class="box2">
            <div class="col-md-3 col-lg-3 col-sm-2 s-1"><a href="#" class="links">
                <div class="view view-fifth">
                    <i class="glyphicon icon-display"></i>
                    <div class="mask">
                        <h4>Informática</h4>
                        <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                        <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                    </div>
                    <h3>Informatica</h3>
                </div>
            </a>

        </div>
        <div class="col-md-3 col-lg-3 col-sm-2 s-2"><a href="#" class="links">
            <div class="view view-fifth">
                <i class="glyphicon icon-calculator"></i>
                <div class="mask">
                    <h4>Contabilidad</h4>
                    <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                    <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                </div>
                <h3>Contabilidad</h3>
            </div>
        </a>

    </div>
    <div class="col-md-3 col-lg-3 col-sm-2 s-3"><a href="#" class="links">
        <div class="view view-fifth">
            <i class="glyphicon icon-cart"></i>
            <div class="mask">
                <h4>Mercadotecnia</h4>
                <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
            </div>
            <h3>Mercadotecnia</h3>
        </div>
    </a>

</div>
<div class="col-md-3 col-lg-3 col-sm-2 s-1"><a href="#" class="links">
    <div class="view view-fifth">
        <i class="glyphicon icon-library"></i>
        <div class="mask">
            <h4>Hotelera</h4>
            <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
            <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
        </div>
        <h3>Hoteleria</h3>
    </div>
</a>

</div>
<div class="col-md-3 col-sm-2 s-2"><a href="#" class="links">
    <div class="view view-fifth">
        <i class="glyphicon icon-power"></i>
        <div class="mask">
            <h4>Electricidad</h4>
            <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
            <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
        </div>
        <h3>Electricidad</h3>
    </div>
</a>

</div>
<div class="col-md-3 col-lg-3 col-sm-2 s-3"><a href="#" class="links">
    <div class="view view-fifth">
        <i class="glyphicon icon-power-cord"></i>
        <div class="mask">
            <h4>Electrónica</h4>
            <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
            <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
        </div>
        <h3>Electronica</h3>
    </div>
</a>

</div>

<div class="col-md-3 col-lg-3 col-sm-2 s-3"><a href="#" class="links">
    <div class="view view-fifth">
        <i class="glyphicon icon-svg"></i>
        <div class="mask">
            <h4>Refrigeración</h4>
            <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
            <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
        </div>
        <h3>Refrigeracion</h3>
    </div>
</a>

</div>
</div>
</div>
</div>
<!--end-about-->
<!--about-->
<!--about-->
<div class="about" id="about">
    <div class="container">
        <h3 class="tittle ab">Sobre Nosotros</h3>
        <div class="about-top">
            <div class="col-md-7 info">
                <h5>¿Por Que escoger al Pomaray?</h5>
                <p>The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife. These days are all Happy and Free. These days are all share them with me. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight.</p>
                <section class="ac-container">
                    <div>
                        <input id="ac-1" name="accordion-1" type="checkbox" />
                        <label for="ac-1">¿Cuáles son los documentos que debo presentar el día de admisión?</label>
                        <article class="ac-small">
                            <p>La convocatoria de admisión de la escuela que elegiste señala claramente cuáles son los documentos que deberás presentar (en original y fotocopias). Revisa bien los requisitos generales y en su caso, los específicos para conocer todos los documentos que deberás presentar y sus características.</p>
                        </article>
                    </div>
                    <div>
                        <input id="ac-2" name="accordion-1" type="checkbox" />
                        <label for="ac-2">Lorem ipsum dolor sit amet</label>
                        <article class="ac-medium">
                            <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                        </article>
                    </div>
                    <div>
                        <input id="ac-3" name="accordion-1" type="checkbox" />
                        <label for="ac-3">Lorem ipsum dolor sit amet</label>
                        <article class="ac-large">
                            <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
                        </article>
                    </div>
                    <div>
                        <input id="ac-4" name="accordion-1" type="checkbox" />
                        <label for="ac-4">Lorem ipsum dolor sit amet</label>
                        <article class="ac-large">
                            <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
                        </article>
                    </div>
                </section>

                <div class="ab-bottom">
                    <h5>Who we are</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum.</p>
                </div>
                
            </div>
            <div class="col-md-5 ab-text">
                <img src="images/pomaray.jpg" alt=""/>
                <div class="quote-author-info padding5"><p>There are many variations of passages of Lorem Ipsum available, but the majority some lorem.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        
    </div>
</div>
<!--//about-->

<svg id="curveDownColor1" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path  d="M0 0 C 50 100 80 100 100 0 Z"></path>
</svg>
<div class="team" id="team">
    <div class="container">
        <h3 class="tittle ab">Nuestro Profesores</h3>
        <div class="team-bottom">
            @foreach($teachers as $teacher)
                <div class="col-md-3 team-left">
                    <a href="#" class="links">
                    @if ($teacher->image == "")
                        <img src="images/nada.jpg" alt="">
                        @elseif ($teacher->image != "")
                            <img src="images/galeria/{{$teacher->image}}" alt="">
                        @else
                    @endif
                        <div class="captn">
                            <h4>{{$teacher->Course}} {{$teacher->technique}}</h4>
                            <p>{{$teacher->CelPhone}}</p>
                        </div>
                        <div class="team-text">
                            <h5>{{$teacher->Name}}</h5>
                            <p>Profesor de {{$teacher->technique}}</p>
                        </div>
                    </a>                    
                </div>
            @endforeach
            
            
            
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<svg id="curveDownColor2" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path  d="M0 0 C 50 100 80 100 100 0 Z"></path>
</svg>

<div class="gallery" id="gallery">
    <div class="container">
        <h3 class="tittle">Galería</h3>
        <div class="top-gallery">

           <div class=" demo-gallery mrb50">
                <div id="aniimated-thumbnials"  class="list-unstyled justified-gallery " >
                    @foreach ($files as $file)
                    @if ($file->category != 'video')
                        <a class="jg-entry" href="../images/galeria/{{$file->image}} " data-sub-html="{{$file->category}}" style="width: 187px; height: 126.144px; top: 6px; left: 6px; opacity: 1;">
                            <img class="img-responsive" src="../images/galeria/{{$file->image}}" style="width: 187px; height: 127px; margin-left: -93.5px; margin-top: -63.5px;">
                            <div class="demo-gallery-poster">
                                <img src="../img/zoom.png">
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            </div>
                        </a>
                    @else
                        <a class="jg-entry" href="../images/galeria/{{$file->image}}" data-poster="" data-sub-html="{{$file->category}}" style="width: 187px; height: 126.144px; top: 6px; left: 6px; opacity: 1;">
                            <img class="img-responsive video-y" data-video="{{$file->image}}" src="" style="width: 187px; height: 127px; margin-left: -93.5px; margin-top: -63.5px;">
                            <div class="demo-gallery-poster">
                                <img src="../img/s2.png">
                            </div>
                        </a>
                    @endif
                        
                    @endforeach
                </div>      
                    <center>
                        <a class="agalleria" style="font-size:19px;" href="{!!URL::to('/gallery')!!}">Ver Toda La Galeria</a>
                    </center>
            <div class="clearfix"> </div>
        </div>
    </div>  
</div>
    <div id="contact" class="contact">
        <div class="container">
            <h3 class="tittle">Contactanos</h3>
            <div class="col-md-6 box">
                {!!Form::open(['route'=> 'email.store', 'method' => 'POST'])!!}
                    <p class="your-para">Nombre :</p>
                   {!!Form::text('name',null,['required'])!!}
                    <p class="your-para">Correo :</p>
                   {!!Form::email('email',null,['required'])!!}
                    <p class="your-para">Mensaje :</p>
                   {!!Form::textarea('mensaje',null,['required'])!!}
                    <ul class="actions">
                        {!!Form::submit('Enviar',['class'=>'style1'])!!}
                        {!!Form::reset('Borrar',['class'=>'style2'])!!}
                    </ul>           
                {!!Form::close()!!}
            </div>
            <div class="col-md-6 contact-info">
                <h6>Para Mas Información Por favor enviarnos un correo.</h6>
                <p>Ofrezca una información detallada para poder responderle de manera precisa.</p>
                
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//contact-->

    <div class="copy">
        <p>&copy; 2016 Pomaray. Todos los derechos reservados | Diseñado Por <a href="http://tech-la.hostei.com/index.php" target="_blank">Tech-LA</a> </p>
    </div>
 <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    {!!Html::script('js/lg/jquery.justifiedGallery.min.js')!!}
    {!!Html::script('js/lg/lightgallery.js')!!}
    {!!Html::script('js/lg/transition.js')!!}
    {!!Html::script('js/lg/lg-fullscreen.js')!!}
    {!!Html::script('js/lg/lg-thumbnail.js')!!}
    {!!Html::script('js/lg/lg-video.js')!!}
    {!!Html::script('js/lg/lg-autoplay.js')!!}
    {!!Html::script('js/lg/lg-zoom.js')!!}
    {!!Html::script('js/lg/lg-hash.js')!!}
    {!!Html::script('js/lg/lg-pager.js')!!}
    {!!Html::script('js/lg/jquery.mousewheel.min.js')!!}
    {!!Html::script('js/gallery.js')!!}
    <script type="text/javascript">
        $(document).ready(function() {
            gallery();
            $('.video-y').each(function (){
                var url = $(this).attr('data-video');
                var videoid = url.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
                console.log(videoid[1]);
                $(this).attr('src','http://img.youtube.com/vi/'+videoid[1]+'/0.jpg');
                $(this).parent().attr('data-poster','http://img.youtube.com/vi/'+videoid[1]+'/0.jpg');

            });
             $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
            $().UItoTop({ easingType: 'easeOutQuart' });
            $(".btn-nav").click(function(){
                $("ul.side_nav").toggleClass("nav-left");
                $(this).toggleClass("opacity");
            });
        });
    </script>
</body>
</html>
