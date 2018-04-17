<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="type-1228">
            <div>

                <div class="img_page" id="myBtn">
                   
                                <img id="main_img" src="images/bg-room.jpg"  alt="page" />
                              
                        
                </div>
                <div id="swiper-horizontal">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide active" data-img="images/bg-header-6.jpg">
                            <img class="hover" src="images/bg-header-6.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide" data-img="images/bg-room.jpg">
                            <img class="hover" src="images/bg-room.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide" data-img="images/bg-rooms.png">
                            <img class="hover" src="images/bg-rooms.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide" data-img="images/bg-rooms-2.png">
                            <img class="hover" src="images/bg-rooms-2.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide active" data-img="images/bg-header-6.jpg">
                            <img class="hover" src="images/bg-header-6.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide" data-img="images/bg-room.jpg">
                            <img class="hover" src="images/bg-room.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide" data-img="images/bg-rooms.png">
                            <img class="hover" src="images/bg-rooms.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide" data-img="images/bg-rooms-2.png">
                            <img class="hover" src="images/bg-rooms-2.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="swiper-button-next-3"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>


                </div>                  
                <div class="clearfix"></div>
            </div>            
            <script>

                var swiper3 = new Swiper('#swiper-horizontal', {
                    slidesPerView: 9,
                    spaceBetween: 10,
                    nextButton: '.swiper-button-next-3',
                    prevButton: '.swiper-button-prev-3',
                    loop: true,
                    breakpoints: {
                        1024: {
                            slidesPerView: 7,
                            spaceBetween: 10
                        },
                        768: {
                            slidesPerView: 6,
                            spaceBetween: 2
                        },
                         400: {
                            slidesPerView: 5,
                            spaceBetween: 2
                        },
                        200: {
                            slidesPerView: 4,
                            spaceBetween: 2
                        },
                    }
                });

            </script>             
        </div>
    </div>
</div>

<script src="<?php echo $url_path ?>/js/12.js"></script>
