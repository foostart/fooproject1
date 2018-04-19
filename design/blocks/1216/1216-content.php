<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1216">
    <div class="row">
        <div class="top-bar">
            <div class="top-links"> 
                <ul>
                    <li>
                        <a href="#">Daan</a>
                        <div class="b">
                            <p class="c">Dan Company</p>
                            <p><i class="fa fa-map-marker"></i> Street 12AA,City balabala</p>
                            <p><i class="fa fa-phone"></i> +09546548985</p>
                        </div>


                    </li>
                    <li>
                        <a href="#">ChengDe</a>
                        <div class="b">
                            <p class="c">Dan Company</p>
                            <p><i class="fa fa-map-marker"></i> Street 12AA,City balabala</p>
                            <p><i class="fa fa-phone"></i> 09546548985</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Revival one</a>
                        <div class="b">
                            <p class="c">Dan Company</p>
                            <p><i class="fa fa-map-marker"></i> Street 12AA,City balabala</p>
                            <p><i class="fa fa-phone"></i> 09546548985</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Rivival ii</a>
                        <div class="b">
                            <p class="c">Dan Company</p>
                            <p><i class="fa fa-map-marker"></i> Street 12AA,City balabala</p>
                            <p><i class="fa fa-phone"></i> 09546548985</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Zhong xiao</a>
                        <div class="b">
                            <p class="c">Dan Company</p>
                            <p><i class="fa fa-map-marker"></i> Street 12AA,City balabala</p>
                            <p><i class="fa fa-phone"></i> 09546548985</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Livelihood</a>
                        <div class="b">
                            <p class="c">Dan Company</p>
                            <p><i class="fa fa-map-marker"></i> Street 12AA,City balabala</p>
                            <p><i class="fa fa-phone"></i> 09546548985</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Zhongshan</a>
                        <div class="b">
                            <p class="c">Dan Company</p>
                            <p><i class="fa fa-map-marker"></i> Street 12AA,City balabala</p>
                            <p><i class="fa fa-phone"></i> 09546548985</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Nanxi</a>
                        <div class="b">
                            <p class="c">Dan Company</p>
                            <p><i class="fa fa-map-marker"></i> Street 12AA,City balabala</p>
                            <p><i class="fa fa-phone"></i> 09546548985</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">NanJing</a>
                        <div class="b">
                            <p class="c">Dan Company</p>
                            <p><i class="fa fa-map-marker"></i> Street 12AA,City balabala</p>
                            <p><i class="fa fa-phone"></i> 09546548985</p>
                        </div>
                    </li>
                </ul>
                <div class="top-text">
                    <span class="text">No-pay consultation line</span><span> 0809-080-158</span>
                    <i class="fa fa-facebook"></i>  
                    <i class="fa fa-envelope"></i> 
                    <i class="fa fa-pinterest"></i>  
                </div>
            </div>
        </div>
    </div>
</div>

