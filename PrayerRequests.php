<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'Iglesiacdoca@gmail.com';

    $email_subject = "Peticion De Oracion";

    $email_body = "Peticion: $message.\n";
    
    $to = "iglesiacdoca@gmail.com";
    
