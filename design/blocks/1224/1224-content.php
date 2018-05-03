<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-e-1224">
            <div class="top-header" style="background-image: url('<?php echo $url_path ?>/images/page-title-bg.jpg')" 

             data-stellar-background-ratio="0.3" >
    
                <div class="tem">RESIDENTIAL SPACE </div>
                    <div class="border"></div>
                        <div class="name">

                                <a href="#">Home<a> / <a href="#">Residential space</a>
                        </div>
            </div>      
            <div class="container rescure">
                <div class="row">   
                    <div class="col-md-12">        
                        <div class="nav1 rescure1">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">ALL</a></li>
                                <li><a data-toggle="tab" href="#menu1">Dark color</a></li>
                                <li><a data-toggle="tab" href="#menu2">Light color</a></li>
                                <li><a data-toggle="tab" href="#menu3">Gray system</a></li>
                                <li><a data-toggle="tab" href="#menu4">Dapin number</a></li>
                                <li><a data-toggle="tab" href="#menu5">xiaopin number</a></li>                         
                            </ul>
                  <div class="tab-content">                
                                <div id="home" class="tab-pane fade in active">
                                   
                                    <div class="related">
                                        <ul class="products">

                                            <li class="product">

                                                  <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>  

                                               <div class="deal-single panel">

                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9"> 
                            <img src="<?php echo $url_path ?>/images/4.jpg" >                                       
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                        </div>
                    </div>
                                            </li>

                                            <li class="product">
                                                  <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" > 
                                        <img src="<?php echo $url_path ?>/images/5.jpg" >
                        </figure>
                    <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                                 <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                        <img src="<?php echo $url_path ?>/images/6.jpg" >                       
                        </figure>
                         <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="menu1" class="tab-pane fade">
                               
                                    <div class="related">
                                        <ul class="products">
                                            <li class="product">
                                                 <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" > 
                        <img src="<?php echo $url_path ?>/images/7.jpg" >                      
                        </figure>
                  <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                                <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" >
                        <img src="<?php echo $url_path ?>/images/8.jpg" >                       
                        </figure>
                     <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                               <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" > 
                        <img src="<?php echo $url_path ?>/images/9.jpg" >                      
                        </figure>
                   <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                    <div id="menu2" class="tab-pane fade">
                               
                                    <div class="related">
                                        <ul class="products">
                                            <li class="product">
                                                 <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" > 
                        <img src="<?php echo $url_path ?>/images/10.jpg" >                      
                        </figure>
                  <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                                <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" >  
                        <img src="<?php echo $url_path ?>/images/11.jpg" >                     
                        </figure>
                     <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                               <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" > 
                        <img src="<?php echo $url_path ?>/images/12.jpg" >                      
                        </figure>
                   <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>    <div id="menu3" class="tab-pane fade">
                               
                                    <div class="related">
                                        <ul class="products">
                                            <li class="product">
                                                 <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" > 
                        <img src="<?php echo $url_path ?>/images/13.jpg" >                      
                        </figure>
                  <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                                <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" >  
                        <img src="<?php echo $url_path ?>/images/14.jpg" >                     
                        </figure>
                     <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                               <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" > 
                        <img src="<?php echo $url_path ?>/images/15.jpg" >                      
                        </figure>
                   <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>    <div id="menu4" class="tab-pane fade">
                               
                                    <div class="related">
                                        <ul class="products">
                                            <li class="product">
                                                 <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" >   
                        <img src="<?php echo $url_path ?>/images/10.jpg" >                    
                        </figure>
                  <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                                <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" >  
                        <img src="<?php echo $url_path ?>/images/10.jpg" >                     
                        </figure>
                     <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                               <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9"> 
                        <img src="<?php echo $url_path ?>/images/16.jpg" >                      
                        </figure>
                   <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>    <div id="menu5" class="tab-pane fade">
                               
                                    <div class="related">
                                        <ul class="products">
                                            <li class="product">
                                                 <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" >
                        <img src="<?php echo $url_path ?>/images/10.jpg" >                       
                        </figure>
                  <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                                <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">   
                        <img src="<?php echo $url_path ?>/images/17.jpg" >                    
                        </figure>
                     <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>

                                            <li class="product">
                                               <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9" >   
                        <img src="<?php echo $url_path ?>/images/10.jpg" >                    
                        </figure>
                   <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font > , </font></font>
                                    <a href="#"><font ><font > Shulin District</font></font></a>
                                    <font ><font > , 
                                     </font></font>
                                     <a href="#"><font><font >36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font ">wooden</font>
                                </a><font > ,<a href="#"><font >deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </li>
                                        </ul>
                                    </div>
                                
                                </div>
                                <div class="tab-content">


                    
                                <div id="home" class="tab-pane fade">
                                   
                                    <div class="related">
                                        <ul class="products">

                                            <li class="product">

                                                  <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>  

                                               <div class="deal-single panel">

                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">  
                            <img src="<?php echo $url_path ?>/images/10.jpg" >
                                         
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font> , </font></font>
                                    <a href="#"><font><font> Shulin District</font></font></a>
                                    <font><font> , 
                                     </font></font>
                                     <a href="#"><font><font>36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font "="">wooden</font>
                                </a><font> ,<a href="#"><font>deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                        </div>
                    </div>
                                            </li>

                                            <li class="product">
                                                  <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9"> 
                        <img src="<?php echo $url_path ?>/images/18.jpg" >                      
                        </figure>
                    <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font> , </font></font>
                                    <a href="#"><font><font> Shulin District</font></font></a>
                                    <font><font> , 
                                     </font></font>
                                     <a href="#"><font><font>36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font "="">wooden</font>
                                </a><font> ,<a href="#"><font>deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </div></li>

                                            <li class="product">
                                                 <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">   
                        <img src="<?php echo $url_path ?>/images/10.jpg" >                    
                        </figure>
                         <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font> , </font></font>
                                    <a href="#"><font><font> Shulin District</font></font></a>
                                    <font><font> , 
                                     </font></font>
                                     <a href="#"><font><font>36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font "="">wooden</font>
                                </a><font> ,<a href="#"><font>deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </div></li>
                                        </ul>
                                    </div>
                                </div>

                               
                         <div class="tab-content">


                    
                                <div id="home" class="tab-pane fade">
                                   
                                    <div class="related">
                                        <ul class="products">

                                            <li class="product">

                                                  <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>  

                                               <div class="deal-single panel">

                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">  
                            <img src="<?php echo $url_path ?>/images/10.jpg" >
                                         
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font> , </font></font>
                                    <a href="#"><font><font> Shulin District</font></font></a>
                                    <font><font> , 
                                     </font></font>
                                     <a href="#"><font><font>36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font "="">wooden</font>
                                </a><font> ,<a href="#"><font>deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                        </div>
                    </div>
                                            </li>

                                            <li class="product">
                                                  <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">  
                        <img src="<?php echo $url_path ?>/images/19.jpg" >                     
                        </figure>
                    <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font> , </font></font>
                                    <a href="#"><font><font> Shulin District</font></font></a>
                                    <font><font> , 
                                     </font></font>
                                     <a href="#"><font><font>36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font "="">wooden</font>
                                </a><font> ,<a href="#"><font>deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </div></li>

                                            <li class="product">
                                                 <div class="deal-single panel">
                        <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">     
                        <img src="<?php echo $url_path ?>/images/10.jpg" >                  
                        </figure>
                         <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font><font>New Taipei City</font></font></a>
                                    <font><font> , </font></font>
                                    <a href="#"><font><font> Shulin District</font></font></a>
                                    <font><font> , 
                                     </font></font>
                                     <a href="#"><font><font>36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font "="">wooden</font>
                                </a><font> ,<a href="#"><font>deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                    </div>
                                            </div></li>
                                        </ul>
                                    </div>
                                </div>

                                </div>
                            </div>
                            
                                <div class="text-center">
                                <ul class="pagination nobottommargin padding-t-b-30">                           
                                    <li class="active">
                                <li xclass="disabled"><a href="#">← </a></li>  
                                <li><a data-toggle="tab" href="#menu1">1</a></li>
                                <li><a data-toggle="tab" href="#menu2">2</a></li>
                                <li><a data-toggle="tab" href="#menu3">3</a></li>
                                <li><a data-toggle="tab" href="#menu4">4</a></li>
                                <li><a data-toggle="tab" href="#menu5">5</a></li> 
                                   <li>
                                <a href="#"> →</a>
                            </li>
                        </ul>
                    </div>
                            </div>
                        </div>

                    </div>             
                </div>
            </div>                                              
        </div> 
    </a>             
