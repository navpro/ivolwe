<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>contact-us | Evolwe Technologies</title>
    <?php include('header_link.php'); ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
<div class="page-wrapper">
    <div class="preloader">
        <div class="loader">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
        </div>
    </div>

    <?php include('header.php'); ?>

    <section class="page-title"
             style="background-image:url(images/ico/it_ivolwe1.png);background-size: auto 35%; background-repeat: no-repeat">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="title-column col-md-6 col-sm-12 col-xs-12">
                    <h1>Contact us</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section contact-section-two">
        <div class="auto-container">
            <div class="sec-title-two">
                <h2>GET IN TOUCH WITH US</h2>
                <div class="text">"Be as part of this IT Revolution and grow with us."
                </div>
            </div>

            <!--Contacts Box-->
            <div class="contacts-box">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-4 col-sm-12 col-xs-12">

                        <!--Info Box-->
                        <div class="info-box">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="flaticon-house-outline"></span>
                                </div>
                                <h3>VISIT US:</h3>
                                <div class="text">WZ-490 Naraina Village New Delhi, 110028</div>
                            </div>
                        </div>
                        <!--Info Box-->
                        <div class="info-box">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="flaticon-technology"></span>
                                </div>
                                <h3>CALL US:</h3>
                                <ul>
                                    <li>(+91) - 88888 52364</li>

                                </ul>
                            </div>
                        </div>
                        <!--Info Box-->
                        <div class="info-box">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="flaticon-e-mail-envelope"></span>
                                </div>
                                <h3>MAIL US:</h3>
                                <ul>
                                    <li><a href="#">queryivolwe@gmail.com</a></li>

                                </ul>
                            </div>
                        </div>

                    </div>

                    <!--Column-->
                    <div class="column col-md-8 col-sm-12 col-xs-12">
                        <!--form-box-->
                        <div class="form-box default-form">
                            <div class="contact-form default-form">
                                <form method="post"
                                      action="">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="username" value="" placeholder="Enter your name"
                                                   required>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="email" value="" placeholder="Enter phone no"
                                                   required>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="subject" value="" placeholder="Subject">
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <input type="submit" name="submit" class="theme-btn btn-style-one"
                                                   value="Submit">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php include('footer.php'); ?>
</div>

<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span>
</div>
<?php include('footer_link.php'); ?>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $base_url = "http://esagar.in/";  //change this baseurl value as per your file path
    $mail_body = "New request from 
    <p>Name :" . $name . "</p> 
    <p>Email :" . $email . "</p> 
    <p>Subject :" . $subject . "</p> 
    <p>Message :" . $message . "</p> 
    ";
    require 'php/class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
    $mail->Host = 'ssl://smtp.gmail.com';      //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '465';                                //Sets the default SMTP server port
    $mail->SMTPAuth = true;                         //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'queryivolwe@gmail.com';                 //Sets SMTP username
    $mail->Password = 'Ivolwe@123';                   //Sets SMTP password
    $mail->SMTPSecure = '';                         //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = 'query@ivolwe.com';         //Sets the From email address for the message
    $mail->FromName = 'query@ivolwe.com';                  //Sets the From name of the message
    $mail->AddAddress('queryivolwe@gmail.com');     //Adds a "To" address
    $mail->WordWrap = 50;                           //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    $mail->Subject = 'New Client';          //Sets the Subject of the message
    $mail->Body = $mail_body;                           //An HTML or plain text message body
    if ($mail->Send())                               //Send an Email. Return true on success or false on error
    {
        echo '<script>swal("Contact Us", "Thank You.", "success");</script>';
    } else {
        echo '<script>swal("Contact Us", "Something Went Wrong. Please Try Again", "error");</script>';
    }

}


?>
