<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1219">
  <div class="container">
    <div class="row">
     <div class="heading-block">
       <h4>
         <font>COMPANY ORGANIZATION</font>
         <span class="depa">
           <font>BRANCH</font>
         </span>
         <div class="boder"></div>
       </h4>
       <a href="#" class=" button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font >Daan Company</font>
         </span>
       </a>
       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>Chengde company</font>
         </span>
       </a>
       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>Revival One</font>
         </span>
       </a>
       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>Revival II</font>
         </span>
       </a>

       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>Zhongxiao Company</font>
         </span>
       </a>

       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>Minsheng Company</font>
         </span>
       </a>

       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>Zhongshan Company</font>
         </span>
       </a>

       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>South West Company</font>
         </span>
       </a>

       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>Nanjing company</font>
         </span>
       </a>

       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>Dunbei Company</font>
         </span>
       </a>

       <a href="#" class="button hvr-backward">
         <i class="icon-line-arrow-right"></i>
         <span>
           <font>General Management Office</font>
         </span>
       </a>
     </div>
   </div>
 </div>
 <hr class="margin-tb-s">
 <div class="container">
   <div class="col-md-12">
     <h4>
       <font>COMPANY ORGANIZATION</font>
       <span class="depa">
         <font>DEPARTMENT</font>
       </span>
       <div class="boder"></div>
     </h4>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-lightbulb-o icon"></i><br>
       <h3>DESIGN DEPARTMENT</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-wrench icon"></i><br>
       <h3>ENGINEERING DEPARTMENT</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-phone icon"></i><br>
       <h3>BULEGAL COUNSEL</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-briefcase icon"></i><br>
       <h3>LEGAL COUNSEL</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-pencil-square-o icon"></i><br>
       <h3>ACCOUNTING DEPARTMENT</h3>
     </div>
     <div class="col-md-2 col-sm-2">
       <i class="fa fa-usd icon"></i><br>
       <h3>VALUATION DEPARTMENT</h3>
     </div>
   </div>
 </div>
</div>