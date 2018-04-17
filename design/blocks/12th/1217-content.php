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
                    <div class="content_sub">The information you leave behind and the content of the message will be kept confidential. Be sure to leave your contact information to ensure that our reply can be provided for your reference.</div>
                </div>
                <!--Form Information-->
                <div class="contact_form">
                    <form class="form_info" action="#" method="post" name="main-contactform">
                        <div class="row">
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Contact person">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable">Gender</option>
                                    <option value="#" class="option_select">Male</option>
                                    <option value="#" class="option_select">Female</option>
                                </select>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Cell phone">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Contact phone number">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Address">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <label class="input">
                                    <input type="text" name="name_1" placeholder="Email">
                                </label>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable">Space category</option>
                                    <option value="#" class="option_select">Residential</option>
                                    <option value="#" class="option_select">Commercial space</option>
                                    <option value="#" class="option_select">Office</option>
                                    <option value="#" class="option_select">Old house renovation</option>
                                </select>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable">Family member</option>
                                    <option value="#" class="option_select">Singleton</option>
                                    <option value="#" class="option_select">Couples</option>
                                    <option value="#" class="option_select">Two generations together</option>
                                    <option value="#" class="option_select">Three generations</option>
                                    <option value="#" class="option_select">Many people live together</option>
                                </select>
                            </div>
                            <div class="col-md-4 padding-20">
                                <select class="select" name="select_name">
                                    <option value="#" class="selected_disable">Custom budget</option>
                                    <option value="#" class="option_select">100 to 1.5 million</option>
                                    <option value="#" class="option_select">150 to 2 million</option>
                                    <option value="#" class="option_select">200 to 5 million</option>
                                    <option value="#" class="option_select">500 to 10 million</option>
                                    <option value="#" class="option_select">More than 10 million</option>
                                </select>
                            </div>
                            <div class="typehouse col-md-12">
                                <h4>Indoor pattern</h4>
                                <div class="col-md-2 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable">Ping number</option>
                                        <option value="#" class="option_select">30 pings or less</option>
                                        <option value="#" class="option_select">30~40 pings</option>
                                        <option value="#" class="option_select">40 to 60 pings</option>
                                        <option value="#" class="option_select">60-100 pings</option>
                                    </select>
                                </div>
                                <div class="col-md-2 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable">Number of rooms</option>
                                        <option value="#" class="option_select">1 room</option>
                                        <option value="#" class="option_select">2 room</option>
                                        <option value="#" class="option_select">3 room</option>
                                        <option value="#" class="option_select">4 room</option>
                                        <option value="#" class="option_select">5 room</option>
                                    </select>
                                </div>
                                <div class="col-md-2 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable">Number of halls</option>
                                        <option value="#" class="option_select">1 hall</option>
                                        <option value="#" class="option_select">2 hall</option>
                                        <option value="#" class="option_select">3 hall</option>
                                        <option value="#" class="option_select">4 hall</option>
                                        <option value="#" class="option_select">4 or more halls</option>
                                    </select>
                                </div>
                                <div class="col-md-2 padding-20">
                                    <select class="select" name="select_detail">
                                        <option value="#" class="selected_disable">Wei number</option>
                                        <option value="#" class="option_select">1 Wei</option>
                                        <option value="#" class="option_select">2 Wei</option>
                                        <option value="#" class="option_select">3 Wei</option>
                                        <option value="#" class="option_select">4 Wei</option>
                                        <option value="#" class="option_select">More than 4 guards</option>
                                    </select>
                                </div>
                                <div class="col-md-12 padding-20">
                                    <textarea rows="5" class="detail" placeholder="Please leave your message" ></textarea>    
                                </div>
                                <div class="col-md-12 padding-20">
                                    <button type="submit" class="button">Send form</button>   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>