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
                        <h4>Featured introduction</h4>
                    </div>
                </div>
                <div class=" clearfix"></div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                                <div class="blog-img">
                                    <a href="#"><img src="<?php echo $url_path ?>/images/1.jpg" alt=""/></a>
                                </div>
                                <div class="portfolio-overlay">
                                <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                </div>
                            </div>
                            <h2 class="blog-title"><a href="#">Yanicke Taichung Flagship Store</a></h2>
                             <p class="blog-description"><a href="#">Taipei City,Daan District,46 pings</a>
                                <a class="right" href="#">Gray system</a></p>

                        </div>
                        
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/2.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                            <h2 class="blog-title"><a href="#">The Yawen children listen to the</a></h2>
                            <p class="blog-description"><a href="#">Kaohsiung City,Former Gold District</a>
                                <a class="right" href="#">Daping number</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/3.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                            <h2 class="blog-title"><a href="#">Wonderful, flawless</a></h2>
                            <p class="blog-description"><a href="#">Kaohsiung City,Former Gold District</a>
                                <a class="right" href="#">Daping number</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/4.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                            <h2 class="blog-title"><a href="#">Home, Aesthetics, Art</a></h2>
                            <p class="blog-description"><a href="#">Kaohsiung City,Former Gold District</a>
                                <a class="right" href="#">Daping number</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/5.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                            <h2 class="blog-title"><a href="#">Home, Aesthetics, Art</a></h2>
                            <p class="blog-description"><a href="#">Kaohsiung City,Former Gold District</a>
                            <a class="right" href="#">Daping number</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/6.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                            <h2 class="blog-title"><a href="#">Home, Aesthetics, Art</a></h2>
                            <p class="blog-description"><a href="#">Kaohsiung City,Former Gold District</a>
                            <a class="right" href="#">Daping number</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/7.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                            <h2 class="blog-title"><a href="#">Home, Aesthetics, Art</a></h2>
                            <p class="blog-description"><a href="#">Kaohsiung City,Former Gold District</a>
                            <a class="right" href="#">Daping number</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/8.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                            <h2 class="blog-title"><a href="#">Home, Aesthetics, Art</a></h2>
                            <p class="blog-description"><a href="#">Kaohsiung City,Former Gold District</a>
                            <a class="right" href="#">Daping number</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/9.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                            <h2 class="blog-title"><a href="#">Home, Aesthetics, Art</a></h2>
                            <p class="blog-description"><a href="#">Kaohsiung City,Former Gold District</a>
                            <a class="right" href="#">Daping number</a></p>
                        </div>
                    </div>
                    <div class="swiper-slide col-md-3 col-sm-3 col-xs-12">
                        <div class="blog-content">
                            <div class="blog">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo $url_path ?>/images/10.jpg" alt=""/></a>
                            </div>
                            <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                            <h2 class="blog-title"><a href="#">Home, Aesthetics, Art</a></h2>
                            <p class="blog-description"><a href="#">Kaohsiung City,Former Gold District</a>
                            <a class="right" href="#">Daping number</a></p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
           
        </div>
    </div>
</div>
</div>
</div>