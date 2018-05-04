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
          <h4>  WORK <span> FLOW</span> </h4>
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
                <h3>BUSINESS NEGOTIATIONS</h3>
                <p>Understand the owner's needs.
                    <br><strong>Residential</strong> family population,  equipment and furniture usage, schedules, etc. 
                    <br><strong>Office</strong>  estimates of growth in the next three to five years, project budgets, schedules, etc. 
                    <br><strong>The business space </strong>,business nature,  understanding of the object of appeal ... and so on.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                  <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >2</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>SITE SURVEY</h3>
                    <p>Understand the surrounding environment of the construction site and make detailed surveys, and photograph and archive as a reference for the design.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                 <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >3</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>PLAN FINALIZATION</h3>
                    <p>For initial planning, action lines, etc., we must first obtain the necessary identification and design the outline.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >4</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>DRAFT BRIEFING</h3>
                    <p>For initial planning, action lines, etc., we must first obtain the necessary identification and design the outline.</p>
                </div>
                <div class="divider divider-center"><i > . </i>
                </div>
            </div>
            <!--dong2-->
             <div class="col-md-6 col-sm-6 col-xs-12 bad">
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >5</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>SIGN A DESIGN CONTRACT</h3>
                    <p>If the landlord is satisfied with the draft provided that further discussion is necessary, the two parties sign a “design contract” so that we can provide more detailed services and make necessary corrections and various detailed designs for the case.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>

                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >6</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>DESIGN FINALIZATION</h3>
                    <p>
                    According to the design draft, make necessary amendments.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >7</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>DETAIL DESIGN</h3>
                    <p>According to the design of the final case, the necessary detailed construction drawings and descriptions were completed, and the project valuation and schedule were compiled.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >8</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>SIGNED ENGINEERING CONTRACT</h3>
                    <p>The description of the project's enlistment: The company will fully obtain the trust of the owners and obtain the right to contract the project at a reasonable price. In order to grasp the quality of all aspects of engineering and to obtain the best interpretation of the details of the design concept.</p>
                </div>
                <div class="divider divider-center"><i > . </i></div>
                <div class="col-md-4 col-sm-4 col-xs-4 bod">
                    <div class="fbox-icon">
                        <a href="#"><i >9</i></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <h3>CONSTRUCTION
                        <br>
                        COMPLETION ACCEPTANCE AND DELIVERY
                    CLOSE THE CASE</h3>
                </div>
                <div class="divider divider-center"><i > . </i></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>