<?php
include '../config.php';
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
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
                        <img class="img-logo" src="<?php echo $url_path ?>/images/logo-dark.png"
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
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Giới thiệu công ty<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Về công ty</a></li>
                            <li><a href="#">Tổ chức công ty</a></li>
                            <li><a href="#">Quy trình làm việc</a></li>
                            <li><a href="#">Chi phí</a></li>
                        </ul>
                    </li>
                    <li class="dropdown show-hover">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Tổng quan công việc<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Không gian dân cư</a></li>
                            <li><a href="#">Không gian công sở</a></li>
                            <li><a href="#">Chi phí</a></li>         
                        </ul>
                    </li>
                    <li class="dropdown show-hover">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Đội ngũ thiết kế<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">công ty Hòa Bình</a></li>
                            <li><a href="#">Công ty An Phong</a></li>
                            <li><a href="#">Công ty Central</a></li>
                            <li><a href="#">Công ty Bảo Sơn</a></li>
                        </ul>
                    </li>
                    <li class="dropdown show-hover">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Hỗ trợ khách hàng<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Tư vấn trực tuyến</a></li>
                            <li><a href="#">Dịch Vụ</a></li>
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






