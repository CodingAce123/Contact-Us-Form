<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      //Enter the E-mail address Where you want to Receive all Messages
      $receiver = "aaryan.bizoara16@gmail.com";
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your Message has been Sent";
      }else{
         echo "Sorry, Failed to Send your Message!";
      }
    }else{
      echo "Enter a Valid E-mail Address!";
    }
  }else{
    echo "Email and Message Fields are required!";
  }
?>