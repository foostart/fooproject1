<?php
include '../config.php';
if (empty($url_path)) {
	$url_host = 'http://'.$_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);
}
?>
<div class="type-1217">
    
    <div class="container">
        <div class="row">
            <div class="contact_us">
                <div class="contact_title"> 
                    <img src="<?php echo $url_path ?>/images/contactus-title.png" alt= "img1">
                    <div class="content_sub">Thông tin và nội dung tin nhắn của bạn sẽ được bảo mật. Hãy chắc chắn thông tin liên lạc mà bạn để lại để đảm bảo phản hồi của chúng tôi có thể hỗ trợ cho bạn .</div>
                </div>
                <!--Form Information-->
                <div class="contact_form">
                    <form class="form_info" action="#" method="post" name="main-contactform">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Người liên lạc">
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable" selected="true" disabled="disabled">Giới Tính</option>
                                    <option value="#" class="option_select">Nam</option>
                                    <option value="#" class="option_select">Nữ</option>
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                                </select>
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Di Động">
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Số Điện Thoại Liên Lạc">
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Địa Chỉ">
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Email">
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable" selected="true" disabled="disabled">Không gian sống</option>
                                    <option value="#" class="option_select">Biệt thự</option>
                                    <option value="#" class="option_select">Chung cư</option>
                                    <option value="#" class="option_select">Công sở</option>
                                    <option value="#" class="option_select">Nhà cổ điển</option>
                                </select>
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable" selected="true" disabled="disabled">Số lượng thành viên</option>
                                    <option value="#" class="option_select">Độc thân</option>
                                    <option value="#" class="option_select">Cặp đôi</option>
                                    <option value="#" class="option_select">Hai thế hệ</option>
                                    <option value="#" class="option_select">Ba thế hệ</option>
                                    <option value="#" class="option_select">Tập thể</option>
                                </select>
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-4 col-sm-6 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable" selected="true" disabled="disabled">Ngân sách dự kiến</option>
                                    <option value="#" class="option_select">Dưới 150 triệu</option>
                                    <option value="#" class="option_select">150-300 triệu</option>
                                    <option value="#" class="option_select">300-500 triệu</option>
                                    <option value="#" class="option_select">500 triệu-1 tỷ</option>
                                    <option value="#" class="option_select">Hơn 1 tỷ</option>
                                </select>
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                            </div>
                            <div class="typehouse col-md-12 col-sm-12">
                                <h4>Kiến trúc trong nhà</h4>
                                <div class="col-md-3 col-sm-6 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable" selected="true" disabled="disabled">Số tầng</option>
                                        <option value="#" class="option_select">1 tầng</option>
                                        <option value="#" class="option_select">2 tầng</option>
                                        <option value="#" class="option_select">3 tầng</option>
                                        <option value="#" class="option_select">4 tầng</option>
                                    </select>
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-3 col-sm-6 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable" selected="true" disabled="disabled">Số lượng phòng</option>
                                        <option value="#" class="option_select">1 phòng</option>
                                        <option value="#" class="option_select">2 phòng</option>
                                        <option value="#" class="option_select">3 phòng</option>
                                        <option value="#" class="option_select">4 phòng</option>
                                        <option value="#" class="option_select">5 phòng</option>
                                    </select>
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                                </div>
                                
                                <div class="col-md-3 col-sm-6 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable" selected="true" disabled="disabled">Bảo vệ</option>
                                        <option value="#" class="option_select">1 Người</option>
                                        <option value="#" class="option_select">2 Người</option>
                                        <option value="#" class="option_select">3 Người</option>
                                        <option value="#" class="option_select">4 Người</option>
                                        <option value="#" class="option_select">nhiều hơn 4 Người</option>
                                    </select>
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-3 col-sm-6 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable" selected="true" disabled="disabled">Số lượng hội trường</option>
                                        <option value="#" class="option_select">1</option>
                                        <option value="#" class="option_select">2</option>
                                        <option value="#" class="option_select">3</option>
                                        <option value="#" class="option_select">4</option>
                                        <option value="#" class="option_select">Nhiều hơn 4</option>
                                    </select>
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-12 padding-20">
                                    <textarea rows="5" class="detail" placeholder="Vui lòng để lại lời nhắn của bạn" ></textarea>    
                                </div>
                                <div class="col-md-12 padding-20">
                                    <button type="submit" class="button">Gửi</button>   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>