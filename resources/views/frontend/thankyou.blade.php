<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>Thank You #SanmiguelAngel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="http://sanmiguelangel.com/favicon.ico">
        
</head>
        <body>
        <?php
        $sendTo  = "matrimonio@sanmiguelangel.com";
        $subject = "RSVP";

        $headers = "From: " . $obj->full_name;
        $headers .= "<" . $obj->email . ">\r\n";
        $headers .= "Reply-To: " . $obj->email  . "\r\n";

        $message = "Nombre: " . $obj->full_name . "\r\n";
        $message .= "Correo: " . $obj->email . "\r\n";
        $message .= "RSVP: " . $obj->rsvp . "\r\n";
        $message .= "Categoría: " . $obj->categories_id . "\r\n";
        $message .= "Mesa: " . $obj->desks_id . "\r\n";
        $message .= "Talla Flip-Flop: " . $obj->shoe_sizes_id . "\r\n";
        $message .= "Comida: " . $obj->food_preferences_id . "\r\n";

        if (mail($sendTo, $subject, $message, $headers)) {
        $alerta="Gracias por confirmar!";
        echo "<script language='javascript' type='text/javascript'>alert('".$alerta."');window.location='http://sanmiguelangel.com';</script>";
        } else {
        echo "Error en el envío, por favor intenta otra vez!";
        }
         ?>
    </body>
</html>
