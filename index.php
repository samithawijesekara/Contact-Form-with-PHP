<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Form with PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--===============================================================================================-->
</head>

<body>

<div class="row">
    <div class="col-4 side"></div>
    <div class="col-4">
        <div class="contactForm">
            <h1 class="heading">Contact Form</h1>
            <form action="contact.php" method="POST" autocomplete="off">
                <input type="text" placeholder="Full Name" name="name" required="">
                <input type="email" placeholder="Your Email" name="mail" required="">
                <input type="text" placeholder="Subject" name="subject" required="">
                <textarea placeholder="Type message here" name="message" required=""></textarea>
                <button style="border-radius: 30px;border: none; outline: 0;" type="submit" name="submitbtn">Send Message</button>
            </form>
        </div>
    </div>
    <div class="col-4 side"></div>
</div>

<div class="row">
    <div class="col-4 side">
        <p class="footer animated fadeIn"><i>Developed by <a href="https://github.com/samithawijesekara" target="_blank">Samitha Wijesekara</a></i></p>
    </div>
</div>


    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--===============================================================================================-->
</body>

</html>