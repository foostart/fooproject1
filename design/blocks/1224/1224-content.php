<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1224">
	<div class="container">
		<section class="latest-deals-area">
			<header class="panel">
              <section id="page-title" class="page-title-center" style="background-image: url('images/page-title-bg.jpg'); padding: 40px 0;" data-stellar-background-ratio="0.3">
            <div class="container clearfix">
                <h1>Residential space</h1>
                <ol class="breadcrumb">
                    <li><a href="?c=index">Home</a></li>
                    <li class="active"><a>Residential space</a></li>
                </ol>
            </div>
        </section>
				
			</header>
         

      <ul id="portfolio-filter" class="portfolio-filter clearfix visible-lg visible-md" data-container="#portfolio">
                        <li class="activeFilter"><a href="#" class="oki_link" data-filter="#">ALL</a></li>
                        <!--[qsch:loop]-->
                        <li class="activeFilter"><a href="#" class="oki_link" data-filter=".kw-01">Dark color</a></li>
                        
                        <li class="activeFilter"><a href="#" class="oki_link" data-filter=".kw-01">Light color</a></li>
                        
                        <li class="activeFilter"><a href="#" class="oki_link" data-filter=".kw-01">Gray system</a></li>
                        
                        <li class="activeFilter"><a href="#" class="oki_link" data-filter=".kw-01">Dapin number</a></li>
                        
                        <li class="activeFilter"><a href="#" class="oki_link" data-filter=".kw-01">xiaopin number</a></li>
                   
                    </ul>

                
			<div class="row row-masnory">
                <!--Item Deal-->
                <div class="ptb-20 col-sm-6 col-lg-4">
                    <div class="deal-single panel">
                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="http://<?php echo $url_path ?>/images/content-rooms.jpg" style="background-image: url(images/content-rooms.jpg);">
                            
                    
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Carefully crafted, magnificent</a>
                                </h3>
                                <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Taichung City</font></font></a>
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , </font></font>
                                    <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Central District</font></font></a>
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , 
                                     </font></font>
                                     <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">70-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                            </div>
                            <div class="deal-price">
                         <h3 class="price text-right"><a href="#"><font style="vertical-align: inherit;">light-colored</font>
                                </a><font style="vertical-align: inherit;"> ,<a href="#"><font style="vertical-align: inherit;">Daping </font>
                                </a> </font></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Item deal-->
                <!--Item Deal-->
               <div class="ptb-20 col-sm-6 col-lg-4">
                    <div class="deal-single panel">
                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="http://<?php echo $url_path ?>/images/content-rooms-1.jpg" style="background-image: url(images/content-rooms-1.jpg);">
                            
                         
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Beautiful, craftsman</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New Taipei City</font></font></a>
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , </font></font>
                                    <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Shulin District</font></font></a>
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , 
                                     </font></font>
                                     <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36-pyeong </font></font></a>
                                </li>
                                   
                                </ul>
                              
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><a href="#"><font style="vertical-align: inherit;">wooden</font>
                                </a><font style="vertical-align: inherit;"> ,<a href="#"><font style="vertical-align: inherit;">deep and shallow mixed building </font>
                                </a> </font></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Item deal-->
                <!--Item Deal-->
                 <div class="ptb-20 col-sm-6 col-lg-4">
                    <div class="deal-single panel">
                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="http://<?php echo $url_path ?>/content-rooms-3.jpg" style="background-image: url(images/content-rooms-3.jpg);">
                            
                         
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                               
                                <h3 class="deal-title">
                                    <a href="#">Life is picturesque and contentment</a>
                                </h3>
                                     <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Taipei</font></font></a>
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , </font></font>
                                    <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Songshan District</font></font></a>
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , 
                                     </font></font>
                                     <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38 Ping </font></font></a>
                                </li>
                                   
                                </ul>
                             
                            </div>
                            <div class="deal-price">
                                  <h3 class="price text-right"><a href="#"><font style="vertical-align: inherit;">marble</font>
                                </a><font style="vertical-align: inherit;"> ,<a href="#"><font style="vertical-align: inherit;">bright colors </font>
                                </a> </font></h3>                            </div>
                        </div>
                    </div>
                </div>
                <!--End Item deal-->
                <!--Item Deal-->
               
                <!--End Item deal-->

            </div>
		</section>
	</div>
</div>