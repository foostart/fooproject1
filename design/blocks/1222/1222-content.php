<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1222">
    
            <div class="container clearfix margin-s">
                <div class="heading-block fancy-title  center ">
                    <h4>Case <span>performance</span></h4>
                </div>
                <!-- 住宅 -->
                <div class="nobottommargin clearfix ">
                    <div class="center clearfix ">
                        <h5>Residential space example</h5>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <ul class="aboutcase">
                            <li>Paris 16th District Residence</li>
                            <li>Chiyoda Lee Post</li>
                            <li>Sancha Four Seasons Li Gongguan</li>
                            <li>Four Seasons Hotel Xu Gongguan
                            </li>
                            <li>Yixian Road Jia Mansion</li>
                            <li>Renai Fengxiang Guan Mansion</li>
                            <li>Oriental Lichi Wu Gongguan</li>
                            <li>Yuan Qi Dazhen Lin Gong Guan</li>
                            <li>Anhe Road Chen Gongguan</li>
                            <li>Tianmu Xu Mansion</li>
                            <li>Itabashi Mai Residence</li>
                            <li>Tainan Gold Mansion</li>
                            <li>Zhongxiao East Road Du Gongguan</li>
                            <li>Glory Century Chen Gongguan</li>
                            <li>Guangfu South Road Chen Gongguan</li>
                            <li>Zhongshan North Road Guo Gongguan</li>
                            <li>Tangquan Kong Mansion</li>
                            <li>Waldorf Astoria House</li>
                            <li>Qingshan Town Residence</li>
                            <li>National Century Pavilion Dinggong</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <ul id="about2" class="aboutcase">
                            <li>Guoting Meng Gongguan</li>
                            <li>Linkou Double Oak Park Yang Gongguan Villa Case</li>
                            <li>Three Gorges Dingli Zhougong Mansion</li>
                            <li>Three Gorges Zhongyue You Mansion</li>
                            <li>Blue Ocean Zhang Gongguan</li>
                            <li>Farong Xiongfu Jiang Gongguan</li>
                            <li>Meihe City High Mansion</li>
                            <li>Tianmu Shitaoyuan Liugongguan</li>
                            <li>Banqiao Xinbancheng Jian Mansion</li>
                            <li>Tianmu Huanggong Villa Case</li>
                            <li>Lutheran Emperor Huaxia Mansion</li>
                            <li>Neihu Li Gongguan</li>
                            <li>Qingshan Town Lin Gongguan Villa Case</li>
                            <li>Taipei Renai Garden House Hotel</li>
                            <li>Ren Ai Lu Lu Gong Guan</li>
                            <li>Farglory Future City Yang Gongguan</li>
                            <li>Tianshun Liu Gongguan</li>
                            <li>Dunhua South Road Lin Gongguan</li>
                             

                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <ul class="aboutcase">
                            <li>Patek Fulin Pavilion</li>
                            <li>Taizang Taigao Mansion</li>
                            <li>Shangshan Ruosu Mansion</li>
                            <li>Meihe City Ji Gongguan</li>
                            <li>Oriental Pearl Tam Mansion
                            </li>
                            <li>Tianmu Yizhuang Zhang Gongguan</li>
                            <li>Head of State Cai Gongguan</li>
                            <li>Far Eastern Male Jazz Mansion</li>
                            <li>Shuilian Mountain Villa Residence</li>
                            <li>Renai Road Dibao Chen Mansion</li>
                            <li>Shishang Qingquan Xiao Gongguan</li>
                            <li>Inner Lake Zhang Gongguan Villa Case</li>
                            <li>Qingshan Town Wugongguan Villa Case</li>
                            <li>Yonghe Chen Mansion
                            </li>
                            <li>Shinsei South Road Mansion</li>
                            <li>Dome Century House Lee Residence</li>
                            <li>Neihu Zhenggongguan Villa Case</li>
                            <li>Emerald Villa Yang Mansion</li>
                            <li>Xintiandi Zhugongkan</li>
                            <li>Taichung Wang Gongguan Villa Case</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <ul class="aboutcase">
                            <li>Taichung Patek Philippe Fan House</li>
                            <li>Taoyuan Zhongyue Art Plaza Zhang Gongguan</li>
                            <li>Taoyuan Zhongyue Art Square Wang Gongguan</li>
                            <li>Vienna Garden Square Yellow Residence</li>
                            <li>Hainagawa Ho Mansion</li>
                            <li>Fenghe Hsinchu Zeng Mansion</li>
                            <li>Cultural Medal Jane Residence</li>
                            <li>Chambord Lai Mansion</li>
                            <li>Zhongzheng Guobao Lugong Mansion</li>
                            <li>Waldorf Astoria House</li>
                            <li>Xindu Lijiang Mansion</li>
                            <li>Lutheran Lufthansa Yellow House</li>
                            <li>Neihutan Mansion Villa Case</li>
                            <li>Hsinchu Chen Gongguan</li>
                            <li>Taoyuan Xu Gongguan Villa Case</li>
                            <li>Qingshan Town Yegongguan Villa Case</li>
                            <li>Beautiful Great Lake Lee Mansion</li>
                            <li>Taipei Light Point Chen Gongguan</li>
                            <li>Guan Feng Hua Wen Gong Guan</li>

                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
 