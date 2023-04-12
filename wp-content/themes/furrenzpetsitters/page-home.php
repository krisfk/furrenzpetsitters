<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$curr_lang_flag = ICL_LANGUAGE_CODE;

$next_page_txt = $curr_lang_flag =='en' ? 'Next':'下頁';

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url();?>/SJ/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url();?>/SJ/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url();?>/SJ/css/lightgallery.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url();?>/SJ/css/build.css">
    <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url();?>/SJ/css/style.css?ver=">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url();?>/SJ/css/responsive.css?ver=1.1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_site_url();?>/SJ/img/favicon.ico" />
    <link rel="canonical" href="http://www.furrenzpetsitters.com/" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">



</head>

<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php //esc_html_e( 'Skip to content', 'twentytwentyone' ); ?>
	</a>

	<?php //get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main"> -->


<!-- <body class="content-1"> -->

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="xp-wrapper" class="xp-wrapper">
        <section class="post">
            <div id="header" class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top-head">
                                <div class="logo">
                                    <a href="#"><img class="img-responsive"
                                            src="<?php echo wp_get_attachment_image_src(get_field('main_logo'),'full')[0];?>"
                                            alt="" /></a>
                                </div>
                                <div class="text-box">

                                    <?php echo get_field('first_section_title');?>
                                    <!-- <h1>Providing Hong Kong's Highest Quality <br> Professional Pet Care Services To
                                            Our
                                            Furry Friends</h1>
                                        <p>為我們的毛毛朋友提供香港最高質素的專業寵物護理服務</p> -->
                                </div>
                            </div>
                            <div class="mid-head">
                                <div class="image-holder">
                                    <img class="img-responsive"
                                        src="<?php echo wp_get_attachment_image_src(get_field('first_section_img'),'full')[0];?>"
                                        alt="" />
                                    <div class="so-lang">




                                        <?php
                        if( $curr_lang_flag =='en')
                        {
                            ?>
                                        <a href="<?php echo get_site_url();?>" style="display:inline-block;margin:0;">
                                            <div id="s0-lang"><span>中文</span></div>
                                        </a>
                                        <?php
                        }
                        else
                        {
                            ?>

                                        <a href="<?php echo get_site_url();?>/en"
                                            style="display:inline-block;margin:0;">
                                            <div id="s0-lang"><span>English</span></div>
                                        </a><?php
                        }
                            ?>


                                        <a class="scrol" href="#about-section"> <img
                                                src="<?php echo wp_get_attachment_image_src(get_field('first_section_scroll_down_img'),'full')[0];?>"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="last-head">
                                <div class="feature-mamber clearfix">
                                    <p><?php echo get_field('first_section_text_1');?></p>
                                    <ul>

                                        <?php
                                      
                                        // Check rows existexists.
                                        if( have_rows('first_section_logos') )
                                        {
                                            // Loop through rows.
                                            while( have_rows('first_section_logos') ) 
                                            {
                                                the_row();
                                                ?>
                                        <li><a href="<?php echo get_sub_field('logo_link');?>"><img
                                                    class="img-responsive"
                                                    src='<?php echo wp_get_attachment_image_src(get_sub_field('first_section_logo'),'full')[0];?>'
                                                    alt="" /></a>
                                        </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <!-- <li><a href="#"><img class="img-responsive"
                                                        src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_141100.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_141106.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_141114.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_141120.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_142548.jpg' alt="" /></a>
                                            </li> -->
                                    </ul>
                                </div>
                                <div class="feature-mamber feature-on clearfix">
                                    <p><?php echo get_field('first_section_text_2');?></p>
                                    <ul>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172754.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172758.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172806.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172813.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172837.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172854.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172857.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172901.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172905.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172912.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172923.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172929.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172935.jpg'
                                                    alt="" /></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20170610_172941.jpg'
                                                    alt="" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="socail-icon hidden-xs hidden-sm">
                    <ul>
                        <li><a class="social"
                                href="https://www.facebook.com/pages/Furrenz-Pet-Sitters/540414256013274"><img
                                    src="<?php echo get_site_url();?>/SJ/img/icon_fb.png" alt="" /></a></li>
                        <!-- <li><a class="social" href="https://plus.google.com/108119820827891516205"><img
                                        src="<?php echo get_site_url();?>/SJ/img/icon_gp.png" alt="" /></a></li> -->
                        <li><a class="social" href="http://www.instagram.com/furrenz"><img
                                    src="<?php echo get_site_url();?>/SJ/img/icon_instagram.png" alt="" /></a></li>
                        <li><a class="social" href="http://www.youtube.com/user/FurrenzPetSitters"><img
                                    src="<?php echo get_site_url();?>/SJ/img/icon_yt.png" alt="" /></a></li>
                        <!-- <li><a class="social" href="https://twitter.com/FurrenzPetSitHK"><img
                                        src="<?php echo get_site_url();?>/SJ/img/icon_tw.png" alt="" /></a></li> -->
                    </ul>
                </div>
            </div>
            <div class="desktop-version">
                <div class="navigation" data-spy="affix" data-offset-top="1330">
                    <div class="inner-navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="navbar navbar-default" role="navigation">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                                data-target=".navbar-collapse">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div id="menu" class="navbar-collapse collapse">
                                            <?php 


                                                echo get_post_field('post_content', $curr_lang_flag =='en' ? 263:267);

                                                ?>
                                            <!-- <ul class="nav navbar-nav">
                                                    <li><a class="scrol menu-en" href="#about-section">ABOUT US</a>
                                                        <font class="slipe">/</font>
                                                    </li>
                                                    <li><a class="scrol menu-en" href="#media-section">MEDIA &
                                                            GALLERY</a>
                                                        <font class="slipe">/</font>
                                                    </li>
                                                    <li><a class="scrol menu-en" href="#cat-sitting-section">SERVICES
                                                            &amp;
                                                            RATES</a>
                                                        <font class="slipe">/</font>
                                                    </li>


                                                    <li><a class="scrol menu-en" href="#faq-section">FAQ</a>
                                                        <font class="slipe">/</font>
                                                    </li>
                                                    <li><a class="scrol menu-en" href="#partnership-section">PARTNERSHIP
                                                            &
                                                            PET RESOURCES</a>
                                                        <font class="slipe">/</font>
                                                    </li>
                                                    <li><a class="scrol menu-en"
                                                            href="#testimonial-section">TESTIMONIALS</a>
                                                        <font class="slipe">/</font>
                                                    </li>
                                                    <li><a class="scrol menu-en" href="#contact-section">CONTACT</a>
                                                    </li>
                                                </ul> -->
                                        </div>
                                        <!--/.nav-collapse -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php
                        
                        ?>

                        <?php
                        if( $curr_lang_flag =='en')
                        {
                            ?>
                        <div id="lang" class="change-language" lang="en">
                            <a href="<?php echo get_site_url()?>"><img
                                    src="<?php echo get_site_url();?>/SJ/img/lang_en.png" alt="" /></a>
                        </div>
                        <?php
                        }
                        else
                        {
                            ?>
                        <div id="lang" class="change-language" lang="tc">
                            <a href="<?php echo get_site_url()?>/en/"><img
                                    src="<?php echo get_site_url();?>/SJ/img/lang_tc.png" alt="" /></a>
                        </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="mobile-version">
                <div class="navigation">
                    <div class="inner-navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="navbar navbar-default" role="navigation">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                                data-target=".navbar-collapse">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div class="navbar-collapse collapse">
                                            <ul class="nav navbar-nav">
                                                <li><a class="scrol" href="#about-section" data-toggle="collapse"
                                                        data-target=".navbar-collapse">ABOUT US</a>
                                                    <font class="slipe">/</font>
                                                </li>
                                                <li><a class="scrol" href="#media-section" data-toggle="collapse"
                                                        data-target=".navbar-collapse">MEDIA & GALLERY</a>
                                                    <font class="slipe">/</font>
                                                </li>
                                                <li><a class="scrol" href="#cat-sitting-section" data-toggle="collapse"
                                                        data-target=".navbar-collapse">SERVICES &amp; RATES</a>
                                                    <font class="slipe">/</font>
                                                </li>
                                                <li><a class="scrol" href="#faq-section" data-toggle="collapse"
                                                        data-target=".navbar-collapse">FAQ</a>
                                                    <font class="slipe">/</font>
                                                </li>
                                                <li><a class="scrol" href="#partnership-section" data-toggle="collapse"
                                                        data-target=".navbar-collapse">PARTNERSHIP & PET
                                                        RESOURCES</a>
                                                    <font class="slipe">/</font>
                                                </li>
                                                <li><a class="scrol" href="#testimonial-section" data-toggle="collapse"
                                                        data-target=".navbar-collapse">TESTIMONIALS</a>
                                                    <font class="slipe">/</font>
                                                </li>
                                                <li><a class="scrol" href="#contact-section" data-toggle="collapse"
                                                        data-target=".navbar-collapse">CONTACT</a>
                                                </li>
                                                <li>
                                                    <ul class="list-inline mbl-sc">
                                                        <li><a class="social"
                                                                href="https://www.facebook.com/pages/Furrenz-Pet-Sitters/540414256013274"><img
                                                                    src="<?php echo get_site_url();?>/SJ/img/icon_fb.png"
                                                                    alt="" /></a></li>
                                                        <li><a class="social"
                                                                href="https://plus.google.com/108119820827891516205"><img
                                                                    src="<?php echo get_site_url();?>/SJ/img/icon_gp.png"
                                                                    alt="" /></a></li>
                                                        <li><a class="social"
                                                                href="http://www.instagram.com/furrenz"><img
                                                                    src="<?php echo get_site_url();?>/SJ/img/icon_instagram.png"
                                                                    alt="" /></a>
                                                        </li>
                                                        <li><a class="social"
                                                                href="http://www.youtube.com/user/FurrenzPetSitters"><img
                                                                    src="<?php echo get_site_url();?>/SJ/img/icon_yt.png"
                                                                    alt="" /></a></li>
                                                        <li><a class="social"
                                                                href="https://twitter.com/FurrenzPetSitHK"><img
                                                                    src="<?php echo get_site_url();?>/SJ/img/icon_tw.png"
                                                                    alt="" /></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.nav-collapse -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="lang-mobile" class="change-language" lang="en">
                            <a href="#"><img src="<?php echo get_site_url();?>/SJ/img/lang_en.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-section" class="about-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="image-holder">
                            <img src="<?php echo wp_get_attachment_image_src(get_field('about_us_section_img_1'),'full')[0];?>"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-contant">
                            <div class="hedding">
                                <h2><?php echo get_field('about_us_section_title');?></h2>
                            </div>
                            <p class="desc">

                                <?php
                                echo get_field('about_us_section_description');
                                ?>
                                <!-- Furrenz Pet Sitters’ mission is to provide the Highest Quality Professional Pet Care
                                    Services in Hong Kong. We are proud members of Pet Sitters International (PSI),
                                    Professional United Pet Sitters (PUPS), and Association of Pet Sitting Excellence
                                    (APSE).<br />
                                    <br />
                                    Furrenz (short for furry friends) was founded by Viola Leung and Philip Chau in
                                    2013. We
                                    have since been successfully expanding with more than 20 sitters all over Hong Kong
                                    Island, Kowloon, and the New Territories, and continuously growing steadily. We are
                                    also
                                    honored to have been interviewed by TVB, Next Media / Next Magazine, Skypost
                                    Newspaper,
                                    Southside Magazine, Dogs Magazine, and others to share our experiences both with
                                    animals
                                    and managing such a business in Hong Kong. The feedback from our clients had been
                                    overwhelmingly positive, and we are really proud of what we have started, and
                                    continue
                                    to strive to improve and provide valuable services to pet owners.<br />
                                    <br />
                                    We treat all pets we take care of as if they are our own, just like one big family
                                    of
                                    furry friends. Below are a few our sitters who would like to say hi. They are a team
                                    of
                                    fantastic, loving, and professional pet care specialists who are all important
                                    members
                                    of the Furrenz family.<br />
                                    <br />
                                    A Hong Kong Registered Company &#45; 54767480&#45;000&#45;08&#45;13&#45;0<br /> -->

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="image-holder">
                            <img src="<?php echo wp_get_attachment_image_src(get_field('about_us_section_img_2'),'full')[0];?>"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-team">
                            <div class="about-team-inner">


                                <?php
                     
                     
                     if( have_rows('about_us_section_pet_sitters') )
                     {
                         // Loop through rows.
                         while( have_rows('about_us_section_pet_sitters') ) 
                         {
                             the_row();
                             ?>
                                <div class="about-team-box clearfix">
                                    <div class="image-holder">
                                        <img src='<?php echo wp_get_attachment_image_src(get_sub_field('pet_sitter_photo'),'full')[0];?>'
                                            alt="" />
                                    </div>
                                    <div class="text-box">
                                        <h3>
                                            <?php
                                                echo get_sub_field('pet_sitter_name');
                                                ?>

                                        </h3>
                                        <p>
                                            <?php
                                                echo get_sub_field('pet_sitter_description');
                                                ?>


                                        </p>
                                    </div>
                                </div>

                                <?php
                         }
                     }
                     ?>



                            </div>
                        </div>
                        <div class="next-button">
                            <a class="scrol" href="#media-section"><?php echo $next_page_txt;?><i
                                    class="fa fa-caret-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="media-section" class="media-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="media-sec-inner">
                            <h2><?php echo get_field('media_section_title');?></h2>
                            <div class="media-vedio">
                                <div class="media-vedio-inner">
                                    <div class="row no-marrgin">


                                        <?php
                                        
                                        $v_idx=1;
                                        if( have_rows('media_section_videos') )
                                        {
                                            // Loop through rows.
                                            while( have_rows('media_section_videos') ) 
                                            {
                                                the_row();

                                                ?>


                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="#" data-toggle="modal"
                                                data-target="#modal-<?php echo $v_idx;?>"><img class="img-responsive"
                                                    src="<?php echo wp_get_attachment_image_src(get_sub_field('video_thumbnail'),'full')[0];?>"
                                                    alt="" /></a>
                                        </div>

                                        <div id="modal-<?php echo $v_idx;?>" class="modal fade modal-youtube"
                                            tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item"
                                                            src="<?php echo get_sub_field('video_url');?>"
                                                            frameborder="0" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                                $v_idx++;
                                            }
                                        }

                                        ?>




                                        <!-- <div id="modal-14" class="modal fade modal-youtube" tabindex="-1"
                                                role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item"
                                                                src="https://www.youtube.com/embed/8ONLfpPO2as"
                                                                frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="modal-15" class="modal fade modal-youtube" tabindex="-1"
                                                role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item"
                                                                src="https://www.youtube.com/embed/JehnQrOwtz0"
                                                                frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="modal-16" class="modal fade modal-youtube" tabindex="-1"
                                                role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item"
                                                                src="https://www.youtube.com/embed/77ISyGYi-Gw"
                                                                frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="modal-17" class="modal fade modal-youtube" tabindex="-1"
                                                role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item"
                                                                src="https://www.youtube.com/embed/p-uvV0JJtZ8"
                                                                frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->


                                        <!-- <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" data-toggle="modal" data-target="#modal-14"><img
                                                        class="img-responsive"
                                                        src="http://img.youtube.com/vi/8ONLfpPO2as/0.jpg" alt="" /></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" data-toggle="modal" data-target="#modal-15"><img
                                                        class="img-responsive"
                                                        src="http://img.youtube.com/vi/JehnQrOwtz0/0.jpg" alt="" /></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" data-toggle="modal" data-target="#modal-16"><img
                                                        class="img-responsive"
                                                        src="http://img.youtube.com/vi/77ISyGYi-Gw/0.jpg" alt="" /></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" data-toggle="modal" data-target="#modal-17"><img
                                                        class="img-responsive"
                                                        src="http://img.youtube.com/vi/p-uvV0JJtZ8/0.jpg" alt="" /></a>
                                            </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="next-button">
                                <a class="scrol" href="#gallry-section"><?php echo $next_page_txt;?><i
                                        class="fa fa-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallry-section" class="gallry-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallry-sec-inner">
                            <h2>Gallery</h2>
                            <div class="media-vedio">
                                <div class="media-vedio-inner media-gallery-inner">
                                    <div class="demo-gallery">
                                        <div id="lightgallery" class="row list-unstyled">

                                            <?php

if( have_rows('gallery_section_images') )
{
    // Loop through rows.
    while( have_rows('gallery_section_images') ) 
    {
        the_row();
        ?>

                                            <div class='col-md-4 col-sm-4 col-xs-6'
                                                data-responsive='<?php echo wp_get_attachment_image_src(get_sub_field('gallery_section_image'),'full')[0];?> 800'
                                                data-src='<?php echo wp_get_attachment_image_src(get_sub_field('gallery_section_image'),'full')[0];?>'>
                                                <a href='javascript:void(0);'><img class='img-responsive'
                                                        src='<?php echo wp_get_attachment_image_src(get_sub_field('gallery_section_image'),'full')[0];?>'
                                                        alt='' /></a>
                                            </div>
                                            <?php
    }
}
?>


                                            <!-- <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230940.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230940.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230940.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230928.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230928.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230928.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230915.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230915.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230915.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230902.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230902.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230902.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230855.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230855.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180426_230855.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152903.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152903.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152903.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152846.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152846.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152846.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152841.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152841.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152841.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152827.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152827.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152827.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152811.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152811.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152811.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152806.jpg 800'
                                                    data-src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152806.jpg'><a
                                                        href='javascript:void(0);'><img class='img-responsive'
                                                            src='<?php echo get_site_url();?>/SJ/upl/gallery/large/20180120_152806.jpg' alt='' /></a>
                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="next-button">
                                <a class="scrol" href="#cat-sitting-section"><?php echo $next_page_txt;?><i
                                        class="fa fa-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cat-sitting-section" class="cat-sitting-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cat-sitting-section-inner">
                            <div class="cat-sitting-colum">
                                <div class="hedding">
                                    <h2>
                                        <!-- cat sitting -->
                                        <?php echo get_field('cat_sitting_section_title');?>
                                    </h2>
                                </div>
                                <div class="cat-setting clearfix">
                                    <h3>
                                        <!-- Cat Sitting services included -->
                                        <?php echo get_field('cat_sitting_section_subtitle_1');?>


                                    </h3>
                                    <?php echo get_field('cat_sitting_section_content_1');?>

                                    <!-- <ul>
                                            <li>Feeding, changing water</li>
                                            <li>Daily email updates with pictures of cat</li>
                                            <li>Cat Sitter play time with cat</li>
                                            <li>Medication <span>Complimentary</span></li>
                                            <li>Clean cat litter box</li>
                                            <li>Water plants / pick up mail /
                                                take out garbage<span>Complimentary</span></li>
                                        </ul> -->
                                </div>
                                <div class="cat-pricing">
                                    <h3>
                                        <!-- Pricing -->
                                        <?php echo get_field('cat_sitting_section_subtitle_2');?>

                                    </h3>

                                    <?php echo get_field('cat_sitting_section_content_2');?>


                                    <!-- <ul>
                                            <li>30 min - $210</li>
                                            <li>45 min - $230</li>
                                            <li>60 min - $250</li>
                                            <li>90 min - $270</li>
                                            <li>120 min - $290</li>
                                            <li>More than 120 min - $290 for first 120 min, $95 for each remaining 60
                                                min
                                            </li>
                                            <li>Charge is for Cat Sitting up to 2 cats, each additional cat incur $40
                                            </li>
                                        </ul> -->
                                </div>
                                <div class="cat-note">

                                    <?php echo get_field('cat_sitting_section_note');?>
                                    <!-- <span>Note</span>
                                        <p>
                                            - Additional 50% day charge for general public holiday Pet Care Services
                                            (exludes normal weekends)<br>
                                            - Travel surcharge - no charge if total return cost under $20, if more
                                            charge
                                            difference
                                        </p> -->

                                </div>
                                <div class="next-button">
                                    <a class="scrol" href="#dog-walking-section"><?php echo $next_page_txt;?><i
                                            class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="dog-walking-section" class="cat-sitting-section dog-walking-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cat-sitting-section-inner">
                            <div class="cat-sitting-colum">
                                <div class="hedding">
                                    <h2>
                                        <?php echo get_field('dog_walking_sitting_section_title');?>
                                        <!-- Dog Walking / Sitting -->

                                    </h2>
                                </div>
                                <div class="cat-setting clearfix">
                                    <h3>
                                        <?php echo get_field('dog_walking_sitting_section_subtitle_1');?>
                                        <!-- Dog Walking / Dog Sitting services included -->
                                    </h3>

                                    <?php echo get_field('dog_walking_sitting_section_content_1');?>


                                    <!-- <ul>
                                            <li>Dog Walker / Dog Sitter exclusive private walk/playtime</li>
                                            <li>Daily email updates with pictures of dog</li>
                                            <li>Towel rub if wet/muddy</li>
                                            <li>Animal medication <span>Complimentary</span></li>
                                            <li>Feed and fresh water</li>
                                            <li>Water plants / pick up mail /
                                                take out garbage<span>Complimentary</span></li>
                                            <li>Dog poop cleanup</li>
                                        </ul> -->
                                </div>
                                <div class="cat-pricing">
                                    <h3>
                                        <?php echo get_field('dog_walking_sitting_section_subtitle_2');?>

                                        <!-- Pricing -->
                                    </h3>
                                    <?php
                                        
                                        echo get_field('dog_walking_sitting_section_content_2');?>
                                    <!-- <ul>
                                            <li>15 min potty breaks - $180</li>
                                            <li>30 min - $220</li>
                                            <li>45 min - $240</li>
                                            <li>60 min - $260</li>
                                            <li>90 min - $280</li>
                                            <li>120 min - $300</li>
                                            <li>More than 120 min - $300 for first 120 min, $95 for each remaining 60
                                                min
                                            </li>
                                            <li>Charge is for Dog Sitting up to 2 dogs, each additional dog incur $80
                                            </li>
                                        </ul> -->
                                </div>
                                <div class="cat-note">

                                    <?php echo get_field('dog_walking_sitting_section_note');?>
                                    <!-- <span>Note</span>
                                        <p>
                                            - Additional 50% day charge for general public holiday Pet Sitting services
                                            (exludes normal weekends)<BR>
                                            - Travel surcharge - no charge if total return cost under $20, if more
                                            charge
                                            difference <BR>
                                        </p> -->
                                </div>
                                <div class="next-button">
                                    <a class="scrol" href="#overnight-pet-section"><?php echo $next_page_txt;?><i
                                            class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="overnight-pet-section" class="overnight-pet-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="over-night-inner clearfix">
                            <div class="over-night-colum">
                                <div class="hedding">
                                    <h2>
                                        <?php
                                            echo get_field('overnight_pet_sitting_section_title');
                                            ?>
                                        <!-- overnight pet sitting -->
                                    </h2>
                                </div>
                                <div class="text-box">
                                    <div class="text-contant">
                                        <p>

                                            <?php echo get_field('overnight_pet_sitting_section_note_1');?>


                                            <!-- (Note that we only offer overnight pet sitting service in your home, and
                                                not
                                                in a hotel facility) -->
                                        </p>
                                    </div>
                                    <div class="cat-setting clearfix">
                                        <h3>
                                            <?php echo get_field('overnight_pet_sitting_section_subtitle_1');?>

                                            <!-- Overnight Pet Sitting services included -->
                                        </h3>
                                        <?php echo get_field('overnight_pet_sitting_section_content_1');?>

                                        <!-- <ul>
                                                <li>Daily Dog Walking</li>
                                                <li>Dog poop clean up</li>
                                                <li>Pet Sitter play time with dog / cat</li>
                                                <li>Daily email updates with pictures of dog / cat</li>
                                                <li>Feed & fresh water</li>
                                                <li>Constant companion and lots of TLC</li>
                                            </ul> -->
                                    </div>
                                    <div class="cat-pricing">
                                        <h3>
                                            <?php echo get_field('overnight_pet_sitting_section_subtitle_2');?>

                                            <!-- Pricing -->
                                        </h3>
                                        <?php echo get_field('overnight_pet_sitting_section_content_2');?>


                                        <!-- <ul>
                                                <li>Less than 12 hours (e.g. dinner to breakfast) - $700</li>
                                                <li>More than 12 hours (e.g. dinner to lunch) - $800</li>
                                            </ul> -->
                                    </div>
                                    <div class="cat-note">
                                        <?php echo get_field('overnight_pet_sitting_section_note_2');?>

                                        <!-- <span>Note</span>
                                            <p>
                                                - Additional 50% day charge for general public holiday Dog Sitting / Cat
                                                Sitting (exludes normal weekends)<BR>
                                                - Travel surcharge - no charge if total return cost under $20, if more
                                                charge difference <BR>
                                            </p> -->
                                    </div>
                                    <div class="next-button">
                                        <a class="scrol" href="#small-animal-section"><?php echo $next_page_txt;?><i
                                                class="fa fa-caret-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section id="beauty-pet-section" class=" beauty-pet-section post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="beauty-pet-inner">
                                <div class="beauty-pet-colum">
                                    <div class="hedding">
                                        <h2>Pet Grooming</h2>
                                    </div>
                                    <div class="cat-setting clearfix">
                                        <h3>Services included</h3>
                                        <ul>
                                            <li style="width:100%">Bathing, brushing, blow drying, ear cleaning</li>
                                            <li style="width:100%">Done by sitters with grooming certificates</li>
                                            <li style="width:100%">Done at the comfort of dog’s home</li>
                                        </ul>
                                    </div>
                                    <div class="cat-pricing">
                                        <h3>Pricing</h3>
                                        <ul>
                                            <li>Bath only - $400</li>
                                            <li>Bath + trim - $600</li>
                                        </ul>
                                    </div>
                                    <div class="cat-note">
                                        <span>Note</span>
                                        <p>
                                            - Dogs only<BR>
                                            - All sizes welcome<BR>
                                        </p>
                                    </div>
                                    <div class="next-button">
                                        <a class="scrol" href="#small-animal-section"><?php echo $next_page_txt;?><i
                                                class="fa fa-caret-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->



        <section id="small-animal-section" class="small-animal-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="small-animal-inner clearfix">
                            <div class="small-animal-colum">
                                <div class="hedding">
                                    <h2>
                                        <?php echo get_field('small_animal_section_title');?>

                                        <!-- Small Animal -->

                                    </h2>
                                </div>
                                <div class="text-box">
                                    <div class="cat-setting clearfix">
                                        <h3>
                                            <!-- Small Animal Sitting services included -->
                                            <?php echo get_field('small_animal_section_subtitle_1');?>

                                        </h3>
                                        <?php echo get_field('small_animal_section_content_1');?>


                                        <!-- <ul>
                                                <li>Feeding, changing water</li>
                                                <li>Animal medication <span>Complimentary</span></li>
                                                <li>Pet Sitter play time with pet</li>
                                                <li>Water plants / pick up mail /
                                                    take out garbage <span>Complimentary</span></li>
                                                <li>Daily email updates with pictures of pet</li>
                                            </ul> -->
                                    </div>
                                    <div class="cat-pricing">
                                        <h3>
                                            <!-- Pricing -->
                                            <?php echo get_field('small_animal_section_subtitle_2');?>

                                        </h3>
                                        <?php echo get_field('small_animal_section_content_2');?>


                                        <!-- <ul>
                                                <li>30 min - $160</li>
                                            </ul> -->
                                    </div>
                                    <div class="cat-note">

                                        <?php echo get_field('small_animal_section_note');?>

                                        <!-- <span>Note</span>
                                            <p>
                                                - Additional 50% day charge for general public holiday Pet Sitting
                                                (exludes
                                                normal weekends)<BR>
                                                - Travel surcharge - no charge if total return cost under $20, if more
                                                charge difference <BR>
                                            </p> -->
                                    </div>
                                    <div class="next-button">
                                        <a class="scrol" href="#faq-section"><?php echo $next_page_txt;?><i
                                                class="fa fa-caret-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="faq-section" class="faq-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="faq-inner">
                            <div class="faq-colum">
                                <h2>
                                    <?php echo get_field('faq_section_title');?>
                                    <!-- faq -->

                                </h2>
                                <div class="faq-colum-question">
                                    <div class="faq-colum-question-inner">
                                        <ul>
                                            <?php
                                                
                                                $q_idx=1;
                                                if( have_rows('faq_section_content') )
                                                {
                                                    // Loop through rows.
                                                    while( have_rows('faq_section_content') ) 
                                                    {
                                                        the_row();
                                                    ?>

                                            <li id='id<?php echo  $q_idx;?>'><a href='javascript:void(0);'>
                                                    <?php echo get_sub_field('question');?></a></li>
                                            <?php
                                                        $q_idx++;

                                                    }
                                                }

                                                ?>
                                            <!-- <li id='id1'><a href='javascript:void(0);'>So how does Pet Sitting
                                                        work?</a></li>
                                                <li id='id2'><a href='javascript:void(0);'>How do I know for sure that
                                                        my pet will be ok
                                                        with
                                                        the pet sitter?</a></li>
                                                <li id='id3'><a href='javascript:void(0);'>Why not bring my pets to a
                                                        Pet Hotel or Pet
                                                        Kennel?</a></li>
                                                <li id='id4'><a href='javascript:void(0);'>Why not hire a domestic
                                                        helper instead of a pet
                                                        sitter?</a></li>
                                                <li id='id5'><a href='javascript:void(0);'>How do I know my pet is doing
                                                        fine?</a></li>
                                                <li id='id6'><a href='javascript:void(0);'>How will the pet sitter
                                                        access my home?</a>
                                                </li>
                                                <li id='id7'><a href='javascript:void(0);'>How do I know I can trust the
                                                        pet sitter to
                                                        enter
                                                        my home? </a></li>
                                                <li id='id8'><a href='javascript:void(0);'>What if my pet is ill while
                                                        I’m away?</a></li>
                                                <li id='id9'><a href='javascript:void(0);'>What if I need to cancel the
                                                        service due to
                                                        change
                                                        of plans?</a></li>
                                                <li id='id10'><a href='javascript:void(0);'>How do I pay?</a></li> -->

                                        </ul>
                                    </div>
                                    <div class="faq-colum-ans-main">

                                        <?php
                                                
                                                $q_idx=1;
                                                if( have_rows('faq_section_content') )
                                                {
                                                    // Loop through rows.
                                                    while( have_rows('faq_section_content') ) 
                                                    {
                                                        the_row();
                                                    ?>

                                        <div id='ans<?php echo $q_idx;?>' class='ans'>
                                            <div class='close-icon'><a class='close-sec' href='javascript:void(0);'><img
                                                        src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                        alt='' /></a></div>
                                            <div class='faq-answer'>
                                                <div class='faq-answer-heding'>
                                                    <h4> <?php echo get_sub_field('question');?></h4>
                                                </div>
                                                <div class='faq-answer-innner'>
                                                    <p>
                                                        <?php echo get_sub_field('answer');?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                                        $q_idx++;

                                                    }
                                                }

                                                ?>


                                        <!-- <div id='ans2' class='ans'>
                                                <div class='close-icon'><a class='close-sec'
                                                        href='javascript:void(0);'><img src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                            alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>How do I know for sure that my pet will be ok with the pet
                                                            sitter?</h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>Your designated Pet Sitter / Dog walker will always conduct
                                                            an
                                                            initial consultation session to meet with you and your
                                                            pet(s) to
                                                            see how well they react with them. We will observe how they
                                                            behave and what their little quirks and preferences are. We
                                                            will
                                                            only proceed when you truly feel that your pet is
                                                            comfortable
                                                            with our Pet Sitters, and this session will always be FREE.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='ans3' class='ans'>
                                                <div class='close-icon'><a class='close-sec'
                                                        href='javascript:void(0);'><img src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                            alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>Why not bring my pets to a Pet Hotel or Pet Kennel?</h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>Pets are creatures of routine. Taking them away from their
                                                            home
                                                            will introduce unnecessary stress. There are also numerous
                                                            risks
                                                            in bringing them to Pet Hotels or Kennels. You never know
                                                            how
                                                            your pets will react to other animals, or if fights will
                                                            occur.
                                                            Pet Hotels and kennels normally have a large number of other
                                                            animals, which may overwhelm your pet. There is also risk of
                                                            transmission of decease from the kennel or via other pets.
                                                            The
                                                            process of transporting your pet to a kennel can also be
                                                            stressful; as some pets can get motion sickness due to the
                                                            vehicle ride and may sometimes feel that you are abandoning
                                                            them
                                                            rather than just leaving home for a short period of time.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='ans4' class='ans'>
                                                <div class='close-icon'><a class='close-sec'
                                                        href='javascript:void(0);'><img src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                            alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>Why not hire a domestic helper instead of a pet sitter?</h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>Domestic helpers may be slightly more affordable, but they
                                                            are
                                                            not professionally trained to care for animals. Our Dog
                                                            Sitters
                                                            / Cat Sitters are all professionally trained, have years of
                                                            experience with animals and are truly passionate about the
                                                            well-being of animals. We are also certified in pet first
                                                            aid,
                                                            members of international pet sitting organizations, and know
                                                            how
                                                            to handle specific scenarios to ensure your pet is safe.
                                                            There
                                                            are numerous reports of dog fights with domestic helpers as
                                                            handlers as they are not trained to prevent fights or detect
                                                            negative energy or signs. Many are often distracted while
                                                            chatting on the phone and not 100% focused on your pets.
                                                            This
                                                            can post danger to your pets, other pets, and other people.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='ans5' class='ans'>
                                                <div class='close-icon'><a class='close-sec'
                                                        href='javascript:void(0);'><img src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                            alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>How do I know my pet is doing fine?</h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>Your assigned Pet Sitter / Dog Walker will provide daily
                                                            updates
                                                            with pictures via email to let you know how your dog / cat /
                                                            pet
                                                            is doing. This is FREE.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='ans6' class='ans'>
                                                <div class='close-icon'><a class='close-sec'
                                                        href='javascript:void(0);'><img src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                            alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>How will the pet sitter access my home?</h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>Your Pet Sitter / Dog Walker / Cat Sitter will require you to
                                                            provide us with a set of keys to access your home. We
                                                            normally
                                                            keep the keys on file unless requested to be returned.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='ans7' class='ans'>
                                                <div class='close-icon'><a class='close-sec'
                                                        href='javascript:void(0);'><img src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                            alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>How do I know I can trust the pet sitter to enter my home?
                                                        </h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>We fully understand that it is not common to let strangers
                                                            enter
                                                            your home. Our Pet Sitters are professionals and have been
                                                            doing
                                                            this for years. Our priority is to ensure your pets are in
                                                            good
                                                            care. Through the initial consultation, you will be able to
                                                            meet
                                                            our dog / cat sitters and determine whether you are
                                                            comfortable
                                                            with them coming into your home. It is important that you
                                                            feel
                                                            100% comfortable with our pet care service, otherwise our
                                                            consultation session will still be FREE of charge if you
                                                            decide
                                                            not to use our service.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='ans8' class='ans'>
                                                <div class='close-icon'><a class='close-sec'
                                                        href='javascript:void(0);'><img src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                            alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>What if my pet is ill while I’m away?</h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>Our top priority is your pet’s well-being, so if your pet is
                                                            ill,
                                                            we will take them to the veterinarian of your choice, other
                                                            veterinarians closest to your home, or 24 hour emergency pet
                                                            hospital if after hours. Your Pet Sitter will make every
                                                            effort
                                                            to contact you at the earliest convenience and will keep you
                                                            posted constantly on the status of your pet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='ans9' class='ans'>
                                                <div class='close-icon'><a class='close-sec'
                                                        href='javascript:void(0);'><img src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                            alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>What if I need to cancel the service due to change of plans?
                                                        </h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>If you cancel at least 48 hours prior to the first pet
                                                            service,
                                                            we will provide you with a full refund. If it is within 48
                                                            hours
                                                            of the service, we are not able to provide a refund, as our
                                                            Pet
                                                            Sitters / Dog Walkers would have already reserved their time
                                                            for
                                                            the service, in place of other clients.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='ans10' class='ans'>
                                                <div class='close-icon'><a class='close-sec'
                                                        href='javascript:void(0);'><img src='<?php echo get_site_url();?>/SJ/images/close-icon.png'
                                                            alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>How do I pay?</h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>We accept Cash, Cheques, Bank Transfers, Paypal for our pet
                                                            care
                                                            services</p>
                                                    </div>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <div class="next-button">
                                    <a class="scrol" href="#partnership-section"><?php echo $next_page_txt;?><i
                                            class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="partnership-section" class="partnership-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partnership-inner">
                            <h2>

                                <?php echo get_field('partnership_pet_resources_section_title');?>
                                <!-- partnership & pet resources -->

                            </h2>
                            <div class="partnership-colum">
                                <div class="partnership-colum-inner clearfix">

                                    <?php
                                    
                                    if( have_rows('partnership_pet_resources_section_partners') )
                                    {
                                        // Loop through rows.
                                        while( have_rows('partnership_pet_resources_section_partners') ) 
                                        {
                                            the_row();
                                            ?>
                                    <div class='partnership-box clearfix'>
                                        <div class='image-holder'>
                                            <img class='img-responsive'
                                                src='<?php echo wp_get_attachment_image_src(get_sub_field('logo'),'full')[0];?>'
                                                alt='' />
                                        </div>
                                        <div class='text-box'>
                                            <h3><?php echo get_sub_field('partner_name');?></h3>
                                            <span><?php echo get_sub_field('tel');?></span>
                                            <a href='<?php echo get_sub_field('url');?>'
                                                target='_blank"'><?php echo get_sub_field('url');?></a>
                                            <p><?php echo get_sub_field('description');?></p>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    }
                                    
                                    ?>

                                    <!-- <div class='partnership-box clearfix'>
                                            <div class='image-holder'>
                                                <img class='img-responsive' src='<?php echo get_site_url();?>/SJ/upl/partner/20131209_173647.jpg'
                                                    alt='' />
                                            </div>
                                            <div class='text-box'>
                                                <h3>East Island Animal Hospital</h3>
                                                <span>Tel : 2915 3999</span>
                                                <a href='http://eastislandvets.com.hk'
                                                    target='_blank"'>http://eastislandvets.com.hk</a>
                                                <p>East Island Animal Hospital is a large, fully equipped veterinary
                                                    hospital situated at Eastern HK Island. Services include soft tissue
                                                    and
                                                    orthopaedic surgery, x&#45;ray, ultrasound, laboratory, dentistry,
                                                    acupuncture and hospitalisation as well as regular health checks and
                                                    vaccinations. All staff are very caring and highly trained. East
                                                    Island
                                                    Animal Hospital is open 7 days a week.</p>
                                            </div>
                                        </div>
                                        <div class='partnership-box clearfix'>
                                            <div class='image-holder'>
                                                <img class='img-responsive' src='<?php echo get_site_url();?>/SJ/upl/partner/20131209_174438.jpg'
                                                    alt='' />
                                            </div>
                                            <div class='text-box'>
                                                <h3>The Animal Emergency Centre</h3>
                                                <span>Tel : 2915 7979</span>
                                                <a href='http://www.animalemergency.com.hk'
                                                    target='_blank"'>http://www.animalemergency.com.hk</a>
                                                <p>The Animal Emergency Centre is Hong Kong&#39;s only dedicated
                                                    emergency
                                                    referral service and after hours clinic. Operating out of the East
                                                    Island Animal Hospital premises, the AEC opens from 9pm to 8am every
                                                    day
                                                    of the year including CNY and during typhoons. As well as looking
                                                    after
                                                    emergencies of every description, the AEC provide patient monitoring
                                                    for
                                                    critically ill patients and will give advice to worried pet owners
                                                    over
                                                    the phone.</p>
                                            </div>
                                        </div>
                                        <div class='partnership-box clearfix'>
                                            <div class='image-holder'>
                                                <img class='img-responsive' src='<?php echo get_site_url();?>/SJ/upl/partner/20131209_174616.jpg'
                                                    alt='' />
                                            </div>
                                            <div class='text-box'>
                                                <h3>PetProject.HK </h3>
                                                <span>Tel : 3008 5650</span>
                                                <a href='http://www.petproject.hk'
                                                    target='_blank"'>http://www.petproject.hk</a>
                                                <p>PetProject.HK brings the pet superstore to your computer. With easy
                                                    returns and free shipping over $200 (to HK Island, Kowloon and the
                                                    New
                                                    Territories), there’s no need to carry heavy bags of food from the
                                                    store
                                                    to your home. We are proud to offer the best food, treats and toys
                                                    from
                                                    manufacturers around the globe brought to your home or office, with
                                                    delivery that fits your busy schedule. We also carry an outstanding
                                                    selection of natural and organic products for even the most
                                                    discerning
                                                    pet owner.<br />
                                                    PetProject.HK offers delivery to your door, no&#45;hassle 30 day
                                                    returns, a rock&#45;solid best price guarantee, outstanding customer
                                                    support and a website so easy to use, you might come home and find
                                                    your
                                                    dog placing an order. Give us a try today, you (and your pets) will
                                                    be
                                                    glad you did!<br />
                                                </p>
                                            </div>
                                        </div> -->
                                </div>
                            </div>
                            <div class="next-button">
                                <a class="scrol" href="#testimonial-section"><?php echo $next_page_txt;?><i
                                        class="fa fa-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonial-section" class="testimonial-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-inner">
                            <h2>
                                <?php echo get_field('testimonials_section_title');?>
                                <!-- testimonials -->
                            </h2>
                            <div class="testimonial-column">

                                <?php
                                
                                if( have_rows('testimonials_section_customers') )
                                {
                                    // Loop through rows.
                                    while( have_rows('testimonials_section_customers') ) 
                                    {
                                        the_row();
                                        ?>


                                <div class='testimonial-box'>
                                    <p>
                                        <?php
                                            echo get_sub_field('customer_saying');
                                            ?>
                                    </p>
                                    <h4>
                                        <?php
                                            echo get_sub_field('customer_name');
                                            ?></h4>
                                </div>

                                <?php
                                    }
                                }
                                
                                ?>




                                <!-- <div class='testimonial-box'>
                                        <p>We felt our two bunnies were in professional and caring hands during our
                                            holiday.
                                            The updates and pictures made us happy every evening. It will be easy to
                                            trust
                                            Furrenz Pet Sitters again next time we're away.</p>
                                        <h4>Liisa</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>You can trust Viola, she does a great work and i will call her again next
                                            time
                                            i'll go in holidays !</p>
                                        <h4>Anne</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>Our sweet Brenda we miss you thank you so much Furrenz Pet Sitters for taking
                                            such a great care of our furry baby.</p>
                                        <h4>Victoria</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>Very thankful this few days your attentive care for them </p>
                                        <h4>Kelly</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>I found Furrenz Pet Sitters online. And the response was very fast from the
                                            founder Viola, who is totally hand-on. She managed to find me a lovely girl
                                            Ms
                                            Chloe to dog sit my dog. I feel she loves dog very much and she is very
                                            entertained herself in sitting and playing with my dog. And I also love the
                                            fact
                                            that the dogsitter constantly sent me pictures of my dogs while playing,
                                            sleeping and walking. It keeps me knowing the interaction of the dogsitter
                                            with
                                            my dog. I would have no hesistation to recommend Furrenz Pet Sitters to any
                                            friends who would like the peace of mind of his/ her dog being looked after
                                            and
                                            pampered and loved while he/she is away to work or holiday. And the dog is
                                            not
                                            under any stress as no need to move to a unfamiliar environment like dog
                                            hotel
                                        </p>
                                        <h4>David</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>Thanks Viola so much for looking after Prince and Winter while we were out
                                            for
                                            trip. This was the first time we left the two cats for consecutive days. We
                                            could fully enjoy our time without worrying Prince and Winter. We were so
                                            delighted to see that they were in good mood and our apartment was in good
                                            shape
                                            when we returned home. I am sure they had a good time with you.</p>
                                        <h4>Joyce</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>I'm so happy Furrenz Pet Sitters were able to take care of Tuna and Mo Sun
                                            Sun
                                            while we were away on our trip. Tuna and Mo Sun Sun eats wet food, they are
                                            slow
                                            eaters (takes more than half an hour), and would want to eat each others'
                                            food
                                            (Tuna eats veterinary prescribed food), so Viola would need to watch over
                                            them
                                            while they eat. In addition, Tuna needs to take medication twice everyday,
                                            and
                                            both of their eyes and mouths need to be wiped clean as it tends to get
                                            dirty
                                            easily. A lot of effort and patience are needed in order to take care of
                                            them.
                                            I've spent a lot of time researching for a pet sitter and I'm so glad I
                                            finally
                                            found Furrenz Pet Sitters. The most important thing is they can come twice a
                                            day
                                            and can choose 90 mins per visit.
                                            While on our trip Viola would always send us updates with pictures, so we
                                            can
                                            totally relax and enjoy our time away. I'm surprised to receive one of the
                                            pictures show them with their bellies up, proving that they are really
                                            comfortable with Viola and has taken care of them well.
                                            We also found our place clean and in good shape when we got back. I'm really
                                            happy and satisfied with their service. </p>
                                        <h4>Jenny and Zoe</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>"Just wanted to say Huge Thanks to Viola for looking after my babies Dash and
                                            Tish. It is so nice to be able to enjoy my holiday without having to worry
                                            about
                                            my cats. With Viola's service I know that I will never have to worry. Her
                                            personalized care for all pets is so unique, Viola is so good with my
                                            cats,they
                                            love her. I love receiving her daily updates, she never forgets. I am so
                                            grateful for your service and will continue to use your service. I will also
                                            recommend Viola's service to all I know who have pets and may need her
                                            service.
                                            Once again, thank you so much Viola for a fantastic service."</p>
                                        <h4>Jana</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>"We are so grateful for Viola's qualified and caring services and the great
                                            deal
                                            of care and personal attention she showed to our dog Tally while we were
                                            away
                                            for several days. We prefer not to board our dog away from home, and Furrenz
                                            Pet
                                            Sitters provided exactly the type of care and home sitting service we have
                                            been
                                            looking for. Tally was able to enjoy the comforts of her own home, continue
                                            with
                                            her regular routine, and soak up the constant attention, love, and playtime
                                            that
                                            come with having a human companion around. I doubt she even knew we were
                                            gone!
                                            We cannot say enough good things about this company and will continue to use
                                            Viola's services in the future."</p>
                                        <h4>Katherine</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>“The daily email updates were great - really set my mind at ease. Even
                                            received a
                                            picture of my cat. If missing/worrying about your cat tends to put a damper
                                            on
                                            your vacation, it really helps to have these updates to let you relax. Our
                                            pet
                                            sitter Viola was kind and caring and our cat took to her right away. Thanks
                                            again Viola for giving me one less thing to worry about!”</p>
                                        <h4>Ann</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>“HUGE THANK U for your lovely msg's and great care of Bob & Boo this past
                                            wkend,
                                            U R AWESOME!!!!! We are SO GRATEFUL to have u and look fwd to the next time
                                            u
                                            can cat sit - we LOVE your EXCELLENT service!!!!”</p>
                                        <h4>Sharmini</h4>
                                    </div>
                                    <div class='testimonial-box'>
                                        <p>“Just wanted to send a little note of appreciation for the excellent care
                                            Lola's
                                            been receiving. It's been a pleasure having Viola look after Lola, I can be
                                            confident that she's in good & caring hands, and that I'll come home to a
                                            happy
                                            cat. I continue to recommend Viola to friends & colleagues, as I think what
                                            you
                                            do is really great. So, thank you : )”
                                        </p>
                                        <h4>Dominique</h4>
                                    </div> -->
                            </div>
                            <div class="next-button">
                                <a class="scrol" href="#contact-section"><?php echo $next_page_txt;?><i
                                        class="fa fa-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-section" class="contact-section post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-inner">
                            <h2>

                                <!-- Contact -->
                                <?php echo get_field('contact_section_title');?>


                            </h2>
                            <div class="contact-info">
                                <div class="contact-info-contant">


                                    <?php echo get_field('contact_section_content');?>
                                    <!-- <h3>KEEP IN TOUCH!</h3>
                                        <p>Feel free to send us an email, or look us up on Facebook: Furrenz Pet
                                            Sitters. We
                                            are looking forward to hearing from you.</p>
                                        <p>Interested in joining us as a pet sitter or dog walker? Please send us an
                                            email
                                            with your cv at career@furrenzpetsitters.com.</p> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="contact-info-inner">
                                            <div class="image-holder">

                                                <img class="img-responsive"
                                                    src="<?php echo wp_get_attachment_image_src(get_field('contact_section_icon_1'),'full')[0];?>"
                                                    alt="" />
                                            </div>
                                            <div class="text-box">
                                                <?php echo get_field('contact_section_icon_content_1');?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="contact-info-inner">
                                            <div class="image-holder">
                                                <img class="img-responsive"
                                                    src="<?php echo wp_get_attachment_image_src(get_field('contact_section_icon_2'),'full')[0];?>"
                                                    alt="" />
                                            </div>
                                            <div class="text-box">
                                                <?php echo get_field('contact_section_icon_content_2');?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="contact-info-inner">
                                            <div class="image-holder">
                                                <img class="img-responsive"
                                                    src="<?php echo wp_get_attachment_image_src(get_field('contact_section_icon_3'),'full')[0];?>"
                                                    alt="" />
                                            </div>
                                            <div class="text-box">
                                                <?php echo get_field('contact_section_icon_content_3');?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="contact-form"> -->
                        <!-- <div class="contact-form-inner"> -->


                        <!-- <h3>SEND US A MESSAGE</h3>
                                    <div class="theForm">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                                                <div class="form-group">
                                                    <label>Name<span></span></label>
                                                    <input type="text" id='name' name='name'>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding2">
                                                <div class="form-group">
                                                    <label>Pet Name<span></span></label>
                                                    <input type="text" id='petname' name='petname'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address ( District )<span></span></label>
                                                    <SELECT NAME='district' id='district' class=''>
                                                        <option value='0' selected='selected'>--- Please Select ---
                                                        </option>
                                                        <option value='1001'>------------ Hong Kong Island ------------
                                                        </option>
                                                        <option value='1'>Central and Western</option>
                                                        <option value='2'>Eastern</option>
                                                        <option value='3'>Southern</option>
                                                        <option value='4'>Wan Chai</option>
                                                        <option value='1002'>------------ Kowloon ------------</option>
                                                        <option value='5'>Sham Shui Po</option>
                                                        <option value='6'>Kowloon City</option>
                                                        <option value='7'>Kwun Tong</option>
                                                        <option value='8'>Wong Tai Sin</option>
                                                        <option value='9'>Yau Tsim Mong</option>
                                                        <option value='1003'>------------ New Territories ------------
                                                        </option>
                                                        <option value='10'>Kwai Tsing</option>
                                                        <option value='11'>North</option>
                                                        <option value='12'>Sai Kung</option>
                                                        <option value='13'>Sha Tin</option>
                                                        <option value='14'>Tai Po</option>
                                                        <option value='15'>Tsuen Wan</option>
                                                        <option value='16'>Tuen Mun</option>
                                                        <option value='17'>Yuen Long</option>
                                                        <option value='18'>Islands</option>
                                                    </SELECT>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                                                <div class="form-group">
                                                    <label>Contact Number<span></span></label>
                                                    <input type="text" id='contact' name='contact'>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding2">
                                                <div class="form-group">
                                                    <label>Email<span></span></label>
                                                    <input type="text" id='email' name='email'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Type of Services<span></span></label>
                                                    <SELECT NAME='service' id='service' class=''>
                                                        <option value='0' selected='selected'>--- Please Select ---
                                                        </option>
                                                        <option value='1'>Cat sitting - 30 minutes</option>
                                                        <option value='2'>Cat sitting - 45 minutes</option>
                                                        <option value='3'>Cat sitting - 60 minutes</option>
                                                        <option value='4'>Cat sitting - 90 minutes</option>
                                                        <option value='5'>Dog walking / sitting - 15 minutes</option>
                                                        <option value='6'>Dog walking / sitting - 30 minutes</option>
                                                        <option value='7'>Dog walking / sitting - 45 minutes</option>
                                                        <option value='8'>Dog walking / sitting - 60 minutes</option>
                                                        <option value='9'>Cat / dog overnight pet sitting</option>
                                                        <option value='10'>Small Animal Sitting - 30 minutes</option>
                                                    </SELECT>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                                                <div class="form-group">
                                                    <label>Start Date<span></span></label>
                                                    <input type="text" id='startdate' name='startdate'>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding2">
                                                <div class="form-group">
                                                    <label>End Date<span></span></label>
                                                    <input type="text" id='enddate' name='enddate'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Number of visits per day<span></span></label>
                                                    <input type="text" id='visitperday' name='visitperday'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>How did you hear about us<span></span></label>
                                                    <input type="text" id='hearus' name='hearus' class="long">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Please leave your special request<span></span></label>
                                                    <input type="text" id='comment' name='comment' class="long">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Type the code from the below image</label>
                                                    <img src="<?php echo get_site_url();?>/SJ/php/captcha/captcha.php" id="captcha-img" alt="" />
                                                    <font class="codeChange">Change</font>
                                                    <input type="text" id="captcha" name="captcha"><span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button class="sendBtn" />Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->





                        <?php


echo $curr_lang_flag=='en' ? do_shortcode('[contact-form-7 id="252" title="Contact form"]') : do_shortcode('[contact-form-7 id="273" title="Contact form"]') ;

                                    

                                    ?>

                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="process"><span><img src='<?php echo get_site_url();?>/SJ/img/loading.gif'><BR><BR>Data
                    Processing</img></span></div>
        </section>
        <!-- <section id="footer-section" class="footer-section post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-inner">
                                <p>Copyright © 2023 Furrenz Pet Sitters’. All rights reserved. / Design by <a
                                        href='http://www.boxbranddesign.com/' target='_blank'>boxbranddesign</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
    </div>


    <!-- Large modal -->
    <div class="up-down">
        <ul>
            <li><a href="#"><img src="<?php echo get_site_url();?>/SJ/img/btn-txt_en.png" alt="" /></a></li>
            <li><a id="up" href="#"><img src="<?php echo get_site_url();?>/SJ/img/btn-up.png" alt="" /></a></li>
            <li><a id="down" href="#"><img src="<?php echo get_site_url();?>/SJ/img/btn-down.png" alt="" /></a></li>
            <li><a class="scrol" href="#header"><img src="<?php echo get_site_url();?>/SJ/img/btn-top.png" alt="" /></a>
            </li>
        </ul>
    </div>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-44606789-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script type="text/javascript">
    // alert(7);

    function emailClicked() {
        ga('send', {
            hitType: 'event',
            eventCategory: 'Email',
            eventAction: 'Click',
        });
        window.location.href = "mailto:info@furrenzpetsitters.com";
    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo get_site_url();?>/SJ/js/jquery.js"></script> -->
    <script type="text/javascript" src="<?php echo get_site_url();?>/SJ/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_site_url();?>/SJ/js/lightgallery.js"></script>
    <script type="text/javascript" src="<?php echo get_site_url();?>/SJ/js/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="<?php echo get_site_url();?>/SJ/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?php echo get_site_url();?>/SJ/js/custom.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    <script type="text/javascript">
    setTimeout(() => {
        $('.start-date-input,.end-date-input').datepicker();
    }, 2000);
    // var $ = JQuery;
    // $(function() {
    // alert(33);
    // })
    // setTimeout(() => {
    // $('.start-date-input').datepicker();
    // }, 5000);
    </script>


    <?php

get_footer();
?>
    <!-- </body> -->



    <!-- </html> -->