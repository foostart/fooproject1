<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1215">
    <div class="container">
        <div class="row">
         <div id="swiper" class="swiper-container swiper-container-horizontal swiper-container-fade">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-swiper-autoplay="2000">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-13.jpg" title="" alt="">
                        <div class="slider_caption text ">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="2000">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-14.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="2000">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-15.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="2000">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-16.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="2000">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-17.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="2000">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-18.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="2000">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-19.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="2000">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-20.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="2000">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-21.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-22.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-23.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a>
                        <img src="<?php echo $url_path ?>/images/banner_data-24.jpg" title="" alt="">
                        <div class="slider_caption text">
                            <h2>Living</h2>
                            <h3>Beautiful Home</h3>
                        </div>
                    </a>
                </div>
            </div>
            
            <div id="swiper_btn_prev" class="swiper_btn">
                <i class="fa fa-angle-left"></i>
            </div>
            <div id="swiper_btn_next" class="swiper_btn">
                <i class="fa fa-angle-right"></i>
            </div>
            <div id="swiper_btn_down" class="swiper_btn">
                <i class="fa fa-angle-down"></i>
            </div>
            
        </div>
    </div>
</div>
</div>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        speed: 2000,
        nextButton: '#swiper_btn_next',
        prevButton: '#swiper_btn_prev'

    });
    
</script>