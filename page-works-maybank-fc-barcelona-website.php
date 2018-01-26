<?php

/*
Template Name: Works - Maybank FC Barcelona Website
*/

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Maybank FC Barcelona</title>
        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="expires" content="-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="fragment" content="!" />
        <meta name="distribution" content="global" />
        <meta name="rating" content="general" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="<?php echo CSS; ?>/maybank/fc-barcelona/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo CSS; ?>/maybank/fc-barcelona/main.min.css">
    </head>
    <body class="text-white" data-spy="scroll" data-target="#headerMenu" data-offset="71">

    <div id="homeMain" style="background-image: url('<?php echo IMG; ?>/maybank/fc-barcelona/home-banner.jpg');" class="page-banner-home page-banner-full d-flex py-3 px-1 bg-cover bg-black">
        <div class="container m-auto text-center">
            <div class="px-5">
                <img src="<?php echo IMG; ?>/maybank/fc-barcelona/logo-maybank-fc-barcelona.png" alt="Maybank FC Barcelona Official Bank in Malaysia and Singapore" class="img-fluid">
            </div>
            <h1 class="font-weight-bold">
                <span>Welcome to the world of</span>
                Maybank and FC Barcelona
                <span>World-class club. First-class rewards. One card.</span>
            </h1>
            <div class="mb-5">
                <button onclick="scrollToElement(event, '#headerMain', false)" class="btn-maybank">
                    Find out more
                </button>
            </div>
        </div>
    </div>

    <aside id="mobileSidebar" class="mobile-sidebar select-none">
        <div class="wrapper bg-yellow">
            <button onclick="MobileSidebar.hide()" class="btn-close">
                &times;
            </button>
            <div class="menu list-unstyled">
                <a onclick="scrollToElement(event, '#homeMain', true)">
                    Home
                </a>
                <a onclick="scrollToElement(event, '#homeCard', true)">
                    About the card
                </a>
                <a onclick="scrollToElement(event, '#homePromotions', true)">
                    Promotions
                </a>
                <a onclick="scrollToElement(event, '#homeBenefits', true)">
                    Other details
                </a>
                <a onclick="scrollToElement(event, '#homeTimeline', true)">
                    About FC Barcelona
                </a>
            </div>
        </div>
    </aside>

    <header id="headerMain" class="header-main px-2 px-sm-3 bg-yellow">
        <div class="wrapper clearfix">
            <a onclick="scrollToElement(event, '#homeMain', true)" class="logo float-left">
                <img class="img-fluid" src="<?php echo IMG; ?>/maybank/fc-barcelona/logo-maybank.jpg" alt="Hashtag Interactive logo">
            </a>
            <div id="headerMenu" class="menu list-group list-unstyled d-none d-lg-block float-right">
                <a onclick="scrollToElement(event, '#homeCard', true)" href="#homeCard" class="list-group-item">
                    About the card
                </a>
                <a onclick="scrollToElement(event, '#homePromotions', true)" href="#homePromotions" class="list-group-item">
                    Promotions
                </a>
                <a onclick="scrollToElement(event, '#homeBenefits', true)" href="#homeBenefits" class="list-group-item">
                    Other details
                </a>
                <a onclick="scrollToElement(event, '#homeTimeline', true)" href="#homeTimeline" class="list-group-item">
                    About FC Barcelona
                </a>
            </div>
            <div class="d-lg-none float-right">
                <button onclick="MobileSidebar.show()" class="sidebar-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <div style="background-image: url('<?php echo IMG; ?>/maybank/fc-barcelona/home-bg-main.jpg');" class="home-main px-3 py-5 bg-black">
        <div id="homeCard" class="home-card home-panel container pt-4 pt-sm-5 pb-5 px-0">
            <h2 class="mx-auto mb-3 mb-lg-5 text-yellow font-weight-bold text-uppercase text-center">
                Maybank FC Barcelona Visa Signature Card
            </h2>
            <div class="row">
                <div class="col-lg-6 col-xl-7 py-3">
                    <p class="intro mb-5 text-lg-justify">
                        Introducing a first-class card in partnership with a world-class club. Enjoy exclusive privileges, lifestyle rewards and rebates throughout the year.
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-lg-12 col-xl-5">
                            <div class="d-flex mb-3">
                                <div class="mr-3">
                                    <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-key-info-1.png" alt="Unlimited 1.6% Cash Rebate">
                                </div>
                                <div class="my-auto">
                                    for all local
                                    transactions
                                    <br />
                                    (no cap and no minimum spend)
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="mr-3">
                                    <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-key-info-2.png" alt="2X Treats Points">
                                </div>
                                <div class="my-auto">
                                    for all foreign
                                    <br class="d-none d-xl-inline">
                                    transactions
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="mr-3">
                                    <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-key-info-3.png" alt="Trip for 2">
                                </div>
                                <div class="my-auto">
                                    Stand a chance to win a trip for 2 to watch FC Barcelona LIVE every football season*
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-7">
                            <div class="d-flex mb-3">
                                <div class="mr-3">
                                    <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-key-info-4.png" alt="10% Discount">
                                </div>
                                <div class="fc-store my-auto">
                                    on the FC Barcelona Official Online Store Asia Pacific
                                    <br />
                                    <small>
                                        (<a href="https://www.fcbarcelonastoreasia.com" target="_blank">www.fcbarcelonastoreasia.com</a>)
                                    </small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="mr-3">
                                    <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-key-info-5.png" alt="5% Discount">
                                </div>
                                <div class="my-auto">
                                    in FCBotiga official
                                    <br class="d-none d-lg-inline" />
                                    store in Camp Nou
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 d-flex">
                    <div class="m-auto text-center">
                        <div class="mb-5">
                            <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-maybank-fc-barcelona-card.jpg" alt="Maybank FC Barcelona Visa Signature Card" class="img-fluid">
                        </div>
                        <div>
                            <a href="" class="btn-maybank">
                                Apply now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="homePromotions" class="home-promotions home-panel container py-4 py-lg-5">
            <h2 class="home-panel-title mx-auto py-3 py-lg-4 text-yellow font-weight-bold text-center">
                Promotions
            </h2>
            <div class="promo-item py-4 py-sm-5 row flex-row-reverse">
                <div class="col-lg-5 px-0 text-center">
                    <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-fc-barcelona-football-stadium.jpg" alt="FC Barcelona football stadium" class="img-fluid mb-3">
                </div>
                <div class="col-lg-7 px-0">
                    <h2 class="home-panel-title mb-4 text-yellow font-weight-normal text-center text-lg-left">
                        Win a trip to watch FC Barcelona
                        <br class="d-none d-lg-inline" />
                        LIVE in Camp Nou in the 2018/2019 season
                    </h2>
                    <div class="body">
                        <p class="mb-4">
                            From 18 January to 30 June 2018, simply spend S$50 to be in the running to win the ultimate Camp Nou Experience. Prizes include a trip for 2 to watch FC Barcelona LIVE in Camp Nou during the 2018/2019 season, including return economy flight tickets, return airport transfers and a 3 Days/2 Nights (twin sharing) stay in a 3-star hotel. The more you spend, the more chances you get so start charging to your Maybank FC Barcelona Visa Signature Card now!
                        </p>
                        <div class="text-yellow font-weight-bold text-uppercase">
                            Key information
                        </div>
                        <ul class="list-maybank list-unstyled mb-4">
                            <li>
                                Campaign Period: 18 January to 30 June 2018
                            </li>
                            <li>
                                Valid for all Singapore-issued Maybank FC Barcelona Visa Signature Card
                            </li>
                            <li>
                                5 chances for every accumulated $50 of local currency transactions
                            </li>
                            <li>
                                10 chances for every accumulated $50 equivalent of foreign currency transactions
                            </li>
                        </ul>
                        <div>
                            <a href="" target="_blank" class="text-yellow">
                                <u>Terms and Conditions apply.</u>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-item py-4 py-sm-5 row flex-row-reverse">
                <div class="col-lg-5 px-0 text-center">
                    <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-maybank-fc-barcelona-cap.jpg" alt="Maybank FC Barcelona cap" class="img-fluid mb-3">
                </div>
                <div class="col-lg-7 px-0">
                    <h2 class="home-panel-title mb-4 text-yellow font-weight-normal text-center text-lg-left">
                        Receive a limited edition Cap and Lanyard
                    </h2>
                    <div class="body">
                        <p class="mb-4">
                            First 100 applicants from each selected Maybank Branches will receive a limited edition Maybank FC Barcelona Cap and Lanyard. Applicable only for the following Maybank Branches:
                        </p>
                        <div class="row no-gutters mb-4">
                            <div class="col-sm-5 col-md-6">
                                <ul class="list-maybank list-unstyled mb-0">
                                    <li>
                                        Maybank@AMK
                                    </li>
                                    <li>
                                        Maybank@HDBHub
                                    </li>
                                    <li>
                                        Maybank@HollandV
                                    </li>
                                    <li>
                                        Maybank@JurongPoint
                                    </li>
                                    <li>
                                        Maybank@MarineParade
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-5 col-md-6">
                                <ul class="list-maybank list-unstyled mb-0">
                                    <li>
                                        Maybank@Maybank Tower
                                    </li>
                                    <li>
                                        Maybank@nex
                                    </li>
                                    <li>
                                        Maybank@Tampines
                                    </li>
                                    <li>
                                        Maybank@WaterwayPoint
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="" target="_blank" class="text-yellow">
                                <u>Click here for nearest branch to you</u>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="homeBenefits" class="home-benefits home-panel container py-5 px-0">
            <div class="row py-lg-5">
                <div class="col-lg-6 mb-3 mb-lg-5">
                    <h3 class="home-panel-title mb-2 text-yellow">
                        Card Benefits
                    </h3>
                    <ul class="list-maybank list-unstyled">
                        <li>
                            1.6% unlimited cash rebate on all local spend with no cap and no minimum spend
                        </li>
                        <li>
                            2X TREATS Points with every dollar spent on foreign currency transactions
                        </li>
                        <li>
                            Stand a chance to win a trip for 2 to watch FC Barcelona LIVE every football season. <a href="" target="_blank"><u>Terms and Conditions apply.</u></a>
                        </li>
                        <li>
                            10% Discount on the FC Barcelona Official Online Store Asia Pacific (<a href="https://www.fcbarcelonastoreasia.com/" target="_blank">fcbarcelonastoreasia.com</a>)
                        </li>
                        <li>
                            5% Discount at the FCBotiga official store in Camp Nou
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mb-3 mb-lg-5">
                    <h3 class="home-panel-title mb-2 text-yellow">
                        Other Benefits
                    </h3>
                    <ul class="list-maybank list-unstyled">
                        <li>
                            With the flexibility of TREATS Points, <a href="" target="_blank"><u>redeem a host of privileges</u></a> such as shopping and dining vouchers, cash credits and more, other than KrisFlyer Miles or AsiaMiles.
                        </li>
                        <li>
                            Enjoy a host of attractive privileges in Singapore, Malaysia, Indonesia and the Philippines.
                        </li>
                        <li>
                            Access Maybank Card's suite of <a href="" target="_blank"><u>financial services</u></a> including interest-free instalment payment plans such as <a href="" target="_blank"><u>EzyPay</u></a>, <a href="" target="_blank"><u>FlexiPay</u></a> and more.
                        </li>
                        <li>
                            <a href="" target="_blank"><u>Maybank Visa Money Transfer</u></a> allows you to transfer funds from your Card to any Visa Card overseas, at attractive rates.
                        </li>
                        <li>
                            Withdraw cash from ATMs worldwide. <a href="" target="_blank"><u>Fees and charges apply</u></a>.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mb-3 mb-lg-5">
                    <h3 class="home-panel-title mb-2 text-yellow">
                        Annual fee
                    </h3>
                    <ul class="list-maybank list-unstyled">
                        <li>
                            Principal Card: S$120 p.a. (automatically waived with a total
                            <br class="d-none d-lg-inline" />
                            minimum spend of S$10,000 per annum.)
                        </li>
                        <li>
                            Supplementary Card: Free
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mb-0">
                    <h3 class="home-panel-title mb-2 text-yellow">
                        Eligibility
                    </h3>
                    <ul class="list-maybank list-unstyled">
                        <li>
                            Be at least 21 years of age
                        </li>
                        <li>
                            Have a minimum annual income of
                            <ul class="list-maybank list-unstyled pl-4">
                                <li>
                                    S$30,000 for Singapore Citizen or Singapore Permanent Resident
                                </li>
                                <li>
                                    $45,000 for Malaysian Citizen in employment for at least 1 year
                                </li>
                                <li>
                                    S$60,000 for Foreigner in employment for at least 1 year
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="homeTimeline" class="home-timeline container py-4 py-lg-5 px-0">
            <h2 class="home-panel-title mx-auto py-4 text-yellow font-weight-bold">
                About FC Barcelona - Through the years
            </h2>
            <div class="timeline">
                <div class="item">
                    <div class="divider clearfix">
                        <div class="image">
                            <div>
                                <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-timeline-1.jpg" alt="The First Kit" class="img-fluid">
                            </div>
                        </div>
                        <div class="copy">
                            <div class="title mb-1 text-yellow font-weight-bold text-uppercase">
                                The First Kit
                            </div>
                            <p>
                                The first shirt was half blue and the other half claret. The sleeves were opposite colours and the shorts were white.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="divider clearfix">
                        <div class="image">
                            <div>
                                <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-timeline-2.jpg" alt="Camp Nou Inauguration" class="img-fluid">
                            </div>
                        </div>
                        <div class="copy">
                            <div class="title mb-1 text-yellow font-weight-bold text-uppercase">
                                1957: Camp Nou Inauguration
                            </div>
                            <p>
                                The Camp Nou building works began in 1954 and were completed three years later, on 24 September 1957. The stadium had an initial capacity of 99,053 spectators.
                                <br />
                                Today, Camp Nou is the stadium with the largest capacity in Europe, accommodating 99,354 spectators.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="divider clearfix">
                        <div class="image">
                            <div>
                                <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-timeline-3.jpg" alt="Cruyff Joined FC Barcelona" class="img-fluid">
                            </div>
                        </div>
                        <div class="copy">
                            <div class="title mb-1 text-yellow font-weight-bold text-uppercase">
                                1973: Cruyff Joined FC Barcelona
                            </div>
                            <p>
                                Johan Cruyff became the leader of a talented team and demonstrated an intelligent style of play and superb technique.
                                <br />
                                The Dutch star went down in history for some unforgettable moments, like his memorable goal against Atlético de Madrid.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="divider clearfix">
                        <div class="image">
                            <div>
                                <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-timeline-4.jpg" alt="The Return Of Cruyff" class="img-fluid">
                            </div>
                        </div>
                        <div class="copy">
                            <div class="title mb-1 text-yellow font-weight-bold text-uppercase">
                                1988: The Return Of Cruyff
                            </div>
                            <p>
                                With Cruyff as manager, FC Barcelona experienced a glorious era. Cruyff's track record includes one European Cup, four Spanish League championships, one Cup Winners' Cup, one Spanish Cup and three Spanish Supercups.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="divider clearfix">
                        <div class="image">
                            <div>
                                <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-timeline-5.jpg" alt="The Second Champions League Victory" class="img-fluid">
                            </div>
                        </div>
                        <div class="copy">
                            <div class="title mb-1 text-yellow font-weight-bold text-uppercase">
                                2006: The Second Champions League Victory
                            </div>
                            <p>
                                FC Barcelona had its name engraved on the Champions League trophy for the second time after overcoming Arsenal 2-1 in Paris. It was the victory of joyous football, the so-called "jogo bonito", a bold and daring style, acclaimed the world over.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="divider clearfix">
                        <div class="image">
                            <div>
                                <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-timeline-6.jpg" alt="Josep Guardiola Became The Manager" class="img-fluid">
                            </div>
                        </div>
                        <div class="copy">
                            <div class="title mb-1 text-yellow font-weight-bold text-uppercase">
                                2008: Josep Guardiola Became The Manager
                            </div>
                            <p>
                                Through the years, the team produced an amazing string of major titles, including two Champions Leagues, three Spanish Leagues and two Clubs World Cup. 2009 was the extraordinary year when FC Barcelona won all six major trophies, thereby completing an "unprecedented sextuple".
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="divider clearfix">
                        <div class="image">
                            <div>
                                <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-timeline-7.jpg" alt="Wembley, Again" class="img-fluid">
                            </div>
                        </div>
                        <div class="copy">
                            <div class="title mb-1 text-yellow font-weight-bold text-uppercase">
                                2011: Wembley, Again
                            </div>
                            <p>
                                On 28 May 2011 FC Barcelona lifted its fourth Champions League trophy. The 3-1 victory came at the new Wembley Stadium, the same place where in 1992 Cruyff's FC Barcelona had won the trophy for the first time. FC Barcelona played for the title against Manchester United. At the end of the summer FC Barcelona confirmed its greatness by winning the Spanish Super Cup and EUFA Super Cup.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="divider clearfix">
                        <div class="image">
                            <div>
                                <img src="<?php echo IMG; ?>/maybank/fc-barcelona/home-timeline-8.jpg" alt="The Second Treble In Club History" class="img-fluid">
                            </div>
                        </div>
                        <div class="copy">
                            <div class="title mb-1 text-yellow font-weight-bold text-uppercase">
                                2015: The Second Treble In Club History
                            </div>
                            <p>
                                FC Barcelona celebrated their Treble of La Liga, the Copa del Rey and the Champions League with a victory parade along the streets of Barcelona.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item p-0"></div>
            </div>
        </div>
    </div>

    <footer class="footer-main py-5 px-1 text-center">
        Copyright © 2018 | Maybank FC Barcelona Visa Signature Card<br />
        <br />
        <a href="" target="" class="text-yellow">Maybank FC Barcelona Visa Signature Terms and Conditions</a> | <a href="" target="_blank" class="text-yellow">Maybank Credit Card Terms and Conditions</a>
    </footer>

    <script src="<?php echo JS; ?>/maybank/fc-barcelona/jquery.min.js"></script>
    <script src="<?php echo JS; ?>/maybank/fc-barcelona/popper.min.js"></script>
    <script src="<?php echo JS; ?>/maybank/fc-barcelona/bootstrap.min.js"></script>
    <script src="<?php echo JS; ?>/maybank/fc-barcelona/main.min.js"></script>

    </body>
    </html>