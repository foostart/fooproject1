<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1223">
	<div class="onlineSupport">
		<div class="container text-center center">
				<a href="#" class="Button">  TƯ VẤN TRỰC TUYẾN </a>
				<span>Để được hỗ trợ đầy đủ nhất, xin vui lòng điền đầy đủ thông tin vào phiếu sau.</span>
		</div>
	</div>

	<div class="clearfix">
		
	</div>
<div class="footer">
	  <div class="container">
       <div class="row">
			<div class="col-md-8">
			      <div class="col-md-2 col-sm-4 col-xs-12">
			      		<div class="widget clearfix">
			      			<h5> GIỚI THIỆU CÔNG TY</h5>
			     			<ul> 
			     				<li><a href="#" >Về chúng tôi. </a></li>
			     				<li><a href="#" >Liên hệ với chúng tôi. </a></li>
			     			</ul>
			      		</div>
			      </div>
			       <div class="col-md-2 col-sm-4 col-xs-12 ">
			      		<div class="widget clearfix">
			      			<h5> DỊCH VỤ </h5>
			     			<ul>
			     				<li><a href="#" >Thiết kế bản vẽ. </a></li>
			     				<li><a href="#" >Thi công công trình. </a></li>
			     				<li><a href="#" >Tư vấn nhà đất. </a></li>
			     			</ul>
			      		</div>
			      </div>
			       <div class="col-md-2 col-sm-4 col-xs-12 ">
			      		<div class="widget clearfix">
			      			<h5> THIẾT KẾ MẪU</h5>
			     			<ul>
			     				<li><a href="#" >Nhà cấp 4.</a></li>
			     				<li><a href="#" >Nhà 2 tầng. </a></li>
			     				<li><a href="#" >Văn phòng phẩm.</a></li>
			     				<li><a href="#" >...</a></li>
			     				
			     			</ul>
			      		</div>
			      </div>
			       <div class="col-md-2 col-sm-4 col-xs-12 ">
			      		<div class="widget clearfix">
			      			<h5>DỊCH VỤ KHÁCH HÀNG</h5>
			     			<ul>
			     				<li><a href="#" >Tư vấn trực tuy</a></li>
			     				<li><a href="#" >Hỗ trợ khách hàng.</a></li>
			     			</ul>
			      		</div>
			      </div>
			       <div class="col-md-3 col-sm-4 col-xs-12 ">
			      		<div class="widget clearfix">
			      			<h5> ĐỐI TÁC THƯƠNG MẠI</h5>
			     			<ul>
			     				<li><a href="#" >Công Ty Hòn Ngọc</a></li>
			     				<li><a href="#" >Công Ty Viễn Đông</a></li>
			     			
			     			</ul>
			      		</div>
			      </div>
			</div>

			<div class="col-md-4">
				
			       <div class="fb-page" data-href="https://www.facebook.com/Fullhouseinteriordesign/" data-tabs="timeline" data-width="345" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Fullhouseinteriordesign/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Fullhouseinteriordesign/">成舍設計</a></blockquote></div>
			    </div>
		         	
       </div>
    </div>
</div>
  
</div>