<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1214">

    <header>
        <!--MENU-->
        <div class="navbar navbar-default navbar-fixed-top" id="menu-home">
            <div class="container width-2034">
                <!--LOGO-->
                <div class="logo" id="demo">
                    <a href="#">
                        <img src="http://<?php echo $url_path ?>/images/logo-dark.png"
                             alt=""/>
                    </a>
                </div>
                <!--/END LOGO-->

                <!--CART-->
                <div class="cart">
                    <ul>
                        <!--SEARCH-->
                        <li>
                            <div class="search-bar"><i class="fa fa-search"></i></div>
                            <div class="search-box">
                                <form action="#">
                                    <div class="form-search">
                                        <input type="text" class="input-block-level"/>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!--/END SEARCH-->
                    </ul>
                </div>
                <!--/CART-->

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed btn-menu" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!--MENU DROP DOWN-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Company Profile<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <div class="arr-nav"></div>
                                <li><a href="#">about chengshe</a></li>
                                <li><a href="#">company organization</a></li>
                                <li><a href="#">workflow</a></li>
                                <li><a href="#">charges</a></li>
                                <li><a href="#">case performance</a></li>
                            </ul>
                        </li>
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">work overview<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <div class="arr-nav"></div>
                                <li><a href="#">residential space</a></li>
                                <li><a href="#">comercial space</a></li>
                                <li><a href="#">office space</a></li> 
                                <li><a href="#">charges</a></li>        
                            </ul>
                        </li>
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">design team<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <div class="arr-nav"></div>
                                <li><a href="#">daan comany</a></li>
                                <li><a href="#">chengde company</a></li>
                                <li><a href="#">revival one</a></li>
                                <li><a href="#">revival II</a></li>
                                <li><a href="#">zhongxiao company</a></li>
                                <li><a href="#">minsheng company</a></li>
                            </ul>
                        </li>
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">customer service<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <div class="arr-nav"></div>
                                <li><a href="#">online consultation</a></li>
                                <li><a href="#">customer service</a></li>
                            </ul>
                        </li>
                        <!--/END MENU DROP DOWN-->

                        <!--MENU DROP DOWN-->
    
                        <!--/END MENU DROP DOWN-->

                        <!--MENU DROP DOWN-->
                        
                        <!--/END MENU DR
                    </ul>
                </div><!-- /.navbar-collapse -->

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="padding-header"></div>
        <!--/END MENU-->
    </header>
    
</div>






