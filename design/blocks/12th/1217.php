<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1214.less', 'css/1214.css');
    $less = new lessc;
    $less->compileFile('less/1217.less', 'css/type-1217.css');
    
    
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <link href="css/1214.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/1214.js" type="text/javascript"></script>
        <link href="<?php echo $url_path ?>/css/type-1217.css" rel="stylesheet" type="text/css" /> 
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet">   
        <title>1217</title>
    </head>

    <body>
        <?php
            include $dir_block. '/1214-content.php';
            include $dir_block. '/1217-content.php';
        ?>
       
     
    </body>

</html>




