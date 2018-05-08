<?php
    include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1216">
    <div class="container main">
    <div class="row content">
        <div class="top-bar">
            <div class="top-links"> 
                <ul>
                    <li>
                        <a href="#">Daan</a>
                        <div class="b q">
                            <p class="c">Công Ty Daan</p>
                            <p><i class="fa fa-map-marker"></i>Tầng 12, Số 203, Khu 1, Đường Fuxing South, Quận Daan, Thành Phố Đài Bắc</p>
                            <p><i class="fa fa-phone"></i>02-87720899</p>
                        </div>


                    </li>
                    <li>
                        <a href="#">Thừa Đức</a>
                        <div class="b q">
                            <p class="c">Công ty Chengde</p>
                            <p><i class="fa fa-map-marker"></i>6f-1, Tòa nhà B, Tầng 17, Đường Chengde, Quận Đại Đồng, Thành Phố Đài Bắc</p>
                            <p><i class="fa fa-phone"></i>02-022561197</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Revival one</a>
                        <div class="b q">
                            <p class="c">Revival one</p>
                            <p><i class="fa fa-map-marker"></i>10f, 35 Fuxing North Road, Songshan Dicstrict, Thành Phố Đài Bắc</p>
                            <p><i class="fa fa-phone"></i>02-27783398</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Rivival ii</a>
                        <div class="b q">
                            <p class="c">Rivival ii</p>
                            <p><i class="fa fa-map-marker"></i>2F-7, Fuxing North Road, Thành Phố Đài Bắc</p>
                            <p><i class="fa fa-phone"></i>02-87721277</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Zhong xiao</a>
                        <div class="b q">
                            <p class="c">Công Ty Zhong xiao</p>
                            <p><i class="fa fa-map-marker"></i>4F, 1-5, Mục 5, Zhongxiao East Road , Xinyi District, Taipei city</p>
                            <p><i class="fa fa-phone"></i>02-321549654</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Sinh Kế</a>
                        <div class="b q">
                            <p class="c">Công Ty MinSheng</p>
                            <p><i class="fa fa-map-marker"></i>Số 143, Khu 2, MinSheng East Road , Xinyi District, Taipei city, China</p>
                            <p><i class="fa fa-phone"></i>02-3548725812</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Trung Sơn</a>
                        <div class="b q">
                            <p class="c">Công Ty Trung Sơn</p>
                            <p><i class="fa fa-map-marker"></i>Số 31, Khu 3, Đường Bắc Trung Sơn, Quận Trung Sơn, Đài Bắc</p>
                            <p><i class="fa fa-phone"></i>02-32158487987</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Nanxi</a>
                        <div class="b q">
                            <p class="c">Công Ty Tây Nam</p>
                            <p><i class="fa fa-map-marker"></i>4F, 76 Nanjing West Road, Datong District, Thành Phố Đài Bắc</p>
                            <p><i class="fa fa-phone"></i>02-5632156546</p>
                        </div>
                    </li>
                    <li class="Xuong-Dong">
                        <a href="#">Nam Kinh</a>
                        <div class="b q">
                            <p class="c">Công ty Nam Kinh</p>
                            <p><i class="fa fa-map-marker"></i>4F, 76 Nanjing West Road, Datong District, Thành Phố Đài Bắc</p>
                            <p><i class="fa fa-phone"></i>02-5632156546</p>
                        </div>
                    </li>
                </ul>
                <div class="top-text">
                    <span class="text">No-pay consultation line</span><span> 0809-080-158</span>
                    <div class='icon-social'>
                        <i class="fa fa-facebook"></i>  
                        <i class="fa fa-envelope email"></i> 
                        <i class="fa fa-pinterest prin"></i>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

