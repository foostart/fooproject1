<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1219">
  <div class="container center">
    <div class="row">
<<<<<<< HEAD
         <div class="in">COMPANY ORGANIZATION
              <span class="depa">BRANCH</span>
          </div>
         <div class="boder"></div>

       <a href="#" class=" button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Daan Company</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Chengde company</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Revival One</div>
       </a>
       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Revival II</div>
       </a>

       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Zhongxiao Company</div>
       </a>

       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Minsheng Company</div>
       </a>

       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Zhongshan Company</div>
       </a>

       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">South West Company</div>
       </a>

       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Nanjing company</div>
       </a>

       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">Dunbei Company</div>
       </a>

       <a href="#" class="button hvr-backward">
          <i class="fa fa-arrow-right ican"></i>
           <div class="text">General Management Office</div>
       </a>
   </div>
 </div>
 <hr class="margin-tb-s">
 <div class="container">
   <div class="col-md-12">
      <div class="in">COMPANY ORGANIZATION
        <span class="depa">DEPARTMENT</span>
      </div>
       <div class="boder"></div>

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
=======
     <div class="bode">
       <div class="heading-block">
         <h4>
           <font>COMPANY ORGANIZATION</font>
           <span class="depa">
             <font>BRANCH</font>
           </span>
           <div class="boder"></div>
         </h4>
         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font >Daan Company</font>
           </span>
         </a>
         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>Chengde company</font>
           </span>
         </a>
         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>Revival One</font>
           </span>
         </a>
         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>Revival II</font>
           </span>
         </a>

         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>Zhongxiao Company</font>
           </span>
         </a>

         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>Minsheng Company</font>
           </span>
         </a>

         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>Zhongshan Company</font>
           </span>
         </a>

         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>South West Company</font>
           </span>
         </a>

         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>Nanjing company</font>
           </span>
         </a>

         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>Dunbei Company</font>
           </span>
         </a>

         <a href="#" class="button">
           <i class="icon-line-arrow-right"></i>
           <span>
             <font>General Management Office</font>
           </span>
         </a>
       </div>
>>>>>>> e5dcb43c1341d4d904cb0ffc7a2c825e6ae0129b
     </div>
     <div class="col-md-12">
       <h4>
         <font>COMPANY ORGANIZATION</font>
         <span class="depa">
           <font>DEPARTMENT</font>
         </span>
         <div class="boder"></div>
       </h4>
       <div class="col-md-2">
         <i class="fa fa-lightbulb-o icon"></i><br>
         <h3>DESIGN DEPARTMENT</h3>
       </div>
       <div class="col-md-2">
         <i class="fa fa-wrench icon"></i><br>
         <h3>ENGINEERING DEPARTMENT</h3>
       </div>
       <div class="col-md-2">
         <i class="fa fa-phone icon"></i><br>
         <h3>BULEGAL COUNSEL</h3>
       </div>
       <div class="col-md-2">
         <i class="fa fa-briefcase icon"></i><br>
         <h3>LEGAL COUNSEL</h3>
       </div>
       <div class="col-md-2">
         <i class="fa fa-pencil-square-o icon"></i><br>
         <h3>ACCOUNTING DEPARTMENT</h3>
       </div>
       <div class="col-md-2">
         <i class="fa fa-usd icon"></i><br>
         <h3>VALUATION DEPARTMENT</h3>
       </div>
     </div>
   </div>
 </div>
</div>