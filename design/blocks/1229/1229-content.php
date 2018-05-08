<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1229">
    <div class="container">
        <div class="row portfolio">
            <div class="col-md-8 description">
                <dl class="case_info_detail">
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Không gian</dt>
                        <dd class="col2 col-md-9 col-sm-9">Khu dân cư</dd>
                    </div>
                    <hr>
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Vị trí</dt>
                        <dd class="col2 col-md-9 col-sm-9">Thủ Đức</dd>
                    </div>
                    <hr>
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Diện tích</dt>
                        <dd class="col2 col-md-9 col-sm-9">1000m<sup>2</sup></dd>
                    </div>
                    <hr>
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Mô hình trong nhà</dt>
                        <dd class="col2 col-md-9 col-sm-9">Phòng khách, phòng ăn, phòng học, phòng ngủ, phòng vệ sinh</dd>
                    </div>
                    <hr>
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Vật liệu chính</dt>
                        <dd class="col2 col-md-9 col-sm-9">Gỗ rắn, sơn thủy tinh, thạch anh, sơn xịn</dd>
                    </div>
                </dl>

            </div>
            <div class="col-md-4 meta">
                <button type="button" class="btn btn_meta">Đá cẩm thạch</button>
                <button type="button" class="btn btn_meta">Gỗ</button>
                <div class="social_icons">
                    <a class="icon icon_facebook" href="#">
                            <i class="fa fa-facebook-f"></i>
                        <i class="fa fa-facebook-f"></i>
                        
                    </a>
                    <a class="icon icon_gplus" href="#"><i class="fa fa-google"></i><i class="fa fa-google"></i></a>
                    <a class="icon icon_mail" href="#"><i class="fa fa-envelope"></i><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <div class="row post_navigation">
            <div class="col-md-6 col_post">
                <div class="post left_post">
                    <a class="arrow_left" href="#"><i class="fa fa-arrow-left"></i></a>
                    <div class="content_post">
                        <a class="post_title" href="#"><h5>Chế tác cẩn thận, tráng lệ</h5></a>
                        <span><a href="#">HCM City</a> , <a href="#">Quân 1</a> , <a href="#">700m<sup>2</sup></a> , <a href="#">cổ kính</a> , <a href="#">màu lạnh</a></span>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6 col_post">
                <div class="post right_post">
                <a class="arrow_right" href="#"><i class="fa fa-arrow-right"></i></a>
                <div class="content_post">
                    <a class="post_title" href="#"><h5>Cuộc sống thật đẹp và thoải mái</h5></a>
                    <span><a href="#">HCM City</a> , <a href="#">Quận 7</a> , <a href="#">2000m<sup>2</sup></a> , <a href="#">màu sáng</a> , <a href="#">đá cẩm thạch</a></span>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="divider_center">
                <div class="box_fa">
                    <i class="fa fa-circle"></i>
                </div>
            </div>
        </div>
    </div>
</div>