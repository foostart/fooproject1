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
            <div class="container width-1214">
                <!--LOGO-->
                <div class="logo" id="demo">
                    <a href="#">
                        <img src="http://<?php echo $url_path ?>/images/logo.png"
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
                                <form class="search-form" id="main-search" name="main-search" action="#" method="post">
                
                <ul>
                    <li>
                        <label class="select">
                            <select>
                                <option name="color" value="0" selected="" disabled=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    - color system -
                                </font></font></option>
                                <!--[qs:color]-->
                                <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">White system</font></font></option>
                                
                                <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Light color</font></font></option>
                                
                                <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gray system</font></font></option>
                                
                                <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dark color</font></font></option>
                                <!--[qs:color]-->
                                
                                <!--
                                <option value="1">淺色</option>
                                <option value="2">灰色</option>
                                <option value="3">深色</option>-->
                                
                            </select>
                            <i></i>
                        </label>
                    </li>
                    <li>
                        <label class="select">
                            <select>
                                <option name="ping" value="0" selected="" disabled=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    - number of flats -
                                </font></font></option>
                                <!--[qs:ping]-->
                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Small flats(~20 tsubo)</font></font></option>
                                
                                <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">General(21-40 tsubos)</font></font></option>
                                
                                <option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Daping (40 pings~)</font></font></option>
                                <!--[qs:ping]-->
                                <!--
                                <option value="1">10-20坪</option>
                                <option value="2">21-35坪</option>
                                <option value="3">36-50坪</option>
                                <option value="3">50坪以上</option>
                                -->
                            </select>
                            <i></i>
                        </label>
                    </li>
                    <li>
                        <label class="input">
                            <input name="schtxt" placeholder="Search..." type="text">
                        </label>
                    </li>
                    <li>
                        <a href="#" type="submit" value="submit" id="qschbtn"><i class="fa fa-search bts"></i></a>
                    </li>
                </ul>
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
</div>






