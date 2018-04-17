<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-271">
    <div class="container">
        <div class="row portfolio">
            <div class="col-md-8 description">
                <dl class="case_info_detail">
                    <div class="row">
                        <dt class="col-md-3">Nature of space</dt>
                        <dd class="col-md-9">Residential space</dd>
                    </div>
                    <hr>
                    <div class="row">
                        <dt class="col-md-3">Location</dt>
                        <dd class="col-md-9">New forest district</dd>
                    </div>
                    <hr>
                    <div class="row">
                        <dt class="col-md-3">Building area</dt>
                        <dd class="col-md-9">36 pings</dd>
                    </div>
                    <hr>
                    <div class="row">
                        <dt class="col-md-3">Indoor pattern</dt>
                        <dd class="col-md-9">Living room, dining room, study, master bedroom, guest room</dd>
                    </div>
                    <hr>
                    <div class="row">
                        <dt class="col-md-3">Main material</dt>
                        <dd class="col-md-9">Solid wood peel, US resistant board, painted iron, painted glass, sandblasted glass, matte quartz brick</dd>
                    </div>
                </dl>

            </div>
            <div class="col-md-4 meta">
                <button type="button" class="btn btn_meta">Shallow mashups</button>
                <button type="button" class="btn btn_meta">Wooden</button>
                <div class="social_icons">
                    <a class="icon_facebook" href="#">
                        <i class="fa fa-facebook-f"></i>
                        
                    </a>
                    <a class="icon_gplus" href="#"><i class="fa fa-google"></i></a>
                    <a class="icon_mail" href="#"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <div class="row post_navigation">
            <div class="col-md-6 col_post">
                <div class="post left_post">
                    <a class="arrow_left" href="#"><i class="fa fa-arrow-left"></i></a>
                    <div class="content_post">
                        <a href="#"><h5>Carefully crafted, magnificent</h5></a>
                        <span><a href="#">Taichung City</a> , <a href="#">Central District</a> , <a href="#">70 pyeong</a> , <a href="#">Daping</a> , <a href="#">light-colored</a></span>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6 col_post">
                <div class="post right_post">
                <a class="arrow_right" href="#"><i class="fa fa-arrow-right"></i></a>
                <div class="content_post">
                    <a href="#"><h5>Life is picturesque and contentment</h5></a>
                    <span><a href="#">Taipei City</a> , <a href="#">Songshan District</a> , <a href="#">38 pyeong</a> , <a href="#">light-colored</a> , <a href="#">marble</a></span>
                </div>
            </div>
            </div>
        </div>

        <!--<div class="row">
            <div class="divider divider-center"><i class="fa fa-circle"></i></div>
        </div>-->
    </div>
</div>