<?php

use App\ContactForm;
use App\Enquiries;

require dirname(__DIR__) . '/src/bootstrap.php';

$form = null;
if (!empty($_POST)) {
    $form = new ContactForm($_POST);
}

?><!DOCTYPE html>
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
    <?php include dirname(__DIR__) . '/views/cookies.php'; ?>

    <div id="container">

        <?php include dirname(__DIR__) . '/views/header.php'; ?>

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
                        <p class="out-of-hours"><a class="accordian" href="#">Out of Hours IT Support <i class="fa-solid fa-chevron-down"></i></a></p>
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
                    <form method="post" action="/contact-us.php#contact-form" id="contact-form">
                        <div class="alert-area">
                            <?php
                            if ($form) {
                                if ($form->validate()) {
                                    // display success message
                                    echo '<div class="flash-message form-success">'.PHP_EOL;
                                    echo '    <button type="button" class="close">×</button>'.PHP_EOL;
                                    echo 'Your message has been sent!'.PHP_EOL;
                                    echo '</div>'.PHP_EOL;

                                    // if form is valid add to database 
                                    try {
                                        $enquiry = new Enquiries($db);
                                        $enquiry->createEnquiry($form->getInput());
                                    } catch (PDOException $e) {
                                        echo '<div class="flash-message form-error">'.PHP_EOL;
                                        echo '    <button type="button" class="close">&times;</button>'.PHP_EOL;
                                        echo 'Error adding enquiry to DB.'.PHP_EOL;
                                        echo '</div>'.PHP_EOL;
                                    }
                                } else {
                                    // display error messages
                                    foreach ($form->getErrors() as $errorMsg) {
                                        echo '<div class="flash-message form-error">'.PHP_EOL;
                                        echo '    <button type="button" class="close">&times;</button>'.PHP_EOL;
                                        echo $errorMsg.PHP_EOL;
                                        echo '</div>'.PHP_EOL;
                                    }
                                }
                            }
                            ?>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="name" class="required">Your Name</label>
                                <input class="form-control" name="name" id="name" type="text" value="<?php echo $form && $form->hasErrors() ? $form->getInput('name') : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="company">Company Name</label>
                                <input class="form-control" name="company" id="company" type="text" value="<?php echo $form && $form->hasErrors() ? $form->getInput('company') : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="required">Your Email</label>
                                <input class="form-control" name="email" id="email" type="email" value="<?php echo $form && $form->hasErrors() ? $form->getInput('email') : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="required">Your Telephone Number</label>
                                <input class="form-control" name="phone" id="phone" type="text" value="<?php echo $form && $form->hasErrors() ? $form->getInput('phone') : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="required">Message</label>
                            <textarea class="form-control" name="message" id="message" cols="50" rows="10"><?php echo $form && $form->hasErrors() ? $form->getInput('message') : 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?'; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="pretty-checkbox <?php echo $form && $form->hasErrors() && $form->getInput('marketing_preferences') ? ' active' : ''; ?>">
                                <span class="media">
                                    <span class="media-left checkbox-left">
                                        <span class="button">
                                            <span class="mdi-action-done"></span>
                                            <input type="checkbox" name="marketing_preferences" id="marketing_preferences" value="1" <?php echo $form && $form->hasErrors() && $form->getInput('marketing_preferences') ? ' checked' : ''; ?>>
                                        </span>
                                    </span>
                                    <span class="media-body">
                                        Please tick this box if you wish to receive marketing information from us.
                                        Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we keep your data safe.
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="form-group form-label recaptcha-terms">
                            <span>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer"><u>Privacy Policy</u></a> and <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer"><u>Terms of Service</u></a> apply.</span>
                        </div>
                        <div class="action-block">
                            <button class="btn btn-primary">Send Enquiry</button>

                            <small class="helper-text"><span class="text-danger">*</span> Fields Required</small>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php include dirname(__DIR__) . '/views/footer.php'; ?>
    </div>

    <?php include dirname(__DIR__) . '/views/sidebar-menu.php'; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="assets/js/slick/slick.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>