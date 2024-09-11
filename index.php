<?php require __DIR__ . '/src/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/js/slick/slick.css">
    <link rel="stylesheet" href="assets/js/slick/slick-theme.css">
</head>

<body>
    <?php include 'views/cookies.php'; ?>

    <div id="container">

        <?php include 'views/header.php'; ?>

        <section class="banner">
            <div>
                <div class="slide-item">
                    <div class="banner__img">
                        <img src="assets/img/banner/banner-leading.webp" alt="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
                    </div>
                    <div class="banner__content">
                        <div class="container">
                            <div class="h1">The East Of England's Leading Technology Company</div>
                            <p>Performance-driven digital and technology services <br> with complete transparency.</p>
                            <a class="btn btn--web" href="#">Why Choose Us? <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="slide-item">
                    <div class="banner__img">
                        <img src="assets/img/banner/banner-bespoke.webp" alt="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
                    </div>
                    <div class="banner__content">
                        <div class="container">
                            <div class="h1">Bespoke Software</div>
                            <p>Delivering expert bespoke software <br> solutions across a range of industries.</p>
                            <a class="btn btn--software" href="#">Find Out More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="slide-item">
                    <div class="banner__img">
                        <img src="assets/img/banner/banner-it.webp" alt="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
                    </div>
                    <div class="banner__content">
                        <div class="container">
                            <div class="h1">IT Support</div>
                            <p>Fast and cost-effective IT support <br> services for your business.</p>
                            <a class="btn btn--it" href="#">Find Out More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="slide-item">
                    <div class="banner__img">
                        <img src="assets/img/banner/banner-digital.webp" alt="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
                    </div>
                    <div class="banner__content">
                        <div class="container">
                            <div class="h1">Digital Marketing</div>
                            <p>Generating your new business through <br> results-driven marketing activities.</p>
                            <a class="btn btn--digital" href="#">Find Out More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="slide-item">
                    <div class="banner__img">
                        <img src="assets/img/banner/banner-telecoms.webp" alt="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
                    </div>
                    <div class="banner__content">
                        <div class="container">
                            <div class="h1">Telecoms Services</div>
                            <p>A new approach to connectivity, see <br> how we can help your business.</p>
                            <a class="btn btn--telecoms" href="#">Find Out More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="slide-item">
                    <div class="banner__img">
                        <img src="assets/img/banner/banner-web.webp" alt="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
                    </div>
                    <div class="banner__content">
                        <div class="container">
                            <div class="h1">Web Design</div>
                            <p>For businesses looking to make a strong <br> and effective first impression.</p>
                            <a class="btn btn--web" href="#">Find Out More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="slide-item">
                    <div class="banner__img">
                        <img src="assets/img/banner/banner-security.webp" alt="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
                    </div>
                    <div class="banner__content">
                        <div class="container">
                            <div class="h1">Cyber Security</div>
                            <p>Keeping businesses and their customers <br> sensitive information protected.</p>
                            <a class="btn btn--security" href="#">Find Out More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <h1>Our Services</h1>
                <h3 class="view-work-top"><a href="#">View Our Work <i class="fa-solid fa-arrow-right"></i></a></h3>
                <div class="service-list">
                    <div class="card software">
                        <a href="#">
                            <i class="fa-solid fa-laptop-code"></i>
                            <h2>Bespoke Software</h2>
                            <p>Bespoke software solutions for all your business needs including integrations and reporting.</p>
                            <div class="btn">Read More</div>
                        </a>
                    </div>
                    <div class="card it">
                        <a href="#">
                            <i class="fa-solid fa-display"></i>
                            <h2>IT Support</h2>
                            <p>Fully managed IT support and consultancy packages tailored to meet your exact business needs.</p>
                            <div class="btn">Read More</div>
                        </a>
                    </div>
                    <div class="card digital">
                        <a href="#">
                            <i class="fa-solid fa-chart-simple"></i>
                            <h2>Digital Marketing</h2>
                            <p>Driven brand awareness & ROI through creative digital marketing campaigns.</p>
                            <div class="btn">Read More</div>
                        </a>
                    </div>
                    <div class="card telecoms">
                        <a href="#">
                            <i class="fa-solid fa-phone-volume"></i>
                            <h2>Telecoms Services</h2>
                            <p>Business telephony solutions including mobile & connectivity solutions.</p>
                            <div class="btn">Read More</div>
                        </a>
                    </div>
                    <div class="card web">
                        <a href="#">
                            <i class="fa-solid fa-code"></i>
                            <h2>Web Design</h2>
                            <p>User-centric design for businesses looking to make a lasting impression.</p>
                            <div class="btn">Read More</div>
                        </a>
                    </div>
                    <div class="card security">
                        <a href="#">
                            <i class="fa-solid fa-shield-halved"></i>
                            <h2>Cyber Security</h2>
                            <p>Prevention, testing, consultancy & breach management services.</p>
                            <div class="btn">Read More</div>
                        </a>
                    </div>
                    <div class="card developer">
                        <a href="#">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <h2>Developer Training</h2>
                            <p>Web design & software training courses designed to secure a job in tech.</p>
                            <div class="btn">Read More</div>
                        </a>
                    </div>
                </div>
                <h3 class="view-work-bottom">
                    <a href="#">View Our Work <i class="fa-solid fa-arrow-right"></i></a>
                </h3>
            </div>
        </section>

        <aside class="logo-list logo-list--accreditations">
            <img src="assets/img/accreditations/google-partner.webp" alt="Google Partner">
            <img src="assets/img/accreditations/living_wage.webp" alt="Living Wage">
            <img src="assets/img/accreditations/norfolk_prohelp.webp" alt="Norfolk Prohelp">
            <img src="assets/img/accreditations/investing-in-future-growth.webp" alt="Investing In Future Growth">
            <img src="assets/img/accreditations/norfolk-carbon-charter.webp" alt="Norfolk Carbon Charter">
            <img src="assets/img/accreditations/PPC_logo.webp" alt="Prompt Payment Code">
            <img src="assets/img/accreditations/princess-royal-training.webp" alt="Princess Royal Training">
            <img src="assets/img/accreditations/future-50.webp" alt="Future 50">
            <img src="assets/img/accreditations/qms.webp" alt="ISO 9001">
            <img src="assets/img/accreditations/iso_27001.webp" alt="ISO 27001">
            <img src="assets/img/accreditations/skills-of-tomorrow.webp" alt="Skill of Tomorrow">
            <img src="assets/img/accreditations/cyber-essentials-colour.webp" alt="Cyber Essentials">
        </aside>

        <main class="home-main">
            <div class="container">
                <div class="flex">
                    <div class="col">
                        <h1>Welcome To Netmatters</h1>
                        <p>Netmatters is a leading <a href="#">Bespoke Software</a>, <a href="#">IT Support</a>, and <a href="#">Digital Marketing</a> company based in the East of England with offices in <a href="#">Cambridge</a>, <a href="#">Wymondham</a>, and <a href="#">Great Yarmouth</a>.</p>
                        <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.</p>
                        <p>We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.</p>
                        <a class="btn btn--primary why-choose-btn" href="#">Why Choose Us?<i class="fa-solid fa-arrow-right"></i></a>&nbsp;&nbsp;
                        <a class="btn btn--primary" href="#">Our Culture<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="col">
                        <h2>What Our Clients Think</h2>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <figure class="hp-review">
                            <blockquote>
                                Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!
                            </blockquote>
                            <figcaption>Eleanor Bishop, Head of Marketing - <a href="#">Ashcroft Partnership LLP</a></figcaption>
                        </figure>

                        <a class="btn btn-primary btn--google" href="#">Google Reviews<i class="fa-solid fa-arrow-right"></i></a>&nbsp;&nbsp;
                        <a class="btn btn-primary btn--trustpilot" href="#">TrustPilot Reviews<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </main>

        <section class="articles container">
            <div class="row">
                <h1>Latest News</h1>

                <a class="view-all-top" href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="article-list">
                <?php
                    $news = new News($db);
                    foreach ($news->getLatest() as $item) {
                        include 'views/latest-news.php';
                    }
                ?>
            </div>
            <a class="view-all view-all-bottom" href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
        </section>

        <aside class="logo-list logo-list--clients">
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Black Swan Care Group</h3>
                        <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
                        <a class="btn btn--software" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/black_swan_logo.webp" alt="Black Swan Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Xupes</h3>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/xupes_logo.webp" alt="Xupes Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>BEAT</h3>
                        <p>The UK's eating disorder charity founded in 1989.</p>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/beat_logo.webp" alt="BEAT Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Survey Solutions</h3>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/survey_solutions_logo.webp" alt="Survey Solutions Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>GDST</h3>
                        <p>The <a href="#">Girls' Day School Trust (GDST)</a> is the UK's leading family of 25 independent girls' schools.</p>
                        <a class="btn btn--digital" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/girls_day_school_trust_logob.webp" alt="GDST Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Girl Guiding Anglia</h3>
                        <p>Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the UK.</p>
                        <a class="btn btn--it" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/girl_guides_anglia_logo.webp" alt="Girl Guiding Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Sweetzy</h3>
                        <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                        <a class="btn btn--digital" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/sweetzy_logo.webp" alt="Sweetzy Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Howes Percival</h3>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/howespercivallogo.webp" alt="Howes Percival Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Ashcroft Partnership LLP</h3>
                        <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
                        <a class="btn btn--web" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/ashcroftlogo_landscape_goldblack_DP60P-small.webp" alt="Ashcroft Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>One Traveller</h3>
                        <p><a href="#">One Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
                        <a class="btn btn--web" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/onetravellerlogo_white_figuire.webp" alt="One Traveller Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Searles Leisure Resort</h3>
                        <p>Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.</p>
                        <a class="btn btn--digital" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/searles_logo.webp" alt="Searles Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Busseys</h3>
                        <p>One of the UK's leading Ford dealerships.</p>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/busseys_logo.webp" alt="Busseys Logo">
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div class="details">
                        <h3>Crane Garden Buildings</h3>
                        <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                        <div class="arrow"></div>
                    </div>
                    <img src="assets/img/clients/crane_logo.webp" alt="Crane Garden Buildings Logo">
                </div>
            </div>

        </aside>

        <?php include 'views/footer.php'; ?>
    </div>

    <?php include 'views/sidebar-menu.php'; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="assets/js/slick/slick.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>