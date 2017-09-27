
<html>
    <head>
        
        <title>Php Page</title>
        <link type="text/css" rel="stylesheet" href="form_validation.css"/>
    </head>
    <body>
        <?php
        $name = $_POST['name'];
        print '<p>Hello ' . "$name</p>";
        ?>
    </body>
</html>