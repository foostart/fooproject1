<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1230">
    <div class="container">
        <div class="row">
            <div class="content">
                <div class="col-md-12">
                    <div class="blog-top">
                        <h4>Giới thiệu đặc trưng</h4>
                    </div>
                </div>
                <div class=" clearfix"></div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/1.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Sang trọng, sang trọng và sắc nét</a></h2>
                             <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                        
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/2.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Xưởng đóng tàu Yanicke Taichung</a></h2>
                            <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/3.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Sang trọng, sang trọng và sắc nét</a></h2>
                            <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/4.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Công nghệ Liwei</a></h2>
                            <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/5.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Mẫu tuyệt vời, phong cách cuộc sống</a></h2>
                            <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/6.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Văn phòng Thành phố Mới Đài Bắc</a></h2>
                            <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/7.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Công nghệ Liwei</a></h2>
                            <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/8.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Mẫu tuyệt vời, phong cách cuộc sống</a></h2>
                            <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/9.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Công nghệ Liwei</a></h2>
                            <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/10.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <h2 class="blog-title"><a href="#">Văn phòng Thành phố Mới Đài Bắc</a></h2>
                            <p class="blog-description"><a href="#">Thành phố Đài Bắc</a></p>
                        </div>
                    </div>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
           
        </div>
    </div>
</div>
</div>