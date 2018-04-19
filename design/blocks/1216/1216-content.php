<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1216">
    <div class="container main" >
        <div class="row">
            <div class="top-links col-md-9">
                <ul>
                    <li><a href="#">DAAN</a><span class="vien" ></span> </li>

                    <li><a href="#">CHENGDE</a> <span class="vien" ></span></li>
                    <li><a href="#">REVIVAL ONE</a> <span class="vien" ></span></li>
                    <li><a href="#">REVIVAL II</a> <span class="vien" ></span></li>
                    <li><a href="#">ZHONG XIAO</a> <span class="vien" ></li>
                    <li><a href="#">LIVELIHOOD</a> <span class="vien" ></li>
                    <li><a href="#">ZHONGSHAN</a> <span class="vien" ></li>
                    <li><a href="#">NANXI</a> <span class="vien" ></li>
                    <li><a href="#">NANJING</a> <span class="vien" ></li>
                    <li><a href="#">DUNBEI</a> <span class="vien" ></li>
                </ul>
            </div> 

            <div class="top-text col-md-3">
                <span class="text">No-pay consultation line 0809-080-158</span>
                <a href="#" class="a-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="a-icon"><i class="fa fa-envelope"></i></a>
                <a href="#" class="a-icon"><i class="fa fa-pinterest"></i></a>
            </div>   
        </div>
    </div>
</div>
