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
</head>

<body>
    <?php include 'views/cookies.php'; ?>

    <div id="container">

        <?php include 'views/header.php'; ?>

        <div class="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li>Our Offices</li>
                </ul>
            </div>
        </div>

        <div class="page-head">
            <div class="container">
                <h1>Our Offices</h1>
            </div>
        </div>

        <section class="offices">
            <div class="office-list container">
                <div class="office-address-row">
                    <div>
                        <div class="office-address">
                            <div class="image">
                                <a href="#"><img src="assets/img/offices/cambridge.jpg" alt="Cambridge Office"></a>
                            </div>
                            <div class="content">
                                <h2><a href="#">Cambridge Office</a></h2>
                                <address class="address">
                                    Unit 1.31,<br>
                                    St John's Innovation Centre,<br>
                                    Cowley Road, Milton,<br>
                                    Cambridge,<br>
                                    CB4 0WS
                                </address>
                                <address class="phone">
                                    <a href="tel:+441223375772">01223 37 57 72</a>
                                </address>
                                <div class="view-more">
                                    <a href="#" class="btn btn--web">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="office-address">
                            <div class="image">
                                <a href="#"><img src="assets/img/offices/wymondham.jpg" alt="Wymondham Office"></a>
                            </div>
                            <div class="content">
                                <h2><a href="#">Wymondham Office</a></h2>
                                <address class="address">
                                    Unit 15,<br>
                                    Penfold Drive,<br>
                                    Gateway 11 Business Park,<br>
                                    Wymondham, Norfolk,<br>
                                    NR18 0WZ
                                </address>
                                <address class="phone">
                                    <a href="tel:+441603704020">01603 70 40 20</a>
                                </address>
                                <div class="view-more">
                                    <a href="#" class="btn btn--web">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="office-address">
                            <div class="image">
                                <a href="#"><img src="assets/img/offices/yarmouth-2.jpg" alt="Great Yarmouth Office"></a>
                            </div>
                            <div class="content">
                                <h2><a href="#">Great Yarmouth Office</a></h2>
                                <address class="address">
                                    Suite F23,<br>
                                    Beacon Innovation Centre,<br>
                                    Beacon Park, Gorleston,<br>
                                    Great Yarmouth, Norfolk,<br>
                                    NR31 7RA
                                </address>
                                <address class="phone">
                                    <a href="tel:+441493603204">01493 60 32 04</a>
                                </address>
                                <div class="view-more">
                                    <a href="#" class="btn btn--web">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="bottom container">
            <div class="row">
                <div class="contact-info">
                    <div>
                        <p><strong>Email us on:</strong><br></p>
                        <p><a href="mailto:sales@netmatters.com" class="text-web">sales@netmatters.com</a></p>
                        <p><strong>Business hours:</strong></p>
                        <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
                    </div>
                    <div>
                        <p><a class="accordian" href="#">Out of Hours IT Support <i class="fa-solid fa-chevron-down"></i></a></p>
                        <div class="panel initiallyHidden">
                            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                            <p><strong>Monday - Friday 18:00 - 22:00
                            </strong><strong>Saturday 08:00 - 16:00
                            </strong><br><strong>Sunday 10:00 - 18:00</strong></p>
                            <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">

                </div>
            </div>
        </section>

        <?php include 'views/footer.php'; ?>
    </div>

    <?php include 'views/sidebar-menu.php'; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="assets/js/slick/slick.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>