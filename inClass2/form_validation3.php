
<html>
    <head>
        
        <title>Php Form</title>
        <link type="text/css" rel="stylesheet" href="form_validation.css"/>
    </head>
    <body>
        <?php
        $title = $_POST['title'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $birthyear = $_POST['year'];
        date_default_timezone_set("America/New_York");
        $current_year = date("Y");
        $age = $current_year - $birthyear;
        print '<p>Hello ' . "$title $firstname $lastname" . ' of ' . "$address.</p>";
        print '</p>You will be ' . "$age" . ' this year.</p>';
        ?>
    </body>
</html>