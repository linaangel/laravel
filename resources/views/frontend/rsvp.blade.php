<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>RSVP #SanmiguelAngel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="http://sanmiguelangel.com/favicon.ico">
        <style>
            body{
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    margin-top: 20px;
}

.navbar-inverse {
    background-color: #f86200;
    border-color: #080808;
}

.navbar-inverse .navbar-brand {
    color: #fff;
}

.navbar-inverse .navbar-nav>li>a {
    color: #000;
}

.wrapper {
    max-width: 900px;
    margin: auto;
    height: auto;
}

#save {
    float: left;
    padding-top: 40px;
}

#rsvp {
    float: right;
    padding-top: 40px;
}

h1 {
    color: #f47321;
    padding: 0 0 5px 0;
    vertical-align: top;
}

label,
input,
select {
    padding: 5px;
}

input,
select,
textarea {
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    margin: 0;
    color: #000;
    border: 1px solid #ccc;
    border-radius: 4px;
}

#boton {
    font-family: 'Open Sans', sans-serif;
    background-color: #f47321;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 5px;
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}

footer{
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    background-color: black;
    text-align: center;
    padding: 5px;
    color: white;
    height: auto;
}
/* ==========================================================================
   Helper classes
   ========================================================================== */

.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}

.clearfix {
    *zoom: 1;
}


/* ==========================================================================
   Media Queries
   ========================================================================== */


/* Mobile */
@media only screen and (min-width: 480px) {}
/* Intermediate */
@media only screen and (min-width: 768px) {}
/* Wide */
@media only screen and (min-width: 1140px) {}



/* ==========================================================================
   Print styles
   ========================================================================== */

@media print {
    * {
        background: transparent !important;
        color: #000 !important;
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a,
    a:visited {
        text-decoration: underline;
    }

    a[href]:after {
        content: " (" attr(href) ")";
    }

    abbr[title]:after {
        content: " (" attr(title) ")";
    }

    .ir a:after,
    a[href^="javascript:"]:after,
    a[href^="#"]:after {
        content: "";
    }

    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group;
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    @page {
        margin: 0.5cm;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }
}
        </style>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://www.sanmiguelangel.com/">#SanmiguelAngel</a>
        </div>
      </div>
    </nav>
    <div class="wrapper clearfix">
        <div id="save">
            <img class="center" src="http://www.sanmiguelangel.com/img/SaveTheDate.jpg" alt="Save The Date">
        </div>
        <div id="rsvp">
            <h1>RSVP</h1>
            <p>Por favor confirma tu asistencia:</p>
            <div id="contacto">
            {!! Form::open(array('url' => 'rsvp')) !!}
                <table width="406">
                    <tr>
                        <td>
                            <label>Nombre:</label>
                        </td>
                        <td>
                            {!! Form::text('full_name') !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Correo:</label>
                        </td>
                        <td>
                            {!! Form::text('email') !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>RSVP:</label>
                        </td>
                        <td>
                            {!! Form::select('rsvp', array(1 => 'Si', 0 => 'No'), null, ['placeholder' => 'Confirma']) !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Cu&aacute;nto calzas?</label>
                        </td>
                        <td>
                            {!! Form::select('shoe_sizes_id', $obj->shoe_sizes, null, ['placeholder' => 'Mucho']) !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Alguna Preferencia Alimenticia?</label>
                        </td>
                        <td>
                            {!! Form::select('food_preferences_id', $obj->food_preferences, null, ['placeholder' => 'Ninguna']) !!}
                        </td>
                    </tr>
                    {!! Form::hidden('categories_id', $obj->categories_id) !!}
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            {!! Form::submit('Enviar'); !!}
                        </td>
                    </tr>
                </table>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
    </body>
</html>
