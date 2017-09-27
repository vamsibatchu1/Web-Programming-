
<html>
    <head>
        
        <title>Php Page</title>
        <link type="text/css" rel="stylesheet" href="form_validation.css"/>
    </head>
    <body>
        <?php
        $title = $_POST['title'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        print '<p>Hello ' . "$title $firstname $lastname" . ' of ' . "$address</p>";
        ?>
    </body>
</html>