<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
?>
    <div class="type-1227">
        <div class="header">
            <img class="image-s" src="<?php echo $url_path ?>/images/bg-header-6.jpg">
            <div class="text-center-image">
                <div class="text-1">
                        <span>DỊCH VỤ</span>
                </div>
                <hr class="hr-size-color">
                <div class="text-2">Dịch vụ khách hàng</div>
            </div>
        </div>
		
		<div class="container">
            <div class="pading-header">
                <div class="text-3">
                    <span>CÁC DỊCH VỤ</span>
                    <span class="color"> CỐT LÕI</span>
                </div>
                <hr class="hr-size-color2">
                <div class="text-5">
                    <span>Vui lòng liên hệ và lắng nghe các đề xuất để có thể loại bỏ các vấn đề một cách kịp thời. Trở thành cầu nối giao tiếp giữa khách hàng và khách hàng, đạt được sự hài lòng 100%</span>
                </div>

            </div>
            <div class="clear"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="center-text">
                        <div class="pading-top">
                              <i class="border fa fa-bed fa-3x" aria-hidden="true" ></i>
                        </div>
                        <div class="text-6">
                            <span>Dịch Vụ Tư Vấn Khách Sạn</span>

                        </div>
                        <div class="hr-size-color3"></div>
                        
                        <div class="text-7">
                            <span>Điện thoại: 02-2501-3278 ext.209 </span>
                        </div>
                        <div class="text-7">
                            <span>FAX: 02-2501-3387 </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="center-text">
                        <div class="pading-top">
                           
                            <i class=" border fa fa-building fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="text-6">
                            <span>Dịch Vụ Tư Vấn Căn Hộ Chung Cư</span>

                        </div>
                        <div class="hr-size-color3"></div>
                        <div class="text-7">
                            <span>Điện thoại: 02-2501-3278 ext.207</span>
                        </div>
                        <div class="text-7">
                            <span>FAX: 02-2501-3387</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="center-text">
                        <div class="pading-top">
                         
                            
                            <i class=" border fa fa-home fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="text-6">
                            <span>Dịch Vụ Tư Vấn Nhà Ở </span>

                        </div>
                        <div class="hr-size-color3"></div>
                        <div class="text-7">
                            <span>Điện thoại: 02-2501-3278 ext.202</span>
                        </div>
                        <div class="text-7">
                            <span>FAX: 02-2501-3387</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-2">

                <hr>
                <div class="text-8">
                    <span> Liên Hệ Qua Đường Dây Nóng : <span>0164447514544 </span>  </span>
                </div>
                <hr>

            </div>
        </div>
    </div>