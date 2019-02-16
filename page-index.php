<?php

/*
Template Name: Index
*/

get_header('index'); ?>

    <a onclick="scrollToHref(event)" id="scrollToTopBtn" class="scroll-to-top-btn text-white text-center select-none">
        <i class="fa fa-angle-up"></i>
    </a>

    <section id="main" style="background-image: url('<?php echo IMG; ?>/bg-home.jpg');" class="page-banner-full d-flex px-1 py-5 bg-image-cover bg-overlay bg-black">
        <div class="container m-auto text-white text-center">
            <div class="mb-4 px-5">
                <img src="<?php echo IMG; ?>/logo-da.png" alt="Dominic Arrojado" class="img-fluid page-banner-title font-weight-bold text-capitalize">
            </div>
            <p class="page-banner-content mb-5">
                Driven · Disciplined · Determined
            </p>
        </div>
        <div class="scroll-to-bottom">
            <a onclick="scrollToHref(event)" href="#about" class="animation-bounce">
                <i class="fa fa-angle-down"></i>
            </a>
        </div>
    </section>

    <section id="about" class="home-about px-1 py-5">
        <div class="container py-md-5 text-center">
            <h2 class="panel-title mb-4 font-weight-bold text-capitalize">
                About me
            </h2>
            <div class="mb-4 mb-md-0">
                <div class="panel-content text-default">
                    <p class="mb-4">
                        My name is Dominic Arrojado, I'm a web developer specializing in both front-end & back-end development. I'm experienced in developing small to large web applications. I'm well-versed in numerous programming languages including React, Redux, Express/Node.js, Meteor, Less, PHP, JavaScript, HTML and CSS.
                    </p>
                    <p>
                        I'm currently working at <a href="https://www.razer.com" target="_blank">Razer Inc.</a> as a Web Developer.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-work px-1 py-5 bg-gray">
        <div class="container py-md-5 text-center">
            <h2 class="panel-title mb-3 font-weight-bold text-capitalize">
                My work
            </h2>
            <p class="panel-content mb-5 text-default">
                A bunch of things I've done so far.
            </p>
            <div id="homeWork" class="row justify-content-center collapsed">
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://api.razer.com" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-razer-developer-portal-app.jpg" alt="Razer Developer Portal" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Razer Developer Portal
                        </h3>
                        <p class="text-default">
                            A portal for third-party developers to manage their projects using Razer ID API.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://razerid.razer.com" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-razer-id-website.jpg" alt="Razer ID Website" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Razer ID
                        </h3>
                        <p class="text-default">
                            Profile management and authentication service tool for all Razer services.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a title="Not available to public yet." data-toggle="tooltip" data-placement="top" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-qwerk-website.jpg" alt="Qwerk Website" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Qwerk Website
                        </h3>
                        <p class="text-default">
                            Marketing website for Qwerk, a project management + chat tool.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a title="Not available to public yet." data-toggle="tooltip" data-placement="top" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-qwerk-app.jpg" alt="Qwerk" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold text-capitalize">
                            Qwerk
                        </h3>
                        <p class="text-default">
                            Project management + chat tool for productivity. It has notes and timer feature as well.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-maybank-fc-barcelona-website" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-maybank-fc-barcelona-website-2018.jpg" alt="Maybank: FC Barcelona Website 2018" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold text-capitalize">
                            Maybank: FC Barcelona
                        </h3>
                        <p class="text-default">
                            Microsite for Maybank to introduce its FC Barcelona Visa Signature Card.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://food-republic-capsule-surprise-2017-auekvpyglf.now.sh" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-food-republic-capsule-surprise-2017.jpg" alt="Food Republic: Capsule Surprise 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold text-capitalize">
                            Food Republic: Capsule Surprise
                        </h3>
                        <p class="text-default">
                            A classic game for Food Republic's Wisma Atria re-opening.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://aptamil-build-your-babys-foundation-2017-nqgruqlevj.now.sh" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-aptamil-build-your-babys-foundation-2017.jpg" alt="Aptamil: Build Your Baby's Foundation to be One Step Ahead 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Aptamil: Build Your Baby's Foundation to be One Step Ahead
                        </h3>
                        <p class="text-default">
                            Campaign for Aptamil to promote the 2 key pillars of foundation: natural defences and brain development.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-kronenbourg-1664-website" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-kronenbourg-website-2017.jpg" alt="Kronenbourg Website 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Kronenbourg 1664
                        </h3>
                        <p class="text-default">
                            Microsite for the most sold French beer in the world and the market leader for high-end premium beers.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://singtel-event-app-slideshow-2017-lgxykrdcsr.now.sh" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-singtel-data-x-infinity-slideshow-2017.jpg" alt="Singtel: Data x Infinity Slideshow 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Singtel: Data x Infinity Slideshow
                        </h3>
                        <p class="text-default">
                            Slideshow of images from Singtel: Data x Infinity App to be displayed on a wide screen.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://singtel-event-app-2017-gdhxomdxki.now.sh" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-singtel-data-x-infinity-2017.jpg" alt="Singtel: Data x Infinity 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Singtel: Data x Infinity
                        </h3>
                        <p class="text-default">
                            Web app for Singtel's event promoting new mobile data add-on.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://anti-drug-app-slideshow-2017-dgxfjnneej.now.sh" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-cnb-anti-drug-abuse-campaign-slideshow-2017.jpg" alt="CNB: Anti Drug Abuse Campaign Slideshow 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            CNB: Anti Drug Abuse Campaign Slideshow
                        </h3>
                        <p class="text-default">
                            Slideshow of pledges from CNB: Anti Drug Abuse Campaign App to be displayed on a wide screen.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://anti-drug-app-2017-tkxzbueqpv.now.sh" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-cnb-anti-drug-abuse-campaign-2017.jpg" alt="CNB: Anti Drug Abuse Campaign 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            CNB: Anti Drug Abuse Campaign
                        </h3>
                        <p class="text-default">
                            Campaign that aims to raise awareness and support for the anti-drug cause in Singapore.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://www.hashtag-interactive.com" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-hashtag-interactive-website-2017.jpg" alt="Hashtag Interactive Website 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Hashtag Interactive
                        </h3>
                        <p class="text-default">
                            Website for a boutique digital marketing agency that is optimised for a digital-centric world.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://vday-card-2017-react-qhthsyqden.now.sh" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-hashtag-interactive-to-my-valentine-2017.jpg" alt="To My Valentine 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            To My Valentine
                        </h3>
                        <p class="text-default">
                            Valentine's day card app that lets you send cute e-cards to your special someone.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://cny-fortune-teller-2017-tukrbyzsir.now.sh" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-hashtag-interactive-cny-fortune-teller-2017.jpg" alt="CNY: Fortune Teller 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            CNY: Fortune Teller
                        </h3>
                        <p class="text-default">
                            Quirky lil' 2017 horoscope app to see what the Year of the Rooster has in store for you.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="https://hashtag-christmas-game-2016-react-xfkynmlhsp.now.sh" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-hashtag-interactive-christmas-memory-game-2016.jpg" alt="Holly Jolly Memory Game 2016" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Holly Jolly Memory Game (2016)
                        </h3>
                        <p class="text-default">
                            Simon-inspired memory game for Christmas by Hashtag Interactive.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-m1-data-passport-4-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-m1-data-passport-4-edm-2017.jpg" alt="M1 Data Passport EDM IV 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            M1 Data Passport IV
                        </h3>
                        <p class="text-default">
                            HTML email template for M1 Data Passport.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-m1-data-passport-3-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-m1-data-passport-3-edm-2017.jpg" alt="M1 Data Passport EDM III 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            M1 Data Passport III
                        </h3>
                        <p class="text-default">
                            HTML email template for M1 Data Passport.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-m1-data-passport-2-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-m1-data-passport-2-edm-2017.jpg" alt="M1 Data Passport EDM II 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            M1 Data Passport II
                        </h3>
                        <p class="text-default">
                            HTML email template for M1 Data Passport.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-m1-data-passport-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-m1-data-passport-edm-2017.jpg" alt="M1 Data Passport EDM 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            M1 Data Passport
                        </h3>
                        <p class="text-default">
                            HTML email template for M1 Data Passport.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-hashtag-interactive-welcome-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-hashtag-interactive-welcome-edm-2017.jpg" alt="Hashtag Interactive Welcome EDM 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            Welcome to Hashtag!
                        </h3>
                        <p class="text-default">
                            HTML email template to welcome new Hashtag Interactive clients.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-axa-september-promo-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-axa-september-promo-edm-2017.jpg" alt="AXA September Promo EDM 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            AXA September Promo
                        </h3>
                        <p class="text-default">
                            HTML email template for AXA September promotion.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-axa-singtel-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-axa-singtel-edm-2017.jpg" alt="AXA / Singtel EDM 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            AXA / Singtel
                        </h3>
                        <p class="text-default">
                            HTML email template for AXA / Singtel promotion.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-axa-smart-travel-2-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-axa-smart-travel-2-edm-2017.jpg" alt="AXA Smart Travel II EDM 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            AXA Smart Travel II
                        </h3>
                        <p class="text-default">
                            HTML email template for AXA Smart Travel promotion.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-axa-smarthome-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-axa-smarthome-edm-2017.jpg" alt="AXA SmartHome EDM 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            AXA SmartHome
                        </h3>
                        <p class="text-default">
                            HTML email template for AXA SmartHome promotion.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-axa-shield-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-axa-shield-edm-2017.jpg" alt="AXA Shield EDM 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            AXA Shield
                        </h3>
                        <p class="text-default">
                            HTML email template for AXA Shield promotion.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-axa-mothers-day-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-axa-mothers-day-edm-2017.jpg" alt="AXA Mother's Day EDM 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            AXA Mother's Day
                        </h3>
                        <p class="text-default">
                            HTML email template for AXA mother's day promotion.
                        </p>
                    </div>
                </div>
                <div class="work-item col-lg-6 mb-5">
                    <a href="/works-axa-smart-travel-edm" target="_blank" class="d-inline-block mb-3">
                        <img src="<?php echo IMG; ?>/work-axa-smart-travel-edm-2017.jpg" alt="AXA Smart Travel EDM 2017" class="img-fluid">
                    </a>
                    <div class="px-sm-5">
                        <h3 class="font-weight-bold">
                            AXA Smart Travel
                        </h3>
                        <p class="text-default">
                            HTML email template for AXA Smart Travel promotion.
                        </p>
                    </div>
                </div>
                <button onclick="viewAllWork()" id="btnViewAllWork" type="button" class="btn-dominic btn-dominic-black">View all</button>
            </div>
        </div>
    </section>

    <section class="home-contact px-1 py-5">
        <div class="container py-md-5 text-center">
            <h2 class="panel-title mb-4 font-weight-bold text-capitalize">
                Say hello
            </h2>
            <p class="panel-content mb-5 text-default">
                Write in a few words whatever you want to tell me.
            </p>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-8 mb-4">
                    <?php echo do_shortcode('[contact-form-7 id="312" title="Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();