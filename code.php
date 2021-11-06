<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        if(filter_var($_POST['name'], FILTER_VALIDATE_EMAIL) ){

            //submit the form
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];
        
            $to = "duranmengot801@gmail.com";
            $body = "";
        
            $bosy.= "From: ".$userName. "\r\n";
            $bosy.= "Email: ".$userEmail. "\r\n";
            $bosy.= "Message: ".$message. "\r\n";
        
            //mail($to,$messageSubject,$body);

            $_message_sent = true;
        }
        else{
            $invalid_class_name = "form_valid";
        }

    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="code.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>

    <?php
    if($message_sent):
    ?>

        <h3>Thank's We'll be in touch</h3>
    
    <?php
    else{
        $valid_class_name = "form_valid";
    }
    ?>

    <div class="container">
        <form action="code.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control <?= $invalid_class_name ?? "" ?>" id="name" name="name" placeholder="name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
    <script>
            $(function() {
        
        $(".form-control").on('focus', function(){

            $(this).parents(".form-group").addClass('focused');

        });

        $(".form-control").on('blur', function(){

            $(this).parents(".form-group").removeClass('focused');

        });

      });
    </script>

    <?php 
        endif;
    ?>
</body>

</html>