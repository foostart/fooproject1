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
    $less->compileFile('less/1230.less', 'css/1230.css');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <link href="<?php echo $url_path ?>/css/1230.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css"/> 
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>   
        <title>type-1230</title>
    </head>

    <body>
        <?php
            include '1230-content.php';
        ?>
        <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 10,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
   nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    breakpoints: {
        
      1200: {
          slidesPerView: 3,
          spaceBetween: 10,
      },
      997: {
          slidesPerView: 2,
          spaceBetween: 10,
      },
      600: {
          slidesPerView: 1,
          spaceBetween: 10,
            },
            

        } 

      });
      </script>
    </body>
</html>



