<?php

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


// error checking

$error = [];

if (empty($_POST['name'])){
    $error['name'] = 'Insert Your Name';
}
if (empty($_POST['email'])){
    $error['email'] = 'Insert Your Email';
}
if (empty($_POST['subject'])){
    $error['subject'] = 'Insert Your Subject';
}
if (empty($_POST['message'])){
    $error['message'] = 'Insert Your Message';
}

// mail

$to = 'adittyapujon2017@gmail.com';
$from = 'From '.$email;
$subject = 'Subject '.$subject;
$body = 'Name : '.$name.'/n Subject : '.$subject.'/n Email : '.$email.'/n Message : '.$message;

mail($to, $from, $body);


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="contact-section" class="contact">
        <div class="container">
            <div class="contact-title">
                <h2>Contact Us</h2>
            </div>
            <div class="contact-form">
                <form action="" method="POST" autocomplete="off">
                    <div class="single-form">
                        <input type="text" name="name" placeholder="Name" autocomplete="off" value="<?php if (isset($name)) echo $name ?>">
                        <span>
                            <?php
                            
                                if (isset($error['name'])){
                                    echo $error['name'];
                                }
                            
                            ?>
                        </span>
                    </div>
                    <div class="single-form">
                        <input type="email" name="email" placeholder="Email" autocomplete="off" value="<?php if (isset($email)) echo $email ?>">
                        <span>
                            <?php
                            
                                if (isset($error['email'])){
                                    echo $error['email'];
                                }
                            
                            ?>
                        </span>
                    </div>
                    <div class="single-form">
                        <input type="text" name="subject" placeholder="Subject" autocomplete="off" value="<?php if (isset($subject)) echo $subject ?>">   
                        <span>
                            <?php
                            
                                if (isset($error['subject'])){
                                    echo $error['subject'];
                                }
                            
                            ?>
                        </span>
                    </div>
                    <div class="single-form">
                        <textarea name="message" placeholder="Message"  value="<?php if (isset($message)) echo $message ?>"></textarea>
                        <span>
                            <?php
                            
                                if (isset($error['message'])){
                                    echo $error['message'];
                                }
                            
                            ?>
                        </span>
                    </div>
                    <div class="single-form">
                        <input type="submit" name="btn" value="SEND">
                        <input type="reset" name="btn-one" value="RESET">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>