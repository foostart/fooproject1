<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1222">

    <div class="container clearfix margin-s">
        <div class="heading-block fancy-title  center ">
            <h4>Bản <span>mẫu</span></h4>
        </div>
        <!-- 住宅 -->
        <div class="nobottommargin clearfix ">
            <div class="center clearfix ">
                <h5>Những công trình đã được thi công</h5>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <ul class="aboutcase">
                      
                        <li>Chung cư Địa Ốc 7 </li>
                        <li>Chung cư Tecco Towers</li>
                        <li>Chung cư Man Thiện</li>
                        <li>Chung cư Homyland 2</li>                 
                        <li>Công viên thỏ trắng</li>
                        <li>Căn hộ Gold River View</li>
                        <li>Căn hộ The Elysium</li>
                        
                    </ul>
                </div>
                
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <ul class="aboutcase">
                      
                         <li>Chung cư Địa Ốc 7 </li>
                        <li>Chung cư Tecco Towers</li>
                        <li>Chung cư Man Thiện</li>
                        <li>Chung cư Homyland 2</li>                 
                        <li>Công viên thỏ trắng</li>
                        <li>Căn hộ Gold River View</li>
                        <li>Căn hộ The Elysium</li>
                        
                    </ul>
                </div>
                
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <ul class="aboutcase">
                      
                         <li>Chung cư Địa Ốc 7 </li>
                        <li>Chung cư Tecco Towers</li>
                        <li>Chung cư Man Thiện</li>
                        <li>Chung cư Homyland 2</li>                 
                        <li>Công viên thỏ trắng</li>
                        <li>Căn hộ Gold River View</li>
                        <li>Căn hộ The Elysium</li>
                        
                    </ul>
                </div>
                
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <ul class="aboutcase">
                      
                        <li>Chung cư Địa Ốc 7 </li>
                        <li>Chung cư Tecco Towers</li>
                        <li>Chung cư Man Thiện</li>
                        <li>Chung cư Homyland 2</li>                 
                        <li>Công viên thỏ trắng</li>
                        <li>Căn hộ Gold River View</li>
                        <li>Căn hộ The Elysium</li>
                        
                    </ul>
                </div>
               
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
