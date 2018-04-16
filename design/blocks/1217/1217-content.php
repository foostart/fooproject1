<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1217">
    
    <div class="container">
        <div class="row">
            <div class="contact_us">
                <div class="contact_title"> 
                    <img src="images/contactus-title.png">
                    <div class="content_sub">您留下的資料以及留言內容，我們將予以保密，並請您務必留下聯絡方式，確保我們的回覆能提供給您參考。</div>
                </div>
                <!--Form Information-->
                <div class="contact_form">
                    <form class="form_info" action="#" method="post" name="main-contactform">
                        <div class="row">
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="聯絡人">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected disable">性別</option>
                                    <option value="#" class="option_select">男性</option>
                                    <option value="#" class="option_select">女性</option>
                                </select>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="聯絡人">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="聯絡人">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="聯絡人">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="聯絡人">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected disable">空間類別</option>
                                    <option value="#" class="option_select">住宅</option>
                                    <option value="#" class="option_select">商業空間</option>
                                    <option value="#" class="option_select">辦公室</option>
                                    <option value="#" class="option_select">舊屋翻修</option>
                                </select>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected disable">家庭成員</option>
                                    <option value="#" class="option_select">單身獨居</option>
                                    <option value="#" class="option_select">夫妻兩人</option>
                                    <option value="#" class="option_select">兩代同堂</option>
                                    <option value="#" class="option_select">三代同堂</option>
                                    <option value="#" class="option_select">多人同住</option>
                                </select>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected disable">自訂預算</option>
                                    <option value="#" class="option_select">100~150萬</option>
                                    <option value="#" class="option_select">150~200萬</option>
                                    <option value="#" class="option_select">200~500萬</option>
                                    <option value="#" class="option_select">500~1000萬</option>
                                    <option value="#" class="option_select">1000萬以上</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>