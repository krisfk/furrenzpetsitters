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

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="SJ/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="SJ/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="SJ/css/lightgallery.css">
    <link rel="stylesheet" type="text/css" href="SJ/css/build.css">
    <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="SJ/css/style.css?ver=">
    <link rel="stylesheet" type="text/css" href="SJ/css/responsive.css?ver=1.1">

    <link rel="shortcut icon" type="image/x-icon" href="SJ/img/favicon.ico" />
    <link rel="canonical" href="http://www.furrenzpetsitters.com/" />

</head>

<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php //esc_html_e( 'Skip to content', 'twentytwentyone' ); ?>
	</a>

	<?php //get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main"> -->


<body class="content-1">

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
                                            <div id="s0-lang"><span>中文</span></div>
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
                                                        src='SJ/upl/gallery/large/20170610_141100.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_141106.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_141114.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_141120.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_142548.jpg' alt="" /></a>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="feature-mamber feature-on clearfix">
                                        <p><?php echo get_field('first_section_text_2');?></p>
                                        <ul>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172754.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172758.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172806.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172813.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172837.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172854.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172857.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172901.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172905.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172912.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172923.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172929.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172935.jpg' alt="" /></a>
                                            </li>
                                            <li><a href="#"><img class="img-responsive"
                                                        src='SJ/upl/gallery/large/20170610_172941.jpg' alt="" /></a>
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
                                        src="SJ/img/icon_fb.png" alt="" /></a></li>
                            <li><a class="social" href="https://plus.google.com/108119820827891516205"><img
                                        src="SJ/img/icon_gp.png" alt="" /></a></li>
                            <li><a class="social" href="http://www.instagram.com/furrenz"><img
                                        src="SJ/img/icon_instagram.png" alt="" /></a></li>
                            <li><a class="social" href="http://www.youtube.com/user/FurrenzPetSitters"><img
                                        src="SJ/img/icon_yt.png" alt="" /></a></li>
                            <li><a class="social" href="https://twitter.com/FurrenzPetSitHK"><img
                                        src="SJ/img/icon_tw.png" alt="" /></a></li>
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
                                                <button type="button" class="navbar-toggle collapsed"
                                                    data-toggle="collapse" data-target=".navbar-collapse">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div id="menu" class="navbar-collapse collapse">
                                                <ul class="nav navbar-nav">
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

                                                    <!-- <li><a class="scrol menu-en" href="#beauty-pet-section">Pet
                                                            Grooming</a>
                                                        <font class="slipe">/</font>
                                                    </li> -->

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
                                                </ul>
                                            </div>
                                            <!--/.nav-collapse -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div id="lang" class="change-language" lang="en">
                                <a href="#"><img src="SJ/img/lang_en.png" alt="" /></a>
                            </div>
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
                                                <button type="button" class="navbar-toggle collapsed"
                                                    data-toggle="collapse" data-target=".navbar-collapse">
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
                                                    <li><a class="scrol" href="#cat-sitting-section"
                                                            data-toggle="collapse"
                                                            data-target=".navbar-collapse">SERVICES &amp; RATES</a>
                                                        <font class="slipe">/</font>
                                                    </li>
                                                    <li><a class="scrol" href="#faq-section" data-toggle="collapse"
                                                            data-target=".navbar-collapse">FAQ</a>
                                                        <font class="slipe">/</font>
                                                    </li>
                                                    <li><a class="scrol" href="#partnership-section"
                                                            data-toggle="collapse"
                                                            data-target=".navbar-collapse">PARTNERSHIP & PET
                                                            RESOURCES</a>
                                                        <font class="slipe">/</font>
                                                    </li>
                                                    <li><a class="scrol" href="#testimonial-section"
                                                            data-toggle="collapse"
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
                                                                        src="SJ/img/icon_fb.png" alt="" /></a></li>
                                                            <li><a class="social"
                                                                    href="https://plus.google.com/108119820827891516205"><img
                                                                        src="SJ/img/icon_gp.png" alt="" /></a></li>
                                                            <li><a class="social"
                                                                    href="http://www.instagram.com/furrenz"><img
                                                                        src="SJ/img/icon_instagram.png" alt="" /></a>
                                                            </li>
                                                            <li><a class="social"
                                                                    href="http://www.youtube.com/user/FurrenzPetSitters"><img
                                                                        src="SJ/img/icon_yt.png" alt="" /></a></li>
                                                            <li><a class="social"
                                                                    href="https://twitter.com/FurrenzPetSitHK"><img
                                                                        src="SJ/img/icon_tw.png" alt="" /></a></li>
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
                                <a href="#"><img src="SJ/img/lang_en.png" alt="" /></a>
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
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20141101_022003.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Viola</h3>
                                            <p>Hi, this is Viola Leung, Founder and Head of Operations at Furrenz Pet
                                                Sitters. <br />
                                                I was born in Hong Kong and spent the past 15+ years in Canada. Since a
                                                very
                                                young age, I had established an instant connection with animals, and
                                                since
                                                then I knew right away that I was destined to focus the rest of my
                                                career
                                                and life to care for animals. I am a proud mother of three wonderful
                                                babies
                                                &#45; Bobby the Pembroke Welsh Corgi , Chimi the tabby cat, and Fluffy
                                                the
                                                lionhead bunny, and they are the love of my life. Our pets are such
                                                wonderful companions who provide us with unconditional love, and I
                                                believe
                                                they deserve the same from us, so I set out to provide pets with the
                                                best
                                                love and care there is.<br />
                                                I have been working with animals most of my life. I spent the recent 5+
                                                years working as a professional Pet Sitter, Dog Walker, Doggy Day Care
                                                Attendant, as well as Pet Hotel office manager in and outside of Hong
                                                Kong.
                                                I am also very humbled to have been interviewed by several television
                                                and
                                                magazine outlets in Hong Kong and Canada, to talk about my experience in
                                                the
                                                pet sitting field. Having taken care of hundreds of animals of different
                                                kinds and breeds, I continue to educate myself. I have obtained the Pet
                                                First Aid Certificate, the Veterinary Nursing Certificate (China Hong
                                                Kong
                                                Veterinarian Association), the Certified Professional Pet Sitter
                                                Accreditation (Pet Sitters International), and will continue to learn
                                                and
                                                strive to be the best in the field in Hong Kong. <br />
                                                I look forward meeting you and your furry babies, and welcome you to the
                                                Furrenz family :&quot;)<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20141101_022028.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Philip</h3>
                                            <p>Hi, this is Philip Chau, Co&#45;Founder of Furrenz Pet Sitters, focusing
                                                on
                                                Marketing &amp; Sales.<br />
                                                Currently residing in Hong Kong, I was born in Macau and spent most of
                                                my
                                                recent years in Toronto, Canada.<br />
                                                Having been a pet owner for over 10 years, I have always been fascinated
                                                with animals. Being a proud daddy of a dog, a cat, and a bunny, I can
                                                spend
                                                all day just observing how they behave, their body language, and how
                                                they
                                                react to people. I am a strong believer of having a well&#45;trained and
                                                balanced pet, as well as providing them with a suitable environment
                                                where
                                                everyone in the household can enjoy each other’s company with respect.
                                                <br />
                                                With a background in marketing and research, I see huge opportunity in
                                                the
                                                pet industry in Hong Kong. Working with Viola to build up the Furrenz
                                                Pet
                                                Sitters brand and strategy had been a wonderful experience, and I
                                                thoroughly
                                                enjoyed every moment of it. I am excited to continue to introduce and
                                                share
                                                the concept of pet sitting to pet owners in Hong Kong, to provide them
                                                with
                                                help they need and the peace of mind that they deserve.<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20141101_022057.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Mariko</h3>
                                            <p>Hello! My name is Mariko. I am Japanese but was born in the US. I grew up
                                                being around animals and I loved visiting zoos. When I heard and found
                                                out
                                                about Furrenz Pet Sitters, I decided to join without a second thought. I
                                                am
                                                happy I found a place where I could spend time with animals, be able to
                                                help
                                                people look after their pets, but most importantly be able to provide
                                                tender
                                                loving care for the pets I come across. It has been such a great
                                                experience
                                                for me :) </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20141101_022136.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Goretti</h3>
                                            <p>Hi. Pet sitting newby here. Joined Furrenz as a pet sitter in 2014 March,
                                                have since been earning the trust of our clients, and received positive
                                                feedback. Have met all kinds of animal friends since a very young age,
                                                of
                                                varying breed, age, sex, and size. As you long as you are a furry
                                                friend, I
                                                look forward to provide lots of love and care!<br />
                                                Hope to be a friend of elephant one day. Haha!<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20141101_022315.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Yan</h3>
                                            <p>I am an animal lover who has had pets in my life with experience in daily
                                                caring for dogs, cats, rabbit and fish, as well as administering
                                                medicine
                                                and special diet. I am happy to be of assistance for watching your
                                                pet(s),
                                                walking your dog(s), feeding your cat(s) or whatever your furry
                                                friend(s)
                                                might need.</p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20141101_022332.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Xenia</h3>
                                            <p>Hi, I am Xenia To. It such a pleasure to join Furrenz Pet Sitters. <br />
                                                I owned a Golden Retriever, an Alaskan Husky and a Siberian Husky.
                                                However
                                                my Golden Retriever and Alaska Husky passed away two years ago and last
                                                year
                                                due to lymphoma and diabetes respectively. From my dogs, I got
                                                experience in
                                                taking care pets under chemotherapy and drugs therapy for
                                                diabetes.<br />
                                                In January 2014, I had successfully completed a Veterinary Assistant
                                                course
                                                jointly held by Pets Central Veterinary Academy Limited and HKFYG
                                                Continuous
                                                Learning Centre. I am going to take a Pets First Aid course in the near
                                                future as well.<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20141101_022351.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Fion</h3>
                                            <p>I now have 4 doggies (Mongrel), 2 adopted and 2 rescued from my village
                                                myself. They are from 1 yrs to 4 yrs old. I had a Chinchilla before and
                                                she
                                                passed away when 8 years old. <br />
                                                I am familiar with taking care of dogs and I have attended dog training
                                                class before. I am able to take care of cats as well since I often help
                                                my
                                                neighbor to take care of their cats when they travel. I have experience
                                                in
                                                taking care of dogs that need medication, help to feed them medication
                                                and
                                                also familiar with dog walking. In my leisure time I am also a
                                                volunteer, 2
                                                of my doggies are the ‘pet doctors’, and we will go to visit elderly
                                                centers, young kids centers to carry out animal assisted therapy
                                                volunteer
                                                work. <br />
                                                I am an animal lover who treasures and respects animal life. I want to
                                                spend
                                                more time in animal care and Furrenz has the same vision to provide
                                                quality
                                                pet care service to the owners / animals in needed. We treat our furry
                                                friends not only as friends but as our family.<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20141122_134034.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Kalea</h3>
                                            <p>Hi, my name is Kelsey. Since I was a child, I had always loved animals,
                                                and
                                                am currently living with 3 poodles. When my friends go to travel, I
                                                often
                                                help them take care of their cats as well. I remember seeing Furrenz Pet
                                                Sitters on TV one day, and thought that this service is such a fantastic
                                                news to pet owners.<br />
                                                I joined Furrenz hoping to help take care of owners’ pets while they are
                                                away, so they can travel to work or leisure without stress, knowing
                                                their
                                                little ones are being taken care of.<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20150401_014214.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Grace</h3>
                                            <p>Hi, my name is Grace, Furrenz&#39;s new member. I have loved animals
                                                since I
                                                was small and started keeping my first pair of cats in 1996. I have
                                                eight
                                                cats at home now.<br />
                                                <br />
                                                I knew about Furrenz during my trip to Japan in 2014 and I found this
                                                pet
                                                care `service really thoughtful. It is my honour to join your family. I
                                                really hope that you would trust us and let us take care of your
                                                pets.<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20150523_184029.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Bowie</h3>
                                            <p>Hi, this is Bowie. Since a very young age, I always loved being around
                                                with
                                                animals and communicating with them. I currently have 2 poodle boys,
                                                have
                                                taken care of them since they were babies, and have developed a strong
                                                bond
                                                and connection with them. I totally understand pet owners’ worry when
                                                having
                                                to travel and leave their little ones behind. I am very delighted to
                                                have
                                                the opportunity to join Furrenz as a pet sitter. As a pet owner myself,
                                                I
                                                totally support and see the value of this type of service. To allow
                                                furry
                                                friends to stay in the comforts of their own home, this will certainly
                                                reduce their stress. When pets are happy, owners are certainly relieved
                                                and
                                                have peace of mind</p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20150523_184058.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Angge</h3>
                                            <p>Hello everyone, I am Angge, pleasure to join the Furrenz family as pet
                                                sitter. Since kindergarten, I have already started encountering animals,
                                                and
                                                has since grown up with them. I have also had pet turtles, fish,
                                                rabbits,
                                                birds, and hamsters. Since having my first doggy in high school, we now
                                                have
                                                3 dogs at home, all adopted. 12 year old Miniature Pinscher,9 year old
                                                Miniature Schnauzer, and 6 year old Samoyed. With 12 years experience
                                                taking
                                                care of dogs from young age, I treat them like family, and spoil and
                                                love
                                                them. I look after all of the day to day pet care such as bath time,
                                                walking, sickness, medication, nails, ear cleaning, all grooming, I am
                                                also
                                                quite experiences. <br />
                                                I love animals so much that for my honeymoon we decided to go to south
                                                Africa to see wild animals, really really enjoyned it !<br />
                                                Taking care of animals have always been my dream, and it is my pleasure
                                                to
                                                be able to take care of your little ones !<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20170218_210851.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Lorraine</h3>
                                            <p>Lorraine is a pet lover since she&#39;s a kid and playing &amp; living
                                                with
                                                these fur balls every day is always what she dreamt of. Dogs &amp; cats
                                                are
                                                her favorite but orangutans &amp; giant panda wins her heart equally.
                                                After
                                                Lorraine studied the &quot;positive reinforcement&quot; method of dog
                                                training about 13 years ago, it really gave her a whole new
                                                understanding of
                                                how dogs learn and how to see the world from a dog&#39;s perspective.
                                                Since
                                                then she became a dog trainer in dog behavior training.</p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20170320_222323.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Christine</h3>
                                            <p>Hello! My name is Christine! It is a pleasure to join Furrenz as a pet
                                                sitter. I got my first dog when I was five years old, since then I fall
                                                in
                                                love with animals. I like to play with them and take care of them. I
                                                have
                                                one cat with me now. I am so looking forward to take care of your lovely
                                                pets! </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20180120_152604.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Yvonne</h3>
                                            <p>Hi, my name is Yvonne. I am very excited to have the opportunity to join
                                                Furrenz. The reason I want to be a pet sitter is because I love
                                                animals.<br />
                                                <br />
                                                I love being with animals. My first pet is a Budgerigar, then a retired
                                                police dog, and 3 mixed&#45;breed dogs. I spent my childhood with them,
                                                and
                                                they had spent their lifetime accompanying me. In my days with them, I
                                                learnt how to get along with then. I played with them, I talked to them.
                                                I
                                                do grooming, bathing, dog walking, plus taking care of sickness and
                                                medication.<br />
                                                <br />
                                                I am currently living with a 7 year old British Short Hair, adopt her
                                                when
                                                she was a 3 month old baby. Because of her (a timid cat), I went to
                                                cat’s
                                                grooming class, Animal Communication Course, Pet Health Care &amp; First
                                                Aid
                                                Course, to ensure I can provide her a comfortable home.<br />
                                                <br />
                                                I understand how pet owners worry when leaving their baby home alone. I
                                                promise, I will treat your little one like family.<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20181209_095533.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>April</h3>
                                            <p>Hi, I am April, joined Furrenz to become a pet sitter of this big family,
                                                I
                                                am very happy and honored! Since childhood, I have loved animals, and my
                                                family has 2 cats now (exotic shorthair cat and Persian cat). <br />
                                                <br />
                                                My home has another cat whom we adopted for 13 years, she had just
                                                passed
                                                away due to suffering from kidney disease. After half a year of careful
                                                care
                                                to her, I learned more thorough pet care as relates to kidney disease,
                                                such
                                                as feeding medicine and giving subcutaneous fluid, etc. Also, I
                                                understand
                                                that quality pet care is very important for animals.<br />
                                                <br />
                                                I am a person who enjoys taking care of and interacting with animals. I
                                                hope
                                                that I will be able to provide your pets with the best pet care
                                                service<br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20191102_003215.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Harryn</h3>
                                            <p>G’day! Let me first tell you a secret &#45; all my best friends have
                                                paws..
                                                ;) This is Harryn, here to give the best care for your beloved family
                                                pet. I
                                                understand the needs of pets while owners are away from home, because
                                                I’m
                                                pet owner too. I’m an owner of my adopted 13 year old poodle girl and my
                                                just turned 20 year old chinchilla boy. <br />
                                                With my photography and dog walker background and experience in the past
                                                years, I love to capture decent moments for animals I’ve come across.
                                                I’m
                                                also a regular volunteer of one of the rescue dogs Homing Centres in
                                                Hong
                                                Kong for almost 8 years, I believed I’ve met, care and walked at least
                                                half
                                                thousand dogs! I’ve since learnt so much practical experiences and
                                                skills of
                                                taking good care of dogs of different breeds, size, temperament and age,
                                                especially older dogs that needs medication and special care.<br />
                                                I’m so going to treat your beloved pets like mine, no stress, trust me,
                                                hand
                                                me their paws. <br />
                                                P.S. One day wish I get to adopt a mix&#45;breed dog! <br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20191215_104755.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Flora Lau</h3>
                                            <p>Hello, I am Flora Lau, I am so glad to be a member of Furrenz Pet
                                                Sitters! I
                                                have been a cat mother for 16 years. I have 5 cats (3 domestic, 2 mixed
                                                breeds of long hair) and all of them are over 10 years old. <br />
                                                I have attained the Certificate of Maintenance Massage for Small Animals
                                                and
                                                Professional cat grooming course held by IPTGA. Apart from being a cat
                                                mother at home, I was active in joining volunteer work for LAWC
                                                previously
                                                and helped their foster dogs do walking. <br />
                                                My previous jobs required a lot of travel, however one of my cat
                                                suffered
                                                from serious constipation which needs lot of care at the moment, I
                                                understand so much how challenging the situation is. What we need is not
                                                just a friend or helper, but an experienced pet sitter who can manage to
                                                take care of medication, observe and identify issues with “our babies”
                                                mentally and physically, and the most important is to let our furry
                                                babies
                                                know that they are being cared and are not alone. I am so glad I can
                                                offer
                                                my care to your furry babies when necessary. <br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="about-team-box clearfix">
                                        <div class="image-holder">
                                            <img src='SJ/upl/team/20191215_104847.jpg' alt="" />
                                        </div>
                                        <div class="text-box">
                                            <h3>Akay</h3>
                                            <p>Hello ~ My name is Akay. I am a pet owner for more than 12 years and I am
                                                now
                                                living with 2 dogs at home. I was a volunteer in animal shelters since I
                                                was
                                                in the secondary school. I loves animals a lot and I had been working in
                                                a
                                                Veterinary Clinic these years too. Hope I can give you and your pet a
                                                wonderful period of time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="next-button">
                                <a class="scrol" href="#media-section">Next<i class="fa fa-caret-down"></i></a>
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
                                <h2>Media</h2>
                                <div class="media-vedio">
                                    <div class="media-vedio-inner">
                                        <div class="row no-marrgin">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" data-toggle="modal" data-target="#modal-13"><img
                                                        class="img-responsive"
                                                        src="http://img.youtube.com/vi/UF-wqhUCGMk/0.jpg" alt="" /></a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
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
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="next-button">
                                    <a class="scrol" href="#gallry-section">Next<i class="fa fa-caret-down"></i></a>
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
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180426_230940.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180426_230940.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180426_230940.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180426_230928.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180426_230928.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180426_230928.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180426_230915.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180426_230915.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180426_230915.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180426_230902.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180426_230902.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180426_230902.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180426_230855.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180426_230855.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180426_230855.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180120_152903.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180120_152903.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180120_152903.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180120_152846.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180120_152846.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180120_152846.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180120_152841.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180120_152841.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180120_152841.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180120_152827.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180120_152827.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180120_152827.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180120_152811.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180120_152811.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180120_152811.jpg' alt='' /></a>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-6'
                                                    data-responsive='SJ/upl/gallery/large/20180120_152806.jpg 800'
                                                    data-src='SJ/upl/gallery/large/20180120_152806.jpg'><a href='#'><img
                                                            class='img-responsive'
                                                            src='SJ/upl/gallery/large/20180120_152806.jpg' alt='' /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="next-button">
                                    <a class="scrol" href="#cat-sitting-section">Next<i
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
                                        <h2>cat sitting</h2>
                                    </div>
                                    <div class="cat-setting clearfix">
                                        <h3>Cat Sitting services included</h3>
                                        <ul>
                                            <li>Feeding, changing water</li>
                                            <li>Daily email updates with pictures of cat</li>
                                            <li>Cat Sitter play time with cat</li>
                                            <li>Medication <span>Complimentary</span></li>
                                            <li>Clean cat litter box</li>
                                            <li>Water plants / pick up mail /
                                                take out garbage<span>Complimentary</span></li>
                                        </ul>
                                    </div>
                                    <div class="cat-pricing">
                                        <h3>Pricing</h3>
                                        <ul>
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
                                        </ul>
                                    </div>
                                    <div class="cat-note">
                                        <span>Note</span>
                                        <p>
                                            - Additional 50% day charge for general public holiday Pet Care Services
                                            (exludes normal weekends)<br>
                                            - Travel surcharge - no charge if total return cost under $20, if more
                                            charge
                                            difference
                                        </p>
                                    </div>
                                    <div class="next-button">
                                        <a class="scrol" href="#dog-walking-section">Next<i
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
                                        <h2>Dog Walking / Sitting</h2>
                                    </div>
                                    <div class="cat-setting clearfix">
                                        <h3>Dog Walking / Dog Sitting services included</h3>
                                        <ul>
                                            <li>Dog Walker / Dog Sitter exclusive private walk/playtime</li>
                                            <li>Daily email updates with pictures of dog</li>
                                            <li>Towel rub if wet/muddy</li>
                                            <li>Animal medication <span>Complimentary</span></li>
                                            <li>Feed and fresh water</li>
                                            <li>Water plants / pick up mail /
                                                take out garbage<span>Complimentary</span></li>
                                            <li>Dog poop cleanup</li>
                                        </ul>
                                    </div>
                                    <div class="cat-pricing">
                                        <h3>Pricing</h3>
                                        <ul>
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
                                        </ul>
                                    </div>
                                    <div class="cat-note">
                                        <span>Note</span>
                                        <p>
                                            - Additional 50% day charge for general public holiday Pet Sitting services
                                            (exludes normal weekends)<BR>
                                            - Travel surcharge - no charge if total return cost under $20, if more
                                            charge
                                            difference <BR>
                                        </p>
                                    </div>
                                    <div class="next-button">
                                        <a class="scrol" href="#overnight-pet-section">Next<i
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
                                        <h2>overnight pet sitting</h2>
                                    </div>
                                    <div class="text-box">
                                        <div class="text-contant">
                                            <p>(Note that we only offer overnight pet sitting service in your home, and
                                                not
                                                in a hotel facility)</p>
                                        </div>
                                        <div class="cat-setting clearfix">
                                            <h3>Overnight Pet Sitting services included</h3>
                                            <ul>
                                                <li>Daily Dog Walking</li>
                                                <li>Dog poop clean up</li>
                                                <li>Pet Sitter play time with dog / cat</li>
                                                <li>Daily email updates with pictures of dog / cat</li>
                                                <li>Feed & fresh water</li>
                                                <li>Constant companion and lots of TLC</li>
                                            </ul>
                                        </div>
                                        <div class="cat-pricing">
                                            <h3>Pricing</h3>
                                            <ul>
                                                <li>Less than 12 hours (e.g. dinner to breakfast) - $700</li>
                                                <li>More than 12 hours (e.g. dinner to lunch) - $800</li>
                                            </ul>
                                        </div>
                                        <div class="cat-note">
                                            <span>Note</span>
                                            <p>
                                                - Additional 50% day charge for general public holiday Dog Sitting / Cat
                                                Sitting (exludes normal weekends)<BR>
                                                - Travel surcharge - no charge if total return cost under $20, if more
                                                charge difference <BR>
                                            </p>
                                        </div>
                                        <div class="next-button">
                                            <a class="scrol" href="#small-animal-section">Next<i
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
                                        <a class="scrol" href="#small-animal-section">Next<i
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
                                        <h2>Small Animal</h2>
                                    </div>
                                    <div class="text-box">
                                        <div class="cat-setting clearfix">
                                            <h3>Small Animal Sitting services included</h3>
                                            <ul>
                                                <li>Feeding, changing water</li>
                                                <li>Animal medication <span>Complimentary</span></li>
                                                <li>Pet Sitter play time with pet</li>
                                                <li>Water plants / pick up mail /
                                                    take out garbage <span>Complimentary</span></li>
                                                <li>Daily email updates with pictures of pet</li>
                                            </ul>
                                        </div>
                                        <div class="cat-pricing">
                                            <h3>Pricing</h3>
                                            <ul>
                                                <li>30 min - $160</li>
                                            </ul>
                                        </div>
                                        <div class="cat-note">
                                            <span>Note</span>
                                            <p>
                                                - Additional 50% day charge for general public holiday Pet Sitting
                                                (exludes
                                                normal weekends)<BR>
                                                - Travel surcharge - no charge if total return cost under $20, if more
                                                charge difference <BR>
                                            </p>
                                        </div>
                                        <div class="next-button">
                                            <a class="scrol" href="#faq-section">Next<i
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
                                    <h2>faq</h2>
                                    <div class="faq-colum-question">
                                        <div class="faq-colum-question-inner">
                                            <ul>
                                                <li id='id1'><a href='#'>So how does Pet Sitting work?</a></li>
                                                <li id='id2'><a href='#'>How do I know for sure that my pet will be ok
                                                        with
                                                        the pet sitter?</a></li>
                                                <li id='id3'><a href='#'>Why not bring my pets to a Pet Hotel or Pet
                                                        Kennel?</a></li>
                                                <li id='id4'><a href='#'>Why not hire a domestic helper instead of a pet
                                                        sitter?</a></li>
                                                <li id='id5'><a href='#'>How do I know my pet is doing fine?</a></li>
                                                <li id='id6'><a href='#'>How will the pet sitter access my home?</a>
                                                </li>
                                                <li id='id7'><a href='#'>How do I know I can trust the pet sitter to
                                                        enter
                                                        my home? </a></li>
                                                <li id='id8'><a href='#'>What if my pet is ill while I’m away?</a></li>
                                                <li id='id9'><a href='#'>What if I need to cancel the service due to
                                                        change
                                                        of plans?</a></li>
                                                <li id='id10'><a href='#'>How do I pay?</a></li>

                                            </ul>
                                        </div>
                                        <div class="faq-colum-ans-main">
                                            <div id='ans1' class='ans'>
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
                                                <div class='faq-answer'>
                                                    <div class='faq-answer-heding'>
                                                        <h4>So how does Pet Sitting work?</h4>
                                                    </div>
                                                    <div class='faq-answer-innner'>
                                                        <p>While you are away on vacation or business trips, your
                                                            assigned
                                                            Pet Sitter (aka Pet Nanny) will come to your home to take
                                                            care
                                                            of your beloved little ones in the comfort of their own
                                                            home. We
                                                            ensure their basic needs such as water, food, and bathroom
                                                            cleanliness are met, and we provide them with any medical
                                                            treatment or special care they need. The Dog Sitter or Cat
                                                            Sitter also provide them with lots of human interaction to
                                                            help
                                                            them feel less lonely, provide playtime to stimulate them,
                                                            and
                                                            just to be there to provide lots of TLC (Tender Loving
                                                            Care).
                                                            Our Pet Sitters / Dog Walkers are professionally trained,
                                                            certified in pet first aid, and are truly passionate about
                                                            caring for animals. We want to ensure that you can enjoy
                                                            your
                                                            time away and know that your precious little ones are in
                                                            good
                                                            hands.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id='ans2' class='ans'>
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
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
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
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
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
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
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
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
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
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
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
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
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
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
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
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
                                                <div class='close-icon'><a class='close-sec' href='#'><img
                                                            src='SJ/images/close-icon.png' alt='' /></a></div>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="next-button">
                                        <a class="scrol" href="#partnership-section">Next<i
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
                                <h2>partnership & pet resources</h2>
                                <div class="partnership-colum">
                                    <div class="partnership-colum-inner clearfix">
                                        <div class='partnership-box clearfix'>
                                            <div class='image-holder'>
                                                <img class='img-responsive' src='SJ/upl/partner/20131222_165132.jpg'
                                                    alt='' />
                                            </div>
                                            <div class='text-box'>
                                                <h3>Creature Comforts</h3>
                                                <span>Tel : 9773 0372</span>
                                                <a href='http://www.creaturecomforts.com.hk'
                                                    target='_blank"'>http://www.creaturecomforts.com.hk</a>
                                                <p>Creature Comforts is Hong Kong&#39;s premier veterinary housecall
                                                    service. Offering veterinary housecalls as well as pet food and
                                                    medicine
                                                    deliveries. Creature Comforts is the only housecall service that
                                                    also
                                                    provides patient transport to and from their own 24 hospital with
                                                    full
                                                    surgical, laboratory, x&#45;ray, ultrasound and hospitalisation
                                                    capabilities. No matter what the situation, Creature Comforts can
                                                    provide the solution.</p>
                                            </div>
                                        </div>
                                        <div class='partnership-box clearfix'>
                                            <div class='image-holder'>
                                                <img class='img-responsive' src='SJ/upl/partner/20131209_173647.jpg'
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
                                                <img class='img-responsive' src='SJ/upl/partner/20131209_174438.jpg'
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
                                                <img class='img-responsive' src='SJ/upl/partner/20131209_174616.jpg'
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
                                        </div>
                                    </div>
                                </div>
                                <div class="next-button">
                                    <a class="scrol" href="#testimonial-section">Next<i
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
                                <h2>testimonials</h2>
                                <div class="testimonial-column">
                                    <div class='testimonial-box'>
                                        <p>We used Furrenz pet sitters service while we were away on our business trip
                                            for
                                            24 days. We were very happy with her professionalism and care, detail update
                                            everyday with photos/ video. Our cats look great with no stressed when we
                                            back
                                            home. I recommend Furrenz Pet sitters to anyone in need! </p>
                                        <h4>Yumi</h4>
                                    </div>
                                    <div class='testimonial-box'>
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
                                    </div>
                                </div>
                                <div class="next-button">
                                    <a class="scrol" href="#contact-section">Next<i class="fa fa-caret-down"></i></a>
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
                                <h2>Contact</h2>
                                <div class="contact-info">
                                    <div class="contact-info-contant">
                                        <h3>KEEP IN TOUCH!</h3>
                                        <p>Feel free to send us an email, or look us up on Facebook: Furrenz Pet
                                            Sitters. We
                                            are looking forward to hearing from you.</p>
                                        <p>Interested in joining us as a pet sitter or dog walker? Please send us an
                                            email
                                            with your cv at career@furrenzpetsitters.com.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="contact-info-inner">
                                                <div class="image-holder">
                                                    <img class="img-responsive" src="SJ/images/c-whatsapp.png" alt="" />
                                                </div>
                                                <div class="text-box">
                                                    <p>Whatsapp us</p>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="contact-info-inner">
                                                <div class="image-holder">
                                                    <img class="img-responsive" src="SJ/images/c-mail.png" alt="" />
                                                </div>
                                                <div class="text-box">
                                                    <p>E-mail us</p>
                                                    <a href="javascript:void(0)"
                                                        onclick="emailClicked();">info@furrenzpetsitters.com</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="contact-info-inner">
                                                <div class="image-holder">
                                                    <img class="img-responsive" src="SJ/images/c-msg.png" alt="" />
                                                </div>
                                                <div class="text-box">
                                                    <p>Send us a Message</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form">
                                <div class="contact-form-inner">
                                    <h3>SEND US A MESSAGE</h3>
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
                                                    <img src="SJ/php/captcha/captcha.php" id="captcha-img" alt="" />
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process"><span><img src='SJ/img/loading.gif'><BR><BR>Data Processing</img></span></div>
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
        <div id="modal-13" class="modal fade modal-youtube" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UF-wqhUCGMk"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-14" class="modal fade modal-youtube" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8ONLfpPO2as"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-15" class="modal fade modal-youtube" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JehnQrOwtz0"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-16" class="modal fade modal-youtube" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/77ISyGYi-Gw"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-17" class="modal fade modal-youtube" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p-uvV0JJtZ8"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Large modal -->
        <div class="up-down">
            <ul>
                <li><a href="#"><img src="SJ/img/btn-txt_en.png" alt="" /></a></li>
                <li><a id="up" href="#"><img src="SJ/img/btn-up.png" alt="" /></a></li>
                <li><a id="down" href="#"><img src="SJ/img/btn-down.png" alt="" /></a></li>
                <li><a class="scrol" href="#header"><img src="SJ/img/btn-top.png" alt="" /></a></li>
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
        <script type="text/javascript" src="SJ/js/jquery.js"></script>
        <script type="text/javascript" src="SJ/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="SJ/js/lightgallery.js"></script>
        <script type="text/javascript" src="SJ/js/jquery.nicescroll.js"></script>
        <script type="text/javascript" src="SJ/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="SJ/js/custom.js"></script>

        <?php

get_footer();
?>
        <!-- </body> -->



        <!-- </html> -->