<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
    <div class="type-1227">
        <div class="header">
            <img class="image-s" src="<?php echo $url_path ?>/images/bg-header-6.jpg">
            <div class="text-center-image">
                <div class="text-1">
                    <span>Where does it come from?</span>
                </div>
                <hr class="hr-size-color">
                <div class="text-2">Contrary to popular belief</div>
            </div>
        </div>

        <div class="container">
            <div class="pading-header">
                <div class="text-3">
                    <span>What is</span>
                    <span class="color">Lorem Ipsum?</span>
                </div>
                <hr class="hr-size-color2">
                <div class="text-5">
                    <span> Contrary to popular belief, Lorem Ipsum is not simply random text.  </span>
                </div>

            </div>
            <div class="clear"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="center-text">
                        <div class="pading-top">
                            <i class="border glyphicon glyphicon-user fa-3x " aria-hidden="true"></i>
                        </div>
                        <div class="text-6">
                            <span>Where can I get some? </span>

                        </div>
                        <div class="hr-size-color3"></div>
                        
                        <div class="text-7">
                            <span>The standard chunk of Lorem Ipsum </span>
                        </div>
                        <div class="text-7">
                            <span>chunk of Lorem Ipsum </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="center-text">
                        <div class="pading-top">
                            <i class="border glyphicon glyphicon-user fa-3x " aria-hidden="true"></i>
                        </div>
                        <div class="text-6">
                            <span>Where can I get some? </span>

                        </div>
                        <div class="hr-size-color3"></div>
                        <div class="text-7">
                            <span>The standard chunk of Lorem Ipsum </span>
                        </div>
                        <div class="text-7">
                            <span>chunk of Lorem Ipsum </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="center-text">
                        <div class="pading-top">
                            <i class="border glyphicon glyphicon-user fa-3x " aria-hidden="true"></i>
                        </div>
                        <div class="text-6">
                            <span>Where can I get some? </span>

                        </div>
                        <div class="hr-size-color3"></div>
                        <div class="text-7">
                            <span>The standard chunk of Lorem Ipsum </span>
                        </div>
                        <div class="text-7">
                            <span>chunk of Lorem Ipsum </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-2">

                <hr>
                <div class="text-8">
                    <span>Lorem Ipsum </span> <span>0158644245</span>
                </div>
                <hr>

            </div>
        </div>
    </div>