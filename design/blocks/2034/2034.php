<!DOCTYPE html>
<html>
    <head>
        <title>2034</title>
        <link href="images/favicon.ico" rel="shortcut icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2034.less', 'css/2034.css');
        ?>
        <link href="css/2034.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/2034.js" type="text/javascript"></script>
    </head>

    <body>
        <?php include '../2034/2034-content.php'; ?>

    </body>
</html>
