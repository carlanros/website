<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- If IE use the latest rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Set the page to the width of the device and set the zoon level -->
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <meta name="description" content="Junior utvecklare">
    <meta name="keywords" content="web design">
    <meta name="author" content="Carl Anros">
    <title>Anros.se - Mobile and Web Design Services | Welcome</title>


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body>
    <div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>            
                </button>
                <a href="http://www.anros.se" class="navbar-brand">Anros.se</a>

            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#header">Hem </a></li>
                    <li><a href="#services">Frilans</a></li>
                    <li><a href="#pricing">Utbildning</a></li>
                    <li><a href="#team">Om</a></li>
                    <li><a href="#client">Aktuellt</a></li>
                    <li><a href="#footer">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--- end navigation -->

    <!--- header -->
    <div id="header" class="header">
        <div class="container">
            <script type="text/javascript" src="js/test.js"></script>

            <div class="row">
                <div class="col-lg-6 col-md-6 wow bounceInLeft">
                    <h1>Praktikplats sökes till våren 2018!</h1>
                    <P>Hej,<br> jag går andra året på en yrkeshögskoleutbildning inom applikationsutveckling för mobila enheter. Nu gör jag min första praktik hos todaysweb.se genom att utveckla en app till ett av deras projekt. Till praktik 2 efter fördjupningskursen
                        inom IOS, söker jag nu en praktikplats till våren 2018. Jag vill prova på och fördjupa min kunskaper inom webb och apputveckling för android och IOS. Förhoppningsvis kommer jag att kunna tillföra något till er också.</P>
                    <button class="btn btn-lg btn-success" id="btnLink" onclick="btntest_onclick()">utbildningen</button>
                    <script>
                        function btntest_onclick() {
                            window.open("http://www.newton.se/utbildning/applikationsutvecklare-for-mobila-enheterstockholm/");
                        }
                    </script>

                    <a href="cv.pdf" download>
                        <button class="btn btn-lg btn-success">Hämta CV</button>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 wow bounceInRight">
                    <img src="img/SmallLogo1.png" alt="loga">
                </div>

            </div>
        </div>
    </div>
    <!--- end header -->

    <!--- services -->
    <div id="services" class="services">
        <div class="container">
            <h2 class="wow fadeInUp">Frilans utvecklare</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Under utbildningen kan jag hjälpa dig med mindre projekt</p>
            <div class="row">
                <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                    <h4>web design</h4>
                    <p>Vill du synas på webben, kan jag hjälpa dig att bygga din site</p>

                </div>
                <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.4s">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <h4>mobile app design</h4>
                    <p>Vill du förverkliga din app idé kan jag hjälpa dig inom android i nuläget, senare kommer jag även kunna utveckla inom IOS</p>

                </div>
                <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
                    <i class="fa fa-database" aria-hidden="true"></i>
                    <h4>database design</h4>
                    <p>Behöver du en databas, kan jag hjälpa dig med enklare databaser</p>

                </div>
                <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                    <i class="fa fa-university" aria-hidden="true"></i>
                    <h4>UX design</h4>
                    <p>Mycket att tänka på vid skapandet av en applikation, jag kan hjälpa dig från skiss till prototyp</p>

                </div>
            </div>
        </div>
    </div>
    <!--- end services -->

    <!--- pricing -->
    <div id="pricing" class="pricing">
        <div class="container">
            <div class="row">
                <h2 class="wow fadeInUp">Utbildning</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Genomförda och avslutade kurser på utbildningen</p>
                <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="0.8s">
                    <div class="packages">
                        <h4>Java</h4>
                        <P>Objektorienterad programmering</P>
                        <b>Godkänd</b>
                        <hr>
                        <h4>Webb/databas</h4>
                        <P>Front-end utveckling och databas</P>
                        <br>
                        <b> Väl godkänd</b>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="1.2s">
                    <div class="packages">
                        <h4>UX grund</h4>
                        <p>Design och kravhanterings arbete</p>
                        <b>Godkänd</b>
                        <hr>
                        <h4>UX fortsättning</h4>
                        <p>Design och layout metoder i projekt</p>
                        <br>
                        <b>Väl godkänd</b>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="1.6s">
                    <div class="packages">
                        <h4>Android</h4>
                        <P>Apputveckling med databas i android studio</P>
                        <b>Väl godkänd</b>
                        <hr>
                        <h4>Cross-platform</h4>
                        <P>Utveckling av hybridapplikationer</P>
                        <br>
                        <b>Godkänd</b>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="2s">
                    <div class="packages">
                        <h4>Agil utveckling</h4>
                        <p>Agila utvecklingsmetoder och tankesätt</p>
                        <b>Väl godkänd</b>
                        <hr>
                        <h4>Övergripande</h4>
                        <p>Ämnes övergripande applikation utveckling</p>
                        <br>
                        <b>Väl godkänd</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- end pricing -->

    <!--- Team -->
    <div id="team" class="team">
        <div class="container">
            <div class="row">
                <h2 class="wow fadeInUp">Om mig</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Lite kort om mig</p>
                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="2s">
                    <h4>Carl Anros</h4>
                    <p>Privat en engagerad och hängiven make samt far till två busungar på 9 och 11år.<br> Har drivet att förändra, såväl privat som inom arbetslivet.<br>Ser möjligheter till utmaningar där andra ser problem.</p>
                    <img src="img/calles11.jpg" class="img-circle" alt=""></img>
                    <a href="https://www.facebook.com/anrossoftwaredevelopment"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/company-beta/24996324"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="mailto:info@anros.se"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.5s">
                    <h4>Min vision</h4>
                    <p>"Det kommer aldrig mer att gå så långsamt som idag”<br> En sak är säker, vi kommer att få uppleva fantastiska saker i närtid vad avser utvecklingen av applikationer till mobila enheter.
                        <br>Allt kommer att vara möjligt, även det du inte kan tänka dig i dag!<br> Tänk vilka beslut som kommer att kunna fattas med direkt tillgång till all information online.<br>Vem vill inte ligga i framkant inom digitaliseringen,
                        ingen gillar en fegis!
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.0s">
                    <h4>Tidigare erfarenheter</h4>
                    <p>Jag har en gedigen erfarenhet från arbetslivet inom flera branscher och olika befattningar.<br> Det ger mig ett klart försprång vad avser att analysera och se konsekvenser av olika åtgärder.<br> Dessbättre med den fördelen att jag
                        ser det med positivitetsglasögon på!<br></p>
                </div>
            </div>
        </div>
    </div>
    <!--- end team -->

    <!--- clients -->
    <div id="client" class="clients">
        <div class="container">
            <div class="row">
                <h2 class="wow fadeInUp">Aktuellt</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Vad händer närmast</p>
                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="2s">


                </div>
                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.5s">
                    <p>Nu gör jag min första praktikperiod hos todaysweb.se, där jag är med och utvecklar en hybrid App. Efter nyår blir det fördjupningskurs inom IOS med xcode och swift.</p>
                </div>

                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.0s">

                </div>
            </div>
        </div>
    </div>
    <!--- end clients -->

    <!--- contact -->

    <div id="contact" class="contact">


        <div class="container">
            <div class="row">
                <h2 class="wow fadeInUp">Kontakt</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Kontakta oss gärna med era ideér</p>
                <form action="form/process.php" method="post">
                    <div class="col-lg-6 col-md-6">
                        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Namn" name="name" value="<?= $name ?>" tabindex="1" autofocus>

                            <span class="error"><?= $name_error ?></span>

                        </div>
                        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Epost" name="email" value="<?= $email ?>" tabindex="2">

                            <span class="error"><?= $email_error ?></span>

                        </div>

                        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Telefon" name "phone" value="<?= $phone ?>" tabindex="3">

                            <span class="error"><?= $phone_error ?></span>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="input-group wow fadeInUp" data-wow-delay="2.0s">
                            <textarea name="" id="" cols="80" rows="6" class="form-control" name="message" tabindex="4">
                                        </textarea>
                        </div>
                        <button class="btn btn-lg wow fadeInUp" data-wow-delay="2.4s" type="submit" id="contact-submit" data-submit="...Sending">Skicka meddelande</button>
                        <div class="success">
                            <?= $success ?>
                        </div>


                    </div>
                </form>
            </div>
        </div>

    </div>

    <!--- end contact -->

    <!--- footer -->
    <div id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h4>Hitta </h4>
                    <p><i class="fa fa-home" aria-hidden="true"></i> Henriksbergsvägen 83</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@anros.se"> info@anros.se</a></p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> 070 6857290</p>
                    <p><i class="fa fa-globe" aria-hidden="true"></i><a href="http://www.anros.se"> www.anros.se</a></p>

                </div>
                <div class="col-lg-4 col-md-4">




                </div>

                <div class="col-lg-4 col-md-4">
                    <h4>Följ </h4>
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/anrossoftwaredevelopment"><img src="img/facebook.png"></a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com"><img src="img/twitter.png"></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company-beta/24996324"><img src="img/linkedin.png"></a>
                        </li>
                        <li>
                            <a href="http://www.youtube.com"><img src="img/youtube.png"></a>
                        </li>
                        <li>
                            <a href="http://www.plus.google.com"><img src="img/google.png"></a>
                        </li>
                    </ul>


                    <!--<input type="email" placeholder="subscribe for update"><button class="btn btn-success">subscribe</button>-->
                </div>
                <div class="col-lg-12 col-md-12">

                    <p class="design">
                        <a href="http://www.anros.se"><img src="img/loga1.png" alt="">Design Carl Anros - Anros.se</a>
                    </p>
                    <p class="copy">&copy Anros.se 2017</p>

                </div>
            </div>
        </div>




























        <!-- Angular -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>