<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1231">
        <section id="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>TÌM KIẾM</h1>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Kết quả tìm kiếm</a></li>
                        </ol>
                    </div>
                </div>

            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="row pagesearch">
                        <nav>
                            <form class="sky-form nobottommargin" id="page-search" name="page-search" action="?c=sch" method="post">
                                <ul>
                                    <li>
                                        <label class="select">
                                            <select name="color">
                                                <option value="0" selected="" disabled=""><font><font>
                                                    - Chọn hệ màu -
                                                </font></font></option>
                                                <option value=""><font><font>Tất cả</font></font></option>
                                                <!--[tqs:color]-->
                                                <option><font><font style="vertical-align: inherit;">Hệ thống trắng</font></font></option>
                                                
                                                <option><font><font">Màu ánh sáng</font></font></option>
                                                
                                                <option><font><font>Hệ thống xám</font></font></option>
                                                
                                                <option><font><font>Màu tối</font></font></option>
                                            </select>
                                            <i></i>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="select">
                                            <select name="ping">
                                                <option><font><font>
                                                    - Chọn số căn hộ -
                                                </font></font></option>
                                                 <option><font><font>Tất cả</font></font></option>
                                                <!--[tqs:ping]-->                                                
                                                <option><font><font>Số căn hộ nhỏ (~ 20 tsubo)</font></font></option>
                                                                                                 
                                                <option><font><font>Tổng (21-40 tsubo)</font></font></option>
                                                                                                 
                                                <option><font><font>Số Daping (40 ping ~)</font></font></option>
                                            </select>
                                            <i></i>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="input">
                                            <input name="schtxt" placeholder="Nhập từ khóa" type="text" value="">
                                        </label>
                                    </li>
                                    <li>
                                        <a href="#" type="submit" value="submit" class="icon"><img src="<?php echo $url_path ?>/images/search-dark.png"></a>
                                    </li>
                                </ul>
                            </form>
                        </nav>
                        <div class="vien"></div>
                        <div class="search">
                            <p>Sau đây là kết quả tìm kiếm, tổng cộng <p1>275</p1> thông tin</p>
                        </div>

                        <div class="vienduoi"></div>
                    
                    
                    </div>
            </div>
        </div>
</div>