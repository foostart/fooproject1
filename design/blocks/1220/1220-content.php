<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1220">
    <div class="container">
        <div class="row">
           <div class="col-md-12 footer">
              <h4>  CÔNG VIỆC <span> DÒNG CHẢY</span> </h4>
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
                    <h3>Đàm phán kinh doanh</h3>
                    <p>Hiểu được nhu cầu của chủ sở hữu.
                        <br><strong>Dân</strong> số gia đình, thói quen sinh hoạt, sở thích đặc biệt, ngân sách dự án, thiết bị và sử dụng đồ nội thất, lịch trình, vv
                        <br><strong>Các</strong> thành viên của <strong>văn phòng</strong> công ty, hồ sơ tổ chức, các mối quan hệ quá trình của các phòng ban khác nhau về hình ảnh công ty, sử dụng máy móc kinh doanh, ước tính tăng trưởng trong ba đến năm năm tới, ngân sách dự án, tiến độ ...
                        <br><strong>Kinh doanh không gian kinh doanh không gian</strong>, triết lý kinh doanh, sự hiểu biết về môi trường địa lý, phân tích dòng, vị trí sản phẩm và kháng cáo của đối tượng của sự hiểu biết ... và như vậy.</p>

                    </div>
                    <div class="divider divider-center"><i > ．</i></div>
                  
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >2</i></a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>KHẢO SÁT ĐỊA ĐIỂM</h3>
                    <p>Hiểu được môi trường xung quanh công trường và thực hiện các cuộc điều tra chi tiết, chụp ảnh và lưu trữ để tham khảo thiết kế.</p>

                    </div>
                    <div class="divider divider-center"><i > ．</i></div>
                    
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >3</i></a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>KẾ HOẠCH HOÀN THIỆN</h3>
                    <p>Đối với các kế hoạch ban đầu, các hành động, vv, trước tiên chúng ta trước tiên chúng ta phải có được nhận dạng cần thiết và thiết kế các phác thảo.</p>

                    </div>
                    <div class="divider divider-center"><i > ．</i></div>
                    
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >4</i></a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>THẢO LUẬN DỰ THẢO</h3>
                    <p>Đối với các kế hoạch ban đầu, các hành động, vv, trước tiên chúng ta trước tiên chúng ta phải có được nhận dạng cần thiết và thiết kế các phác thảo.</p>

                    </div>
                    <div class="divider divider-center"><i > ．</i></div>
                 

                </div>
                <!--dong2-->
              
                <div class="col-md-6 col-sm-6 col-xs-12 bad">
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >5</i></a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>KÝ HỢP ĐỒNG THIẾT KẾ</h3>
                    <p>Nếu chủ nhà hài lòng với dự thảo quy định ở đoạn trên và hài lòng rằng cần thảo luận thêm, hai bên ký "hợp đồng thiết kế" để chúng tôi có thể cung cấp các dịch vụ chi tiết hơn và sửa đổi các trường hợp và thiết kế chi tiết khác.</p>

                    </div>
                    <div class="divider divider-center"><i > ．</i></div>
                  
                           <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >6</i></a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>HOÀN THIỆN THIẾT KẾ</h3>

                    <p>
                        Theo dự thảo thiết kế, hãy sửa đổi cần thiết.</p>

                    </div>
                    <div class="divider divider-center"><i > ．</i></div>
                 
                           <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >7</i></a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>THIẾT KẾ CHI TIẾT</h3>
                    <p>Theo thiết kế của vụ kiện cuối cùng, đã hoàn thành bản vẽ chi tiết và bản mô tả chi tiết cần thiết và dự toán và lập kế hoạch dự án..</p>

                    </div>
                    <div class="divider divider-center"><i > ．</i></div>
                 
                           <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >8</i></a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>HỢP ĐỒNG KỸ THUẬT KÝ KẾT</h3>
                    <p>Mô tả về việc gia nhập dự án: Công ty sẽ nhận được sự tín nhiệm của chủ sở hữu và nhận được quyền ký hợp đồng với một mức giá hợp lý. Để nắm bắt chất lượng của tất cả các khía cạnh của kỹ thuật và để có được sự giải thích tốt nhất của các chi tiết của khái niệm thiết kế.</p>

                    </div>
                    <div class="divider divider-center"><i > ．</i></div>
                
                           <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >9</i></a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>XÂY DỰNG
                        <br>
                        HOÀN THÀNH CHẤP NHẬN VÀ GIAO HÀNG
                        ĐÓNG TRƯỜNG HỢP</h3>
                    

                    </div>
                    <div class="divider divider-center"><i > ．</i></div>
                 

                </div>
             
         
               
 
  

                </div>


            </div>



        </div>
    </div>
</div>