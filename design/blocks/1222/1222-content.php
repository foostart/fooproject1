<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1222">

    <div class="container clearfix margin-s">
        <div class="heading-block fancy-title  center ">
            <h4>Case <span>performance</span></h4>
        </div>
        <!-- 住宅 -->
        <div class="nobottommargin clearfix ">
            <div class="center clearfix ">
                <h5>Residential space example</h5>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <ul class="aboutcase">
                      
                        <li>Chiyoda Lee Post</li>
                        <li>Tianmu Xu Mansion</li>
                        <li>Itabashi Mai Residence</li>
                        <li>Tainan Gold Mansion</li>                 
                        <li>Tangquan Kong Mansion</li>
                        <li>Waldorf Astoria House</li>
                        <li>Qingshan Town Residence</li>
                        
                    </ul>
                </div>
                
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <ul class="aboutcase">
                      
                        <li>Chiyoda Lee Post</li>
                        <li>Tianmu Xu Mansion</li>
                        <li>Itabashi Mai Residence</li>
                        <li>Tainan Gold Mansion</li>                 
                        <li>Tangquan Kong Mansion</li>
                        <li>Waldorf Astoria House</li>
                        <li>Qingshan Town Residence</li>
                        
                    </ul>
                </div>
                
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <ul class="aboutcase">
                      
                        <li>Chiyoda Lee Post</li>
                        <li>Tianmu Xu Mansion</li>
                        <li>Itabashi Mai Residence</li>
                        <li>Tainan Gold Mansion</li>                 
                        <li>Tangquan Kong Mansion</li>
                        <li>Waldorf Astoria House</li>
                        <li>Qingshan Town Residence</li>
                        
                    </ul>
                </div>
                
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <ul class="aboutcase">
                      
                        <li>Chiyoda Lee Post</li>
                        <li>Tianmu Xu Mansion</li>
                        <li>Itabashi Mai Residence</li>
                        <li>Tainan Gold Mansion</li>                 
                        <li>Tangquan Kong Mansion</li>
                        <li>Waldorf Astoria House</li>
                        <li>Qingshan Town Residence</li>
                        
                    </ul>
                </div>
               
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
