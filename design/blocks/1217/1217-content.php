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
                                    <option value="#" class="selected_disable">性別</option>
                                    <option value="#" class="option_select">男性</option>
                                    <option value="#" class="option_select">女性</option>
                                </select>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="手機">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="聯絡電話">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="地址">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="email">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable">空間類別</option>
                                    <option value="#" class="option_select">住宅</option>
                                    <option value="#" class="option_select">商業空間</option>
                                    <option value="#" class="option_select">辦公室</option>
                                    <option value="#" class="option_select">舊屋翻修</option>
                                </select>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable">家庭成員</option>
                                    <option value="#" class="option_select">單身獨居</option>
                                    <option value="#" class="option_select">夫妻兩人</option>
                                    <option value="#" class="option_select">兩代同堂</option>
                                    <option value="#" class="option_select">三代同堂</option>
                                    <option value="#" class="option_select">多人同住</option>
                                </select>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable">自訂預算</option>
                                    <option value="#" class="option_select">100~150萬</option>
                                    <option value="#" class="option_select">150~200萬</option>
                                    <option value="#" class="option_select">200~500萬</option>
                                    <option value="#" class="option_select">500~1000萬</option>
                                    <option value="#" class="option_select">1000萬以上</option>
                                </select>
                            </div>
                            <div class="typehouse col-md-12">
                                <h4>室內格局</h4>
                                <div class="col-md-2 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable">坪數</option>
                                        <option value="#" class="option_select">30坪以下</option>
                                        <option value="#" class="option_select">30~40坪</option>
                                        <option value="#" class="option_select">40~60坪</option>
                                        <option value="#" class="option_select">60~100坪</option>
                                    </select>
                                </div>
                                <div class="col-md-2 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable">房數</option>
                                        <option value="#" class="option_select">1房</option>
                                        <option value="#" class="option_select">2房</option>
                                        <option value="#" class="option_select">3房</option>
                                        <option value="#" class="option_select">4房</option>
                                        <option value="#" class="option_select">5房</option>
                                    </select>
                                </div>
                                <div class="col-md-2 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable">廳數</option>
                                        <option value="#" class="option_select">1廳</option>
                                        <option value="#" class="option_select">2廳</option>
                                        <option value="#" class="option_select">3廳</option>
                                        <option value="#" class="option_select">4廳</option>
                                        <option value="#" class="option_select">4廳以上</option>
                                    </select>
                                </div>
                                <div class="col-md-2 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable">衛數</option>
                                        <option value="#" class="option_select">1衛</option>
                                        <option value="#" class="option_select">2衛</option>
                                        <option value="#" class="option_select">3衛</option>
                                        <option value="#" class="option_select">4衛</option>
                                        <option value="#" class="option_select">4衛以上</option>
                                    </select>
                                </div>
                                <div class="col-md-12 padding-20">
                                    <textarea rows="5" class="detail" placeholder="請留下您的訊息" >
                                        
                                    </textarea>    
                                </div>
                                <div class="col-md-12 padding-20">
                                    <button type="submit" class="button">送出表單</button>   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>