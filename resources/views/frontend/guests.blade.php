<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>Guests #SanmiguelAngel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/x-icon" href="http://sanmiguelangel.com/favicon.ico">
    </head>
    <body>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Correo</td>
            <td>RSVP</td>
            <td>Categoría</td>
            <td>Mesa</td>
            <td>Talla Flip-Flop</td>
            <td>Comida</td>
        </tr>
        
            <?php
            foreach ($obj->guests as $guest) {
                echo 
                "<tr>".
                "<td>".$guest->full_name."</td>".
                "<td>".$guest->email."</td>".
                "<td>".$guest->rsvp."</td>".
                "<td>".$guest->categories_id."</td>".
                "<td>".$guest->desks_id."</td>".
                "<td>".$guest->shoesSize()."</td>".
                "<td>".$guest->foodPreference()."</td>".
                "</tr>";
            }
            ?>
    </table>
    </body>
</html>
