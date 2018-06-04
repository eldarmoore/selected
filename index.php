<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/prefixfree.min.js"></script>
    <title>SELECTED - The Power of Web Results</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#featured"><img src="img/selected-logo.png" alt="logo" height="100%"></a>
            </div><!--navbar-header-->
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#featured">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#ourteam">Our Team</a></li>
                    <li><a href="#joinus">Join Us</a></li>
                    <li><a href="#signup" class="btn btn-success btn-signup">SIGN UP</a></li>
                </ul>
            </div><!--collapse navbar-collapse-->
        </div><!--container-->
    </nav>

    <div class="carousel slide" data-ride="carousel" id="featured">
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/shutterstock_714872176.jpg" alt="Education">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>THIS IS YOUR MISSION</h1>
                        <p>THIS PAGE NEED TO BE PERFECT FOR ALL BROWSERS & SCREENS</p>
                        <p><a class="btn btn-success" href="#" role="button">GET STARTED</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/shutterstock_305140589.jpg" alt="Success">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>THIS IS YOUR MISSION</h1>
                        <p>THIS PAGE NEED TO BE PERFECT FOR ALL BROWSERS & SCREENS</p>
                        <p><a class="btn btn-success" href="#" role="button">GET STARTED</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Services Section -->
<div class="page" id="services">
    <div class="content container">
        <h2>Services</h2>
        <img src="img/s-line.svg" alt="sep line" class="s-line">
        <p>Great design is about more than style, it's about being yourself, communicating your ideas and expressing your values.</p>
        <div class="row">

            <div id="tabs-options">
                <div class="col-sm-2 col-md-2, col-lg-2">
                    <button class="tablinks" onclick="openTab(event, 'for-advertisers')" id="defaultOpen">
                        <img class="icon img-fluid" src="img/for-advertisers.svg" alt="Icon" id="img-for-advertisers">
                        <h3>For Advertisers</h3>
                    </button>
                </div>

                <div class="col-sm-2 col-md-2 col-lg-2 col-half-offset">
                    <button class="tablinks" onclick="openTab(event, 'for-publishers')">
                        <img class="icon img-fluid" src="img/for-publishers.svg" alt="Icon" id="img-for-publishers">
                        <h3>For Publishers</h3>
                    </button>
                </div>

                <div class="col-sm-2 col-md-2 col-lg-2 col-half-offset">
                    <button class="tablinks" onclick="openTab(event, 'technology')">
                        <img class="icon img-fluid" src="img/technology.svg" alt="Icon" id="img-technology">
                        <h3>Technology</h3>
                    </button>
                </div>

                <div class="col-sm-2 col-md-2 col-lg-2 col-half-offset">
                    <button class="tablinks" onclick="openTab(event, 'creative-team')">
                        <img class="icon img-fluid" src="img/creative-team.svg" alt="Icon" id="img-creative-team">
                        <h3>Creative Team</h3>
                    </button>
                </div>

                <div class="col-sm-2 col-md-2 col-lg-2 col-half-offset">
                    <button class="tablinks" onclick="openTab(event, 'web-developers')">
                        <img class="icon img-fluid" src="img/web-developers.svg" alt="Icon" id="img-web-developers">
                        <h3>Web Developers</h3>
                    </button>
                </div>
            </div>

            <div id="tabs-content">
                <div id="for-advertisers" class="tabcontent">
                    <p class="col-sm-6"><span class="30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cupiditate, doloribus eligendi, esse facilis hic inventore nemo nisi possimus quibusdam quod, saepe soluta vel? Adipisci animi dolores molestias quam vitae.</span></p>
                    <img class="col-sm-6" src="img/tabs-img.png" alt="content">
                </div>

                <div id="for-publishers" class="tabcontent">
                    <img class="col-sm-6" src="img/tabs-img.png" alt="content">
                    <p class="col-sm-6">Phasellus et risus elit. Aenean eget libero porta, viverra augue quis, euismod ipsum. Etiam a tincidunt velit. Pellentesque ut elementum nulla, eu scelerisque dolor. Cras ornare est vitae enim finibus, ut vehicula mauris congue. Pellentesque malesuada, turpis tristique sollicitudin euismod, augue orci auctor turpis, at convallis metus urna ac erat. In rutrum malesuada lorem, eget tempus magna aliquam quis.

                        Duis tempus placerat nibh, at rhoncus sapien sodales eu. Praesent consequat porttitor neque, nec placerat arcu dictum eget. Etiam elit tortor, dictum pulvinar est eu, consequat faucibus tellus. Aenean dapibus congue volutpat. Cras nec tortor et turpis laoreet scelerisque id vel lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>

                <div id="technology" class="tabcontent">
                    <p class="col-sm-6"> Sed pellentesque aliquet libero, quis rhoncus ante venenatis sed. Phasellus suscipit massa vitae elit porta efficitur. Sed at lacus eget ligula finibus feugiat. Donec ipsum nisl, lobortis sit amet gravida tempor, varius quis purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eu neque a magna posuere vehicula eu ac nulla. Vestibulum a tempus elit. Pellentesque sem ex, convallis in auctor ut, sagittis dictum odio.

                        Suspendisse ullamcorper imperdiet lacus sit amet pretium. Mauris bibendum orci consectetur, porta risus laoreet, volutpat lacus. Aenean cursus neque vel justo vehicula tincidunt. Aenean convallis faucibus vestibulum. Cras in faucibus dolor, vitae suscipit magna. Suspendisse maximus imperdiet purus sed porta. Vestibulum dapibus augue sit amet orci elementum tristique. Sed rhoncus lobortis nibh a suscipit. </p>
                    <img class="col-sm-6" src="img/tabs-img.png" alt="content">
                </div>

                <div id="creative-team" class="tabcontent">
                    <img class="col-sm-6" src="img/tabs-img.png" alt="content">
                    <p class="col-sm-6"><span class="30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cupiditate, doloribus eligendi, esse facilis hic inventore nemo nisi possimus quibusdam quod, saepe soluta vel? Adipisci animi dolores molestias quam vitae.</span></p>
                </div>

                <div id="web-developers" class="tabcontent">
                    <p class="col-sm-6"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu ornare leo. Morbi sed turpis eget arcu eleifend vestibulum. Nunc non tortor risus. Suspendisse volutpat eu purus a imperdiet. Etiam vitae nisl ac nisl egestas tempus vel a elit. Suspendisse auctor, mi at tristique pellentesque, ex eros hendrerit tortor, at dapibus velit orci rhoncus ipsum. Phasellus et risus elit. Aenean eget libero porta, viverra augue quis, euismod ipsum. Etiam a tincidunt velit. Pellentesque ut elementum nulla, eu scelerisque dolor. Cras ornare est vitae enim finibus, ut vehicula mauris congue. Pellentesque malesuada, turpis tristique sollicitudin euismod, augue orci auctor turpis, at convallis metus urna ac erat. In rutrum malesuada lorem, eget tempus magna aliquam quis.

                        Duis tempus placerat nibh, at rhoncus sapien sodales eu. Praesent consequat porttitor neque, nec placerat arcu dictum eget. Etiam elit tortor, dictum pulvinar est eu, consequat faucibus tellus. Aenean dapibus congue volutpat. Cras nec tortor et turpis laoreet scelerisque id vel lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ac justo tincidunt, dictum turpis ut, euismod sem. Donec posuere condimentum velit, vel laoreet dolor viverra sed. In rhoncus mauris a viverra convallis. Curabitur sit amet quam interdum, congue eros tempor, vulputate metus. Cras nec molestie augue, a bibendum nunc. In placerat est sed volutpat tempus.</p>
                    <img class="col-sm-6" src="img/tabs-img.png" alt="content">
                </div>
            </div>


        </div><!--row-->
    </div><!--content container-->
</div><!-- services page -->

<!-- Our Team Section-->
<div class="page" id="ourteam">

    <div class="container">
        <h2 id="team">Our Team</h2>
        <img src="img/s-line.svg" alt="sep line" class="s-line">
        <p><span class="50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquid culpa deleniti ducimus enim est fugiat impedit iusto, maiores neque officiis porro provident qui repellendus repudiandae soluta tempore, voluptatum.</span></p>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div id="Carousel" class="carousel slide">

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div class="team col-md-3">
                                        <a href="#" class="thumbnail">
                                            <img src="img/dev1.png" alt="Photo of Albert Developer" style="max-width:100%;">
                                            <div class="overlay">
                                                <h3>Albert</h3>
                                                <p>Developer</p>
                                            </div>
                                            <div class="overlay2">
                                                <a href="#"  title="User Profile">
                                                    <div class="icon">
                                                        <ul>
                                                            <li><a href="#" class="fa fa-skype"></a></li>
                                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            <li><a href="#" class="fa fa-envelope"></a></li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="team col-md-3">
                                        <a href="#" class="thumbnail"><img src="img/dev2.png" alt="Photo of Albert Developer" style="max-width:100%;">
                                            <div class="overlay">
                                                <h3>Albert</h3>
                                                <p>Developer</p>
                                            </div>
                                            <div class="overlay2">
                                                <a href="#"  title="User Profile">
                                                    <div class="icon">
                                                        <ul>
                                                            <li><a href="#" class="fa fa-skype"></a></li>
                                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            <li><a href="#" class="fa fa-envelope"></a></li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="team col-md-3">
                                        <a href="#" class="thumbnail"><img src="img/dev3.png" alt="Photo of Albert Developer" style="max-width:100%;">
                                            <div class="overlay">
                                                <h3>Albert</h3>
                                                <p>Developer</p>
                                            </div>
                                            <div class="overlay2">
                                                <a href="#"  title="User Profile">
                                                    <div class="icon">
                                                        <ul>
                                                            <li><a href="#" class="fa fa-skype"></a></li>
                                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            <li><a href="#" class="fa fa-envelope"></a></li>
                                                        </ul>
                                                    </div>
                                                </a>>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="team col-md-3">
                                        <a href="#" class="thumbnail"><img src="img/dev4.png" alt="Photo of Albert Developer" style="max-width:100%;">
                                            <div class="overlay">
                                                <h3>Albert</h3>
                                                <p>Developer</p>
                                            </div>
                                            <div class="overlay2">
                                                <a href="#"  title="User Profile">
                                                    <div class="icon">
                                                        <ul>
                                                            <li><a href="#" class="fa fa-skype"></a></li>
                                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            <li><a href="#" class="fa fa-envelope"></a></li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div><!--.row-->
                            </div><!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="team col-md-3">
                                        <a href="#" class="thumbnail">
                                            <img src="img/dev1.png" alt="Photo of Albert Developer" style="max-width:100%;">
                                            <div class="overlay">
                                                <h3>Albert</h3>
                                                <p>Developer</p>
                                            </div>
                                            <div class="overlay2">
                                                <a href="#"  title="User Profile">
                                                    <div class="icon">
                                                        <ul>
                                                            <li><a href="#" class="fa fa-skype"></a></li>
                                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            <li><a href="#" class="fa fa-envelope"></a></li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="team col-md-3">
                                        <a href="#" class="thumbnail"><img src="img/dev2.png" alt="Photo of Albert Developer" style="max-width:100%;">
                                            <div class="overlay">
                                                <h3>Albert</h3>
                                                <p>Developer</p>
                                            </div>
                                            <div class="overlay2">
                                                <a href="#"  title="User Profile">
                                                    <div class="icon">
                                                        <ul>
                                                            <li><a href="#" class="fa fa-skype"></a></li>
                                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            <li><a href="#" class="fa fa-envelope"></a></li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="team col-md-3">
                                        <a href="#" class="thumbnail"><img src="img/dev3.png" alt="Photo of Albert Developer" style="max-width:100%;">
                                            <div class="overlay">
                                                <h3>Albert</h3>
                                                <p>Developer</p>
                                            </div>
                                            <div class="overlay2">
                                                <a href="#"  title="User Profile">
                                                    <div class="icon">
                                                        <ul>
                                                            <li><a href="#" class="fa fa-skype"></a></li>
                                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            <li><a href="#" class="fa fa-envelope"></a></li>
                                                        </ul>
                                                    </div>
                                                </a>>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="team col-md-3">
                                        <a href="#" class="thumbnail"><img src="img/dev4.png" alt="Photo of Albert Developer" style="max-width:100%;">
                                            <div class="overlay">
                                                <h3>Albert</h3>
                                                <p>Developer</p>
                                            </div>
                                            <div class="overlay2">
                                                <a href="#"  title="User Profile">
                                                    <div class="icon">
                                                        <ul>
                                                            <li><a href="#" class="fa fa-skype"></a></li>
                                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            <li><a href="#" class="fa fa-envelope"></a></li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div><!--.row-->
                            </div><!--.item-->

                        </div><!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                    </div><!--.Carousel-->
                </div>


            </div>
        </div>
    </div><!--.container-->
