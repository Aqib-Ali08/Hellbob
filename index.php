<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>HellBob</title>
    <meta name="description" content="Hellbob Clothing Store - Dare to be Different with HellBob Fashion">
	<meta name="keywords" content="Hellbob, Clothing, Fashion, Edgy, Unique, Individuality">
	<meta name="author" content="Ananda Mondal">
    

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
   

</head>

<body>

    <!-- home
    ================================================== -->
    <main class="s-home s-home--particles">

        <div id="particles-js" class="home-particles"></div>

        <div class="gradient-overlay"></div>

        <div class="home-content">

            <div class="home-logo">
            <?php
					session_start();
					if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
					    // display logged in content
					    echo 'Welcome, ' . $_SESSION['email'] . '!<br>';
					    echo '<a href="logout.php">Logout</a>';
					} else {
					    // display login button
					    echo '<a href="./login and register/loginform.php">Login</a>';
					}
					?>
            </div>
            <!-- login button -->

<a href=""></a>


            <div class="row home-content__main">

                <div class="col-eight home-content__text pull-right">
                    <h3>Welcome to HellBob</h3>

                    <h1>
                        We are currently working <br>
                        on a awesome <br> website.
                    </h1>

                    <p>
                        <!-- Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. 
                    Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. 
                    Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat. -->
                        Our online store is currently under construction, but we're working tirelessly to bring you the
                        best in modern
                        clothing and accessories.
                        Follow us on social media and looks at our designs and products. <br>
                        We can't wait to show you what we've been working on.

                        Thank you for your patience as we put the finishing touches on our store. We'll see you soon!

                    </p>
                </div> <!-- end home-content__text -->

                <div class="col-four home-content__counter">
                    <h3>Launching In</h3>

                    <div class="home-content__clock">
                        <div class="top">
                            <div class="time days">
                                325
                                <span>Days</span>
                            </div>
                        </div>
                        <div class="time hours">
                            09
                            <span>H</span>
                        </div>
                        <div class="time minutes">
                            54
                            <span>M</span>
                        </div>
                        <div class="time seconds">
                            30
                            <span>S</span>
                        </div>
                    </div> <!-- end home-content__clock -->
                </div> <!-- end home-content__counter -->

            </div> <!-- end home-content__main -->

            <ul class="home-social">
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100091368441577"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
                </li>
                <li>
                    <a href="https://twitter.com/HELLBOB_?t=kiBshW_OpZT1ag3P0_lIOg&s=09"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
                </li>
                <li>
                    <a href="https://instagram.com/hellbob_official?igshid=MGNiNDI5ZTU="><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                </li>
              <!--  <li>
                    <a href="#0"><i class="fab fa-behance" aria-hidden="true"></i><span>Behance</span></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a> 
                </li> -->
            </ul> <!-- end home-social -->

            <div class="row home-copyright">
                <span>Copyright HellBob 2023</span>
                <span>Design by <a href="#">Sk Aqib Ali</a></span>
            </div> <!-- end home-copyright -->


            <div class="home-content__line"></div>

        </div> <!-- end home-content -->

    </main> <!-- end s-home -->


    <!-- info
    ================================================== -->
    <a class="info-toggle" href="#0">
        <span class="info-menu-icon"></span>
    </a>

    <div class="s-info">

        <div class="row info-wrapper">

            <div class="col-seven tab-full info-main">
                <h1>We are HellBob. We make awesome stuff.</h1>
                <p>
                    Welcome to Hellbob, the upcoming fashion store that will take your wardrobe to the next level. Our
                    team is working diligently to bring you the latest fashion trends and styles that will make you
                    stand out from the crowd. Our unique and edgy clothing line features everything from graphic tees to
                    statement jackets, all designed with you in mind.

                    
                </p>

                <p>
                    While we're still putting the finishing touches on our online store, we invite you to sign up for
                    our newsletter to be the first to know when we launch. By joining our mailing list, you'll receive
                    exclusive promotions and updates on our latest collections. Follow us on social media for
                    behind-the-scenes glimpses at our design process and sneak peeks of our upcoming releases. Thank you
                    for your patience as we prepare to bring you the best in modern fashion. We can't wait to show you
                    what we have in store!
                </p>
            </div>

            <div class="col-four tab-full pull-right info-contact">

                <div class="info-block">
                    <h3>Start A Conversation</h3>
                    <p>
                        <a href="mailto:#0" class="info-email">support@hellbob.com</a><br>
                        <a href="tel:+916297545071" class="'info-phone">+91 6297 5450 71</a>
                    </p>
                </div>

                <div class="info-block">
                    <h3>Visit Our Office</h3>

                    <p class="info-address">
                        189 Hooghly Chinsurah<br>
                        Hooghly, West Bengal<br>
                        712103 IND
                    </p>
                </div>

                <div class="info-block">
                    <h3>Find Us On</h3>

                    <ul class="info-social">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100091368441577"><i class="fab fa-facebook" aria-hidden="true"></i>
                                <span>Facebook</span></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/HELLBOB_?t=kiBshW_OpZT1ag3P0_lIOg&s=09"><i class="fab fa-twitter" aria-hidden="true"></i>
                                <span>Twiiter</span></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/hellbob_official?igshid=MGNiNDI5ZTU="><i class="fab fa-instagram" aria-hidden="true"></i>
                                <span>Instagram</span></a>
                        </li>
                        <!-- <li>
                            <a href="#0"><i class="fab fa-behance" aria-hidden="true"></i>
                                <span>Behance</span></a>
                        </li> -->
                        <!-- <li>
                            <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i>
                                <span>Dribbble</span></a>
                        </li> -->
                    </ul>
                </div>

            </div> <!-- end info contact -->

        </div> <!-- end info wrapper -->

    </div> <!-- end s-info -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/polygons.js"></script>
    <script src="js/main.js"></script>

</body>
<!-- nothing -->
</html>