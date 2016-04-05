<?php

//require_once "formvalidator.php";

    if(isset($_POST['submit'])){
        $to = "hbw6955@rit.edu"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $message = $_POST['message'];
        $subject = "EMAIL FROM WEBSITE";


        $validator = new FormValidator();
        $validator->addValidation("Name","req","Please fill in Name");
        $validator->addValidation("Email","email","The input for Email should be a valid email value");
        $validator->addValidation("Email","req","Please fill in Email");

        if($validator->ValidateForm())
        {
            $messageToMe = $name . " " . " wrote the following:" . "\n\n" . $message;

            $headers = "From:" . $from;
            mail($to,$subject,$messageToMe,$headers);

            //header('Location: contactSuccess.php');
            echo '<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
              <title>Hayden Wagner</title>
            <link rel="stylesheet" type="text/css" href="css/wagner.css"/>
            <div class="blackout">
              <div class="blackout_center-message">
                <h1>Success!</h1>
                <p>Your message was sent to Hayden Wagner <span>(hbw6955@rit.edu)</span></p>
                <a class="button" href="contact.php">Stay on contact page</a>
                <a class="button" href="index.php">Go to homepage</a>
              </div>
            </div>';
        }
        else
        {
            echo "<B>Validation Errors:</B>";

            $error_hash = $validator->GetErrors();
            foreach($error_hash as $inpname => $inp_err)
            {
              echo "<p>$inpname : $inp_err</p>\n";
            }
        }

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
