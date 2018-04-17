<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1221">
    <div class="container">
        <div class="row">
            <div class="title"> 
                <h4>
                    <span>CHARGE </span>
                    <span class="standard">STANDARD</span>
                </h4>
            </div>
            <div class="text"> 
                <p>Providing high-quality, high-level professional design is a service concept. The following are our basic fee standards. They are for reference only and will be adjusted depending on the circumstances of the case (such as: the number of changes, delays in the operation period, etc.)</p>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            <p>Project</p>
                        </th>
                        <th>
                            <p>Estimated unit price per construction</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Residential</p>                          
                        </td>
                        <td>
                            <p>30000~50000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p> High-grade residential</p>
                        </td>
                        <td>
                            <p>50000~100000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Office</p>
                        </td>
                        <td>
                            <p>10000~30000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Senior Office</p>
                        </td>
                        <td>
                            <p>30000~50000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Commercial space</p>
                        </td>
                        <td>
                            <p>Depending on the case</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Design fee</p>
                        </td>
                        <td>
                            <p>Calculated at 5% to 10% of the total engineering cost</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p>Note: The valuation of each case will detail the details of unit price, size, material, etc</p>
        </div>
    </div>
</div>