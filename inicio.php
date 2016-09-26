<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>::Furbink Studio Tattoo::</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/front/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            $(document).ready(function(){
                $("#mch").click(function(){
                    $("#tattoo").slideToggle();
                });
                $("#mch1").click(function(){
                    $("#piercing").slideToggle();
                });
                $("#mch2").click(function(){
                    $("#escarificacion").slideToggle();
                });
                $("#mch3").click(function(){
                    $("#servicename").slideToggle();
                });
        });
    </script>
    </head>


    <body>

        <!-- Navigation -->
        <ul class="topnav" id="myTopnav">
          <li><a href="#header">Inicio</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Galeria</a></li>
          <li><a href="#contact">Contacto</a></li>
          <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()"><span class="glyphicon glyphicon-collapse-down"></span></a>
        </li>
    </ul>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center2">
            <h1 id="a">Furbink Tattoo</h1>
            <br>
        </div>
    </header>
    <img id="head" class="img-responsive" src="assets/front/img/machinetattoo.gif">
    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    
    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Servicios</h1>
        </div>
    </aside>    
    <section id="services" class="services bg-dark">
        <div class="container" id="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i id="mch" class="fa-stack-2x"><img class="img-responsive" src="assets/front/img/machine.png"></i>
                                </span>
                                <h4>
                                    <strong>Tattoo</strong>
                                </h4>
                            </div>
                            <div id="tattoo">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde dolorem ullam reprehenderit nostrum sunt maiores, tenetur, adipisci laborum! Labore laboriosam numquam cumque placeat dolore eaque odit repellat saepe eum delectus.
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i id="mch1" class="fa-stack-2x"><img class="img-responsive" src="assets/front/img/machine.png"></i>
                                </span>
                                <h4>
                                    <strong>Piercing</strong>
                                </h4>
                            </div>
                            <div id="piercing">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eveniet animi, laudantium, et necessitatibus minus officiis laboriosam molestiae provident ex incidunt tenetur repellat quas? Et illo error, repudiandae asperiores aut.
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i id="mch2" class="fa-stack-2x"><img class="img-responsive" src="assets/front/img/machine.png"></i>
                                </span>
                                <h4>
                                    <strong>Escarificaciones</strong>
                                </h4>
                            </div>
                            <div id="escarificacion">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, mollitia, sit! Aliquid atque, rerum quo repellendus corrupti temporibus praesentium nulla debitis eveniet accusantium vero ducimus, voluptatem nostrum! At, rerum nemo!
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i id="mch3" class="fa-stack-2x"><img class="img-responsive" src="assets/front/img/machine.png"></i>
                                </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                            </div>
                            <div id="servicename">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia molestias quo enim, nihil assumenda numquam nisi magnam! Illo distinctio placeat, facere debitis ea magni, ut, in facilis optio, eius cumque.
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Galeria</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/front/img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/front/img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/front/img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/front/img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="callout" id="contact">
        <div class="text-vertical-center">
            <h1>Contacto</h1>
        </div>
    </aside>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" method="POST" action="protected/controllers/insertMensaje.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ingresa tu nombre" id="nombre" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Ingresa tu correo" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Escribe algo..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <input type="submit" class="btn btn-dark btn-lg" value="Enviar mensaje">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Map -->
<hr>
<div>
    <section class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.802214428123!2d-98.8041336856184!3d19.203839187014722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce22faea918457%3A0xed57f1fbda0aac23!2sAv.+Morelos+42%2C+Tlalmanalco%2C+56700+Tlalmanalco%2C+M%C3%A9x.%2C+M%C3%A9xico!5e0!3m2!1ses-419!2sco!4v1474058669441" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
</div>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>Furbink Tattoo</strong>
                </h4>
                <p>Avenida Morelos #42 Int #8
                    <br>Tlalamanalco, Edo. de México 56723</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i>01 999 396 6486</li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/furbinktattoo/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Furbink 2016</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
        var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
        $('.map').on('click', onMapClickHandler);

        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</body>

</html>