</div><!-- team page -->

<!-- Joins Us Section-->

<div class="page" id="joinus">
    <div class="content container">
        <h2>Join Us</h2>
        <img src="img/s-line.svg" alt="sep line" class="s-line">
        <p>Great design is about more than style, it's about being yourself, communicating your ideas and expressing your values.</p>

        <div class="row">

            <div>
                <!-- CONTACT -->
                <div class="col-sm-6" id="contact">
                    <ul>
                        <li><p><img src="img/location-ico.svg" alt="Location">Harokmim 26 Azrieli Center B Holon</p></li>
                        <li><p><img src="img/cell-phone-ico.svg" alt="Phone">Tel: +97237789999</p></li>
                        <li><p><img src="img/cell-phone-ico.svg" alt="Phone">Fax: +97237789990</p></li>
                        <li><p><img src="img/mail-ico.svg" alt="Mail">support@selected.co.il</p></li>
                    </ul>
                </div>

                <!-- FORM -->
                <div class="col-sm-6">
                    <form method="post" action="action_page.php">
                        <input class="type-field" type="text" name="name" value="" id="name" required="required" aria-required="true" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" title="Your Name" spellcheck="false" placeholder="Your Name">
                        <br>
                        <input class="type-field" type="text" name="email" id="email" value="" required="required" aria-required="true" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" title="Your email address" type="email" spellcheck="false" size="30" placeholder="Your Email" />
                        <br>
                        <input class="type-field" type="text" name="subject" value="" placeholder="Your Subject" id="subject" required>
                        <br>
                        <textarea class="type-field" id="comments" name="comments" style="height:150px;" placeholder="Your Message" required></textarea>
                        <br><br>
                        <input type="submit" name="send" class="btn btn-success" value="Send Message">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Footer Section -->

<footer>
    <div class="content container">
        <div class="row">
            <div class="col-sm-8">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#featured"><img src="img/selected-logo-footer.png" alt="logo"></a>
                    </div><!--navbar-header-->
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">How We Do It</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Publisher</a></li>
                        <li><a href="#">Join us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-4 social">
                <ul id="social">
                    <li><h3>Follow Us:</h3></li>
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-youtube"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p>Copyright 2018 &copy; - All Rights reserved - SELECTED </p>
    </div>
</footer>

<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<!-- My Scripts Section -->
<script src="js/script.js"></script>
<script src="js/validation.js"></script>
</body>
</html>