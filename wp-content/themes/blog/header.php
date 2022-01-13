<html lang="en">
<head>
    <?php
        $this_page = "Blog";
        $sub_page = "";
        wp_head();
    ?>
</head>

<?php

        // DAY AND NIGHT DETECTION
        $now = time();
        $longitude = /*72.27026*/ 0;
        $latitude = /*-1.89188*/ 0;

        $sun = date_sun_info ($now, $longitude, $latitude);
        $light = $sun['civil_twilight_begin'];
        $dark = $sun['civil_twilight_end'];

        $daytime = $now > $light && $now < $dark;

    ?>

<body <?php if ((!$daytime)) echo "class=\"body-dark\""; ?>>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="http://pegatonconsults.com" title="Pegaton Consults - Digital Agency"><img
                                    src="<?php echo get_theme_file_uri('/images/logo-white.png'); ?>" id="thm-logo" alt="Pegaton Consults - Digital Agency"
                                    title="Pegaton Consults - Digital Agency"></a></div>
                    </div>
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                                class="txt">Menu</span></div>

                        <!-- Main Menu -->
                        <?php if (($daytime)): ?>
                        <!-- Mobile Navigation Menu Light Mode; during daytime only -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li <?php if ($this_page == "Home") echo "class=\"current\""; ?>><a href="http://pegatonconsults.com">Home</a></li>
                                    <li class="dropdown <?php if ($this_page == "About") echo "current"; ?>">
                                        <a href="#">About Us</a>
                                        <ul>
                                            <li><a href="http://pegatonconsults.com/about.php">About Pegaton Consults</a></li>
                                            <li><a href="http://pegatonconsults.com/team.php">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown <?php if ($this_page == "Services") echo "current"; ?>"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="http://pegatonconsults.com/services.php">All Services</a></li>
                                            <li><a href="http://pegatonconsults.com/web-development.php">Web Development</a></li>
                                            <li><a href="http://pegatonconsults.com/app-development.php">App Development</a></li>
                                            <li><a href="http://pegatonconsults.com/graphic-design.php">Graphic Design</a></li>
                                            <li><a href="http://pegatonconsults.com/digital-marketing.php">Digital Marketing</a></li>
                                            <li><a href="http://pegatonconsults.com/seo-and-content-writing.php">SEO & Content Writing</a></li>
                                            <!-- <li><a href="<?php //if ($sub_page == "SEO") echo $_SERVER\['PHP_SELF']; else echo "./seo.php" ?>">SEO</a></li> -->
                                            <li><a href="http://pegatonconsults.com/digital-branding.php">Digital Branding</a></li>
                                        </ul>
                                    </li>
                                    <li <?php if ($this_page == "Portfolio") echo "class=\"current\""; else echo "class=\"disabled-link\""; ?>><a href="<?php if ($this_page == "Portfolio") echo $_SERVER['PHP_SELF']; else echo /*"./portfolio.php"*/ "#" ?>">Portfolio</a></li>
                                    <li <?php if ($this_page == "Blog") echo "class=\"current\""; ?>><a href="http://blog.pegatonconsults.com">Blog</a></li>
                                    <li <?php if ($this_page == "Contact") echo "class=\"current\""; ?>><a href="http://pegatonconsults.com/contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">
                        <!-- cart btn -->
                        <!-- <div class="cart-btn">
                            <a href="cart.html" class="theme-btn cart-toggler"><span
                                    class="flaticon-shopping-cart"></span></a>
                        </div> -->
                        <!--Search Btn-->
                        <!-- <div class="search-btn">
                            <button type="button" class="theme-btn search-toggler"><span
                                    class="flaticon-loupe"></span></button>
                        </div> -->
                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href="tel:+2347068699201">
                                    <span class="icon"></span>
                                    <span class="sub-text">Give Us a Call</span>
                                    <span class="number">234 706 869 9201</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png"
                            alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <!-- <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
                        other agencies.</p> -->
                    <p><a href="mailto:info@pegatonconsults.com">info@pegatonconsults.com</a> <br> <a href="tel:+2347068699201">234 706 869 9201</a></p>
                    <div class="side-menu__social">
                        <a href="https://web.facebook.com/pegatonconsults/"><i class="fab fa-facebook-square"></i></a>
                        <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                        <a href="https://www.instagram.com/pegatonconsults/"><i class="fab fa-instagram"></i></a>
                        <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->
                        <?php else: ?>
                        <!-- Mobile Navigation Menu Dark Mode; at night only -->
                        <nav class="main-menu main-menu-dark navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li <?php if ($this_page == "Home") echo "class=\"current\""; ?>><a href="http://pegatonconsults.com">Home</a></li>
                                    <li class="dropdown <?php if ($this_page == "About") echo "current"; ?>">
                                        <a href="#">About Us</a>
                                        <ul>
                                            <li><a href="http://pegatonconsults.com/about.php">About Pegaton Consults</a></li>
                                            <li><a href="http://pegatonconsults.com/team.php">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown <?php if ($this_page == "Services") echo "current"; ?>"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="http://pegatonconsults.com/services.php">All Services</a></li>
                                            <li><a href="http://pegatonconsults.com/web-development.php">Web Development</a></li>
                                            <li><a href="http://pegatonconsults.com/app-development.php">App Development</a></li>
                                            <li><a href="http://pegatonconsults.com/graphic-design.php">Graphic Design</a></li>
                                            <li><a href="http://pegatonconsults.com/digital-marketing.php">Digital Marketing</a></li>
                                            <li><a href="http://pegatonconsults.com/seo-and-content-writing.php">SEO & Content Writing</a></li>
                                            <!-- <li><a href="<?php //if ($sub_page == "SEO") echo $_SERVER\['PHP_SELF']; else echo "./seo.php" ?>">SEO</a></li> -->
                                            <li><a href="http://pegatonconsults.com/digital-branding.php">Digital Branding</a></li>
                                        </ul>
                                    </li>
                                    <li <?php if ($this_page == "Portfolio") echo "class=\"current\""; else echo "class=\"disabled-link\""; ?>><a href="<?php if ($this_page == "Portfolio") echo $_SERVER['PHP_SELF']; else echo /*"./portfolio.php"*/ "#" ?>">Portfolio</a></li>
                                    <li <?php if ($this_page == "Blog") echo "class=\"current\""; ?>><a href="http://blog.pegatonconsults.com">Blog</a></li>
                                    <li <?php if ($this_page == "Contact") echo "class=\"current\""; ?>><a href="http://pegatonconsults.com/contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">
                        <!-- cart btn -->
                        <!-- <div class="cart-btn">
                            <a href="cart.html" class="theme-btn cart-toggler"><span
                                    class="flaticon-shopping-cart"></span></a>
                        </div> -->
                        <!--Search Btn-->
                        <!-- <div class="search-btn">
                            <button type="button" class="theme-btn search-toggler"><span
                                    class="flaticon-loupe"></span></button>
                        </div> -->
                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href="tel:+2347068699201">
                                    <span class="icon"></span>
                                    <span class="sub-text">Give Us a Call</span>
                                    <span class="number">234 706 869 9201</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner side-menu__block-inner-dark">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png"
                            alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container mobile-nav__container-dark">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <!-- <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
                        other agencies.</p> -->
                    <p><a href="mailto:info@pegatonconsults.com">info@pegatonconsults.com</a> <br> <a href="tel:+2347068699201">234 706 869 9201</a></p>
                    <div class="side-menu__social">
                        <a href="https://web.facebook.com/pegatonconsults/"><i class="fab fa-facebook-square"></i></a>
                        <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                        <a href="https://www.instagram.com/pegatonconsults/"><i class="fab fa-instagram"></i></a>
                        <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->
                        <?php endif; ?>

        <!--Search Popup-->
        <!-- <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div> --><!-- /.search-popup__overlay -->
            <!-- <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div> --><!-- /.search-popup__inner -->
        <!--</div>--><!-- /.search-popup -->