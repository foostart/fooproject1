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
                        <ol class="bread">
                            <li><a href="#">Trang chủ</a></li>
                            <li>/</li>
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
                            <form class="sky-form nobottommargin" id="page-search">
                                <ul>
                                    <li>
                                        <label class="select">
                                            <select>
                                                <option>
                                                    Chọn hệ màu
                                                </option>
                                                <option value="">Tất cả</option>
                                                <option>Hệ thống trắng</option>
                                                
                                                <option>Màu ánh sáng</option>
                                                
                                                <option>Hệ thống xám</option>
                                                
                                                <option>Màu tối</option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="select">
                                            <select>
                                                <option>
                                                    Chọn số căn hộ
                                                </option>
                                                 <option>Tất cả</option>                                              
                                                <option>Số căn hộ nhỏ (20)</option>
                                                                                                 
                                                <option>Tổng (21-40)</option>
                                                                                                 
                                                <option>Số Daping (40)</option>
                                            </select>
                                            <i></i>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="input">
                                            <input placeholder="Nhập từ khóa">
                                        </label>
                                    </li>
                                    <li>
                                        <a href="#"><img alt="#" src="<?php echo $url_path ?>/images/search-dark.png"></a>
                                    </li>
                                </ul>
                            </form>
                        </nav>
                        <div class="container">
                            <hr>
                            <div class="search">
                                <span>Sau đây là kết quả tìm kiếm, tổng cộng <span class="p1">275</span> thông tin</span>
                            </div>
                            <hr>
                        </div>
                    
                    
                    </div>
            </div>
        </div>
</div>