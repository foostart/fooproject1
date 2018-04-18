<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1218">
        <div class="bg-about">
            <h1>GIỚI THIỆU</h1>
            <div class="boder"></div>
            <p class="title-content">Giới Thiệu Công Ty</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="tit">
                        <span class="tittle">TẦM NHÌN CỦA</span><span class="tittle tittle-sub"> CÔNG TY</span>
                    </div>
                    <div class="boder boder-text"></div>
                    <p class="content">Sau khi liên tục liên lạc nội bộ và điều phối, mỗi mục tiêu cá nhân được tích hợp và mục tiêu chung của công ty là nâng cao chất lượng cuộc sống. Sự đổi mới liên tục của thiết kế và kết cấu kỹ thuật là tầm nhìn của công ty.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="tit">
                        <span class="tittle">TẦM NHÌN CỦA</span><span class="tittle tittle-sub"> CÔNG TY</span>
                    </div>
                    <div class="boder boder-text"></div>
                    <p class="content">Sau khi liên tục liên lạc nội bộ và điều phối, mỗi mục tiêu cá nhân được tích hợp và mục tiêu chung của công ty là nâng cao chất lượng cuộc sống. Sự đổi mới liên tục của thiết kế và kết cấu kỹ thuật là tầm nhìn của công ty.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="tit">
                        <span class="tittle">TẦM NHÌN CỦA</span><span class="tittle tittle-sub"> CÔNG TY</span>
                    </div>
                    <div class="boder boder-text"></div>
                    <p class="content">Sau khi liên tục liên lạc nội bộ và điều phối, mỗi mục tiêu cá nhân được tích hợp và mục tiêu chung của công ty là nâng cao chất lượng cuộc sống. Sự đổi mới liên tục của thiết kế và kết cấu kỹ thuật là tầm nhìn của công ty.</p>
                </div>
            </div>
        </div>
</div>