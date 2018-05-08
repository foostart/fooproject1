<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1221">
    <div class="container">
        <div class="row">
            <div class="title"> 
                <h4>
                    <span>Bảng Giá</span>
                    <span class="standard">Vật Tư</span>
                </h4>
            </div>
            <div class="text"> 
                <p>
Bảng báo giá đá xây dựng trong 24h – Giá đá xây dựng được cập nhật liên tục nhằm đáp ứng nhu cầu mua đá xây dựng của quý khách hàng.</p>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            <p>TÊN VẬT LIỆU XÂY DỰNG</p>
                        </th>
                        <th>
                            <p>TÍNH M3</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Đá 1 x 2 (đen)</p>                          
                        </td>
                        <td>
                            <p>295000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Đá 1 x 2 (xanh)</p>
                        </td>
                        <td>
                            <p>430000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Đá mi bụi</p>
                        </td>
                        <td>
                            <p>300000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Đá mi sàn</p>
                        </td>
                        <td>
                            <p>290000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Đá 0 x 4 loại 1</p>
                        </td>
                        <td>
                            <p>270000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Đá 0 x 4 loại 1</p>
                        </td>
                        <td>
                            <p>250000</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p>Ghi chú :Bảng giá đá xây dựng – Sài Gòn CMC. Cập nhật mới nhất bảng giá vật liệu xây dựng, đơn báo giá các loại đá xây dựng hiện nay tại TPHCM, cung cấp cho khách hàng những thông tin mới nhất, chính xác nhất về giá các loại đát xây dựng trong năm 2018 tại Sài Gòn CMC.</p>
        </div>
    </div>
</div>