<?php /* Template Name: Search Page */ ?>
<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('title'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="<?php bloginfo('template_url'); ?>/site.webmanifest">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/icon.png">
        <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/all.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fontiran.css">
        <link href="<?php bloginfo('template_url'); ?>/css/online-services.css" rel="stylesheet">


    </head>

    <body>

        <header>
            <nav>
                <div class="nav">

                    <!-- Start top logo -->

                    <div class="top-logo">
                        <div class="logo">
                            <h1><a id="logo" href="https://sahakian-translation-center.ir/home/">دارالترجمه رسمی ساهاکیان</a></h1>
                        </div>
                        <div class="call">
                            <h2>0037410235752 _ 0037410237272 &nbsp &nbsp <span class="phonenumber"><i class="fas fa-phone-square-alt">&nbsp &nbsp<i class="fas fa-fax"></i></i></span></h2>
                            <h2>0037494801501 &nbsp &nbsp <span class="phonenumber"><i class="fas fa-phone-square-alt">&nbsp &nbsp<i class="fab fa-telegram">&nbsp &nbsp<i class="fab fa-whatsapp">&nbsp  &nbsp<i class="fab fa-viber"></i></i></i></i></span></h2>
                        </div>
                    </div>

                    <!-- End top logo -->

                    <!-- Start top menu -->

                    <div class="top-menu">
                        <ul class="top-menu1">
                            <li><a href="https://sahakian-translation-center.ir/home/">خانه</a></li>
                            <li><a class="myservices" href="#">خدمات ما</a>
                                <ul class="myservices1">
                                    <li>ترجمه رسمی و غیر رسمی مدارک شخصی</li>
                                    <li>ترجمه رسمی و غیر رسمی مدارک تحصیلی</li>
                                    <li>ترجمه رسمی و غیر رسمی سند ازدواج</li>
                                    <li>ترجمه رسمی اسناد و مدارک شرکت ها و دفاتر</li>
                                    <li>ترجمه رسمی و غیر رسمی مقالات</li>
                                    <li>ترجمه بروشور کاتالوگ و رزومه</li>
                                    <br>
                                    <li>ترجمه کتاب</li>
                                    <li>اخذ تاییدیه وزارت امور خارجه و سفارت</li>
                                </ul>
                            </li>
                            <li><a href="https://sahakian-translation-center.ir/cost/">هزینه خدمات</a></li>
                            <li><a href="https://sahakian-translation-center.ir/languages/">زبان ها</a></li>
                            <li><a href="https://sahakian-translation-center.ir/about-us/">درباره ما</a></li>
                            <li><a href="https://sahakian-translation-center.ir/contact-us/">تماس با ما</a></li>
                            <!-- <li><a class="lang" href="https://sahakian-translation-center.ir/online-services-en/">ENGLISH</a></li> -->
                            <li><form action="<?php echo site_url(); ?>" method="get"><input name="s" type="search" placeholder="جستجو..."><a href="https://sahakian-translation-center.ir/search/" class="search-icon"><i class="fas fa-search"></i></a></form></li>
                        </ul>
                    </div>
                </div>

                <!-- End top menu -->

                <!-- Start top menu for small width-->

                <div class="small-menu">
                    <button type="button" class="btn"><span class="button-icon"><i class="fas fa-align-center"></i></span></button>
                    <div class="dropdown">
                        <ul>
                            <li><a href="https://sahakian-translation-center.ir/home/">خانه</a></li>
                            <li><a class="myservices" href="#">خدمات ما</a></li>
                            <div class="dropdown1">
                                <ul class="myservices1">
                                    <li>ترجمه رسمی و غیر رسمی مدارک شخصی</li>
                                    <li>ترجمه رسمی و غیر رسمی مدارک تحصیلی</li>
                                    <li>ترجمه رسمی و غیر رسمی سند ازدواج</li>
                                    <li>ترجمه رسمی اسناد و مدارک شرکت ها و دفاتر</li>
                                    <li>ترجمه رسمی و غیر رسمی مقالات</li>
                                    <li>ترجمه بروشور کاتالوگ و رزومه</li>
                                    <li>ترجمه کتاب</li>
                                    <li>اخذ تاییدیه وزارت امور خارجه و سفارت</li>
                                </ul>
                            </div>
                            <li><a href="https://sahakian-translation-center.ir/cost/">هزینه خدمات</a></li>
                            <li><a href="https://sahakian-translation-center.ir/languages/">زبان ها</a></li>
                            <li><a href="https://sahakian-translation-center.ir/about-us/">درباره ما</a></li>
                            <li><a href="https://sahakian-translation-center.ir/contact-us/">تماس با ما</a></li> 
                        </ul>
                    </div>
                   <!-- <a class="lang" href="https://sahakian-translation-center.ir/online-services-en/">ENGLISH</a> -->
           <form action="<?php echo site_url(); ?>" method="get"><input name="s" type="search" placeholder="Search..."><a href="https://sahakian-translation-center.ir/search/" class="search-icon"><i class="fas fa-search"></i></a></form>
                </div>

                <!-- Start top menu for small width-->

            </nav>
        </header>

        <!-- Online order divisions -->
        <div class="online-services">
            <?php if (have_posts()) : ?>
            <h2 class="pagetitle">نتایج جستجو برای "<?php echo $s ?>"</h2>
            <?php while (have_posts()) : the_post(); ?>
            <div class="post" id="post-<?php the_ID(); ?>" style="margin: 5px;border: 1px solid #41a9a9;border-radius: 6px;">

                <p class="large nomargin"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p>
                <?php
                // Support for "Search Excerpt" plugin
                // https://fucoder.com/code/search-excerpt/
                if ( function_exists('the_excerpt') && is_search() ) {
                    the_excerpt();
                } ?>
                <p class="small">
                    <?php the_time('F jS, Y') ?> &nbsp;|&nbsp; 
                    <!-- by <?php the_author() ?> -->
                    <?php the_category(', ');
                    if($post->comment_count > 0) { 
                        echo ' &nbsp;|&nbsp; ';
                        comments_popup_link('', '1 کامنت', '% Comments'); 
                    }
                    ?>
                </p>

            </div>

            
            <?php endwhile; ?>
            
            <?php else : ?>

            <h2 class="center">متاسفانه نتیجه ای یافت نشد</h2>


            <?php endif; ?>
            
        </div>
        <!-- <div class="online-services-table">
<div class="table"></div>
</div> -->

        <!-- FOOOOOOOOOOOOOOOOOOOOOTER -->

        <div class="footer">
            <div class="footer-text">
                <p>تماس با ما</p>
                <span class="footer-loc"><i class="fas fa-map-marker-alt"></i></span>
                <h1>آدرس : ارمنستان_ایروان_خیابان مامیکونیاتس_ساختمان 23_واحد 34</h1>
                <br>
                <span class="footer-icon"><span class="phone-icon-color"><i class="fas fa-phone-square-alt"></i></span><span class="fax-icon-color"><i class="fas fa-fax"></i></span></span>
                <h3>0037410235752 _ 0037410237272</h3>
                <br>
                <span class="footer-icon1"><span class="phone-icon-color"><i class="fas fa-phone-square-alt"></i></span><span class="tele-icon-color"><i class="fab fa-telegram"></i></span><span class="whatsapp-icon-color"><i class="fab fa-whatsapp"></i></span><span class="viber-icon-color"><i class="fab fa-viber"></i></span></span>
                <h3 class="footer-phonenumber">0037494801501</h3>
            </div>
            <div class="map">
                 <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.0051548383935!2d44.518801114611406!3d40.20894827938983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd512913e3af%3A0x15cd47ade9d72a1e!2ssahakian%20translation%20center!5e0!3m2!1sen!2s!4v1572773510018!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
        </div>

        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-3.7.1.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>






    </body>

</html>
