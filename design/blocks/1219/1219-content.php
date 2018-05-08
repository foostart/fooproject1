<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1219">
  <div class="container">
    <div class="row">
         <div class="in">TỔ CHỨC CÔNG TY
              <span class="depa">CHI NHÁNH</span>
          </div>
         <div class="boder"></div>
       <a href="#" class=" button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty Daan</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty Chengde</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty DELTA</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty DELTA II</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty Zhongxiao</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty Minsheng</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty Trung Sơn</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty Tây Nam</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty Nam SA</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Công ty Dunbei</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Tổng cục quản lý</div>
       </a>
   </div>
 </div>
 <hr class="margin-tb-s">
 <div class="container">
   <div class="col-md-12">
      <div class="in">TỔ CHỨC CÔNG TY
        <span class="depa">PHÒNG BAN</span>
      </div>
       <div class="boder"></div>

     <div class="col-md-2 col-sm-2">
       <i class="fa fa-lightbulb-o icon"></i><br>
       <h3>BỘ PHẬN THIẾT KẾ</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-wrench icon"></i><br>
       <h3>BỘ PHẬN KỸ THUẬT</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-phone icon"></i><br>
       <h3>TƯ VẤN TẠI CHỖ</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-briefcase icon"></i><br>
       <h3>TƯ VẤN PHÁP LÝ</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-pencil-square-o icon"></i><br>
       <h3>PHÒNG KẾ TOÁN</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-usd icon"></i><br>
       <h3>GIÁ TRỊ GIÁ TRỊ</h3>
     </div>
   </div>
 </div>
</div>