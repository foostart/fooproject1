<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-271">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                <div class="vc_column-inner ">                                                         
                    <h2>
                        <small>STARTING AT $120 / NIGHT</small>SIGNATURE WATER VIEW
                    </h2>
                    <p>
                        <img class="aligncenter " src="<?php echo $url_path ?>/images/content-rooms-1.jpg" alt="Content rooms 1" >
                    </p>
                    <p>
                        Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae asd vero auctorem tractata ab fiducia dicuntur.
                    </p>
                    <p >
                        <a class="btn btn-inline" href="#">Book the Signature Water View Now</a>
                    </p>                                                        
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                <div class="vc_column-inner ">                        
                    <h2>
                        <small>STARTING AT $120 / NIGHT</small>SIGNATURE WATER SIDE
                    </h2>
                    <p>
                        <img class="aligncenter" src="<?php echo $url_path ?>/images/content-rooms.jpg" alt="Content rooms" >
                    </p>
                    <p>
                        Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae vero auctorem tractata ab fiducia dicuntur.
                    </p>
                    <p>
                        <a class="btn btn-inline" href="#">Book the Signature Water Side Now</a>
                    </p>                                  
                </div>
            </div>
        </div>
    </div>
</div>