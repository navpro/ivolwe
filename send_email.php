<?php


$message = '';


if (isset($_POST["submit"])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $randomNumber = "ES" . rand(50000, 1000);

    $user_activation_code = md5(rand());
    $base_url = "http://esagar.in/";  //change this baseurl value as per your file path
    $mail_body = "
            <p>Hi " . $_POST['name'] . ",</p>
            
            <p>Thanks for Registration. Your user id is <b>" . $email . "</b> & password is <b>" . $randomNumber . "</b>, This ID & Password will work only after your email verification.</p>
            <p>Please Open this link to verified your email address - " . $base_url . "php/email_verification.php?activation_code=" . $user_activation_code . "
            <p>Best Regards,<br />Esagar.in</p>
            ";
    require 'php/class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
    $mail->Host = 'esagar.in';      //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '587';                                //Sets the default SMTP server port
    $mail->SMTPAuth = true;                         //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'info@esagar.in';                 //Sets SMTP username
    $mail->Password = 'Esagar#2020';                   //Sets SMTP password
    $mail->SMTPSecure = '';                         //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = 'info@esagar.in';         //Sets the From email address for the message
    $mail->FromName = 'esagar.in';                  //Sets the From name of the message
    $mail->AddAddress($_POST['email'], $_POST['name']);     //Adds a "To" address
    $mail->WordWrap = 50;                           //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    $mail->Subject = 'Email Verification';          //Sets the Subject of the message
    $mail->Body = $mail_body;                           //An HTML or plain text message body
    if ($mail->Send())                               //Send an Email. Return true on success or false on error
    {
        $message = '<label class="text-success">Register Done, Please Verify your Mail ID for Verification.<br>Click Here to <a href="login-my-dashboard-with-esagar.php">Login</a> </label>';
    } else {
        $message = '<label class="text-success">Register Done, Please Verify your Mail ID for Password.<br>Click Here to <a href="login-my-dashboard-with-esagar.php">Login</a> </label>';
    }


}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Metas -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders"/>
    <!-- Links -->
    <link rel="icon" type="image/png" href="images/mainlogo.jpeg"/>
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="css/plugin.css" rel="stylesheet"/>
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet"/>
    <!--color switcher css-->
    <link rel="stylesheet" href="css/switcher/skin-aqua.css" media="screen" id="style-colors"/>
    <!-- Document Title -->
    <title>Registration|Esagar - sell , buy and find everything</title>
    <meta name="description" content="Esagar ads available all over India for goods like sale from cars,
furniture, electronics to jobs and services listings.  Buy or sell something today! Contact us for more information
tel se leke tel ki dukan tak sub hamare pass.">
    <meta name="keywords" content="buy car, buy things, sell things, online business ,shop listing, online store
,shop online, take your shop online, buy&sell, listing, Bhopal ,all india, esagar,sagar ">
</head>

<body>
<?php include('header.php'); ?>
<!--User Login section starts-->
<div class="user-login-section section-padding bg-fixed" style="background-image: url(images/header/hero-5.jpg);">
    <div class="container">
        <br><br><br><br>
        <div class="row">
            <div class="col-md-10 offset-md-1  text-center">
                <div class="login-wrapper">
                    <ul class="ui-list nav nav-tabs justify-content-center mar-bot-30" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" href="login-my-dashboard-with-esagar.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  active" data-toggle="tab" href="#register" role="tab"
                               aria-selected="false">Register</a>

                        </li>
                    </ul>
                    <div class="ui-dash tab-content">
                        <div class="tab-pane fade show active" id="register" role="tabpanel">
                            <?php echo $message; ?>
                            <form id="register-form" action="" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" id="user_name" tabindex="1"
                                           title="first letter of name is capital and no spacing allowed."
                                           class="form-control" placeholder="Name" value="">
                                    <span style="color: red" id="msg_name"></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control"
                                           placeholder="Email Address" value="">
                                    <span style="color: red" id="msg_email"></span>

                                </div>

                                <div class="res-box text-left">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember">I've read and accept terms &amp; conditions</label>
                                </div>
                                <span style="color: red" id="msg_check"></span>
                                <div class="res-box text-center mar-top-30">
                                    <button type="submit" name="submit" id="submit" class="btn v3"><i
                                                class="ion-android-checkmark-circle"></i>Sign Up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--User login section ends-->
<!--Login section ends-->
<!-- Scroll to top starts-->
<span class="scrolltotop"><i class="ion-arrow-up-c"></i></span>
<!-- Scroll to top ends-->
</div>

<?php include('footer.php'); ?>
<script src="js/plugin.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;callback=initAutocomplete"></script>
<script src="js/main.js"></script>
</body>
<script>
    $(document).ready(function () {
        $('#register-form').on('submit', function () {
            var name = $('#user_name').val();
            var email = $('#email').val();
            if (name == "") {
                $('#msg_name').html('<span>Please Enter a Name</span>');
                return false;
            } else if (email == '') {
                $('#msg_email').html('<span>Please Enter a Email</span>');
                return false;
            } else if (!$('input:checkbox', this).length == $('input:checked', this).length) {
                $('#msg_check').html('<span>Please tick checkbox</span>');
                return false;
            }
        });
    });
</script>
</html>
