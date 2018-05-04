<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1231">
        <section id="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>SEARCH</h1>
                        <ol class="bread">
                            <li><a href="#">Home page</a></li>
                            <li>/</li>
                            <li><a href="#">Search Results</a></li>
                        </ol>
                    </div>
                </div>

            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="row pagesearch">
                        <nav>
                            <form class="sky-form nobottommargin">
                                <ul>
                                    <li>
                                        <label class="select">
                                            <select>
                                                <option>Select the color</option>
                                                <option>All</option>
                                                <option>White system</option>
                                                
                                                <option>Light color</option>
                                                
                                                <option>Gray system</option>
                                                
                                                <option>Dark color</option>
                                            </select>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="select">
                                            <select>
                                                <option>apartment number</option>
                                                 <option>All</option>                                              
                                                <option>small apartments(20)</option>
                                                                                                 
                                                <option>total(21-40)</option>
                                                                                                 
                                                <option>Daping (40)</option>
                                            </select>
                                            <i></i>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="input">
                                            <input placeholder="Enter keywords">
                                        </label>
                                    </li>
                                    <li>
                                        <a href="#"><img alt="#" src="<?php echo $url_path ?>/images/search-dark.png"></a>
                                    </li>
                                </ul>
                            </form>
                        </nav>
                        <div class="container">
                            <hr>
                            <div class="search">
                                <span>The following is a search result, total <span class="p1">275</span>information</span>
                            </div>
                            <hr>
                        </div>
                    
                    
                    </div>
            </div>
        </div>
</div>