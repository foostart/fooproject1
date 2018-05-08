<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1220">
    <div class="container">
        <div class="row">
         <div class="col-md-12 footer">
          <h4>  TỔ CHỨC <span> CÔNG VIỆC</span> </h4>
          <div class="vien" ></div>
      </div>
      <div class="center">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 bad">
            <div class="col-md-4 col-sm-4 col-xs-4 bod">
                <div class="fbox-icon">
                    <a href="#"><i >1</i></a>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <h3>ĐÀM PHÁN KINH DOANH</h3>
                <p>Hiểu nhu cầu của chủ sở hữu.
                    <br><strong>Dân </strong> số gia đình dân cư,  thói quen sinh hoạt, sở thích đặc biệt, ngân sách dự án, thiết bị và sử dụng đồ nội thất, lịch trình, v.v. 
                    <br><strong>văn phòng</strong>  hồ sơ tổ chức, mối quan hệ quy trình của các phòng ban khác nhau trong hình ảnh công ty, sử dụng máy kinh doanh, ước tính tăng trưởng trong ba đến năm năm tới, 
                    <br><strong>Kinh doanh không gian </strong>kinh doanh thiên nhiên, triết lý kinh doanh, sự hiểu biết về môi trường địa lý.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                  <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >2</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>KHẢO SÁT THỰC ĐỊA</h3>
                    <p>Hiểu môi trường xung quanh của công trường xây dựng và thực hiện khảo sát chi tiết và chụp ảnh và lưu trữ làm tài liệu tham khảo cho thiết kế.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                 <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >3</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>HOÀN THÀNH KẾ HOẠCH</h3>
                    <p>Đối với quy hoạch ban đầu, các dòng hành động, v.v ..., trước tiên chúng ta phải có được nhận dạng cần thiết và thiết kế phác thảo.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >4</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>BẢN THẢO TÓM TẮT</h3>
                    <p>Đối với quy hoạch ban đầu, các dòng hành động, v.v ..., trước tiên chúng ta phải có được nhận dạng cần thiết và thiết kế phác thảo..</p>
                </div>
                <div class="divider divider-center"><i > . </i>
                </div>
            </div>
            <!--dong2-->
             <div class="col-md-6 col-sm-6 col-xs-12 bad dong2">
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >5</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>KÝ HỢP ĐỒNG THIẾT KẾ</h3>
                    <p>Nếu chủ nhà hài lòng với bản dự thảo được nêu trong đoạn trên và thỏa mãn rằng cần phải thảo luận thêm, hai bên ký “hợp đồng thiết kế” để chúng tôi có thể cung cấp các dịch vụ chi tiết hơn và thực hiện các chỉnh sửa cần thiết và thiết kế chi tiết khác nhau cho vụ án.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>

                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >6</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>HOÀN THÀNH THIẾT KẾ</h3>
                    <p>
                   Theo dự thảo thiết kế, thực hiện các sửa đổi cần thiết..</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >7</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>THIẾT KẾ CHI TIẾT</h3>
                    <p>Theo thiết kế của trường hợp cuối cùng, các bản vẽ và mô tả chi tiết xây dựng chi tiết cần thiết đã được hoàn thành và việc định giá và lập kế hoạch dự án đã được biên soạn.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >8</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>KÝ HỢP ĐỒNG KỸ THUẬT</h3>
                    <p>Mô tả về sự tham gia của dự án: Công ty sẽ hoàn toàn có được sự tin tưởng của chủ sở hữu và có quyền ký hợp đồng với dự án với mức giá hợp lý. Để nắm bắt chất lượng của tất cả các khía cạnh của kỹ thuật và để có được giải thích tốt nhất về các chi tiết của khái niệm thiết kế..</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >9</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>XÂY DỰNG
                        <br>
                        HOÀN THÀNH CHẤP NHẬN VÀ GIAO HÀNG
                        ĐÓNG VỎ</h3>
                </div>
                <div class="divider divider-center"><i > . </i></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>