<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Information -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <title>

            Contact Us

        </title>

        <!-- Bootstrap core CSS -->
        <link href="css/contact.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/docs.css" rel="stylesheet">
        
        <script type="text/javascript" src="js/ui.js" ></script>
        <!-- Documentation extras -->
        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

    </head>
    <body>
        

        <!-- Docs master nav -->
        <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">Vanguard Pro</a>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Scalable Projects</a>
                        </li>
                        <li>
                            <a href="#">Development</a>
                        </li>
                        <li>
                            <a href="#">Social Media</a>
                        </li>
                        <li class="active">
                            <a href="#">SEO</a>
                        </li>
                      
                      
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="contact.php" >Contact</a></li>
                        <li><a href="#" onclick="_gaq.push(['_trackEvent', 'Navbar', 'Community links', 'Blog']);">Blog</a></li>
                    </ul>
                </nav>
            </div>
        </header>

<?php                    
if (isset ($_POST['messageFF'])) {
  mail ("ppavelsp@gmail.com",
        "This email was sent from ".$_SERVER['HTTP_REFERER'],
        "Name: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nInquiry: ".$_POST['messageFF']);
  echo ('<p style="color: green">Your message was sent!</p>');
  $_POST['nameFF'] = $_POST['contactFF'] = $_POST['messageFF'] = '';
}
?>     
<!-- Docs page layout -->
        <div class="bs-docs-header" id="content">
            <div class="container">
                <h1>Contact Us</h1>
                <p>Bring Bootstrap's components to life with over a dozen custom jQuery plugins. Easily include them all, or one by one.</p>
                <div id="carbonads-container"><div class="carbonad"><div id="azcarbon"></div><script>var z = document.createElement("script");
                    z.async = true;
                    z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(z, s);</script></div></div>

            </div>
        </div>

        <div class="container bs-docs-container">

            <div class="row">
                <div class="col-md-9" role="main">
                    <!-- Overview
          ================================================== -->
                    <div class="bs-docs-section">
                        <h1 id="js-overview" class="page-header">Send Us A Message</h1>

                       <div class="gf_browser_gecko gform_wrapper frmLeaveMessage_wrapper" id="gform_wrapper_3">
                                <form method="post" enctype="multipart/form-data" id="gform_3" class="frmLeaveMessage">
                                   
                                    <div class="gform_body">
                                    
                                        <ul class="gform_fields">
                                            <li id="field_3_11" class="gfield left placeholder gfield_contains_required">
                                                <label class="gfield_label" for="input_3_11">Name<span class="gfield_required">*</span>
                                                </label>
                                                <div class="ginput_container">
                                                    <input name="nameFF" id="input_3_11" type="text" value="" class="medium required" tabindex="1" placeholder="Name" required>
                                                </div>
                                            </li>
                                            <li id="field_3_2" class="gfield right placeholder gfield_contains_required">
                                                <label class="gfield_label" for="input_3_2">Email<span class="gfield_required">*</span>
                                                </label>
                                                <div class="ginput_container">
                                                    <input name="contactFF" id="input_3_2" type="text" value="" class="medium required email" tabindex="2" placeholder="Email" required>
                                                </div>
                                            </li>
                                            <li id="field_3_9" class="gfield hideit gfield_html gfield_html_formatted gfield_no_follows_desc">

                                            </li>
                                        </ul>
                                        <ul class="gform_fields">
                                            <li id="field_3_7" class="gfield left">
                                                <label class="gfield_label" for="input_3_7">Interested in?</label>
                                                <div class="ginput_container">
                                                    <select multiple="multiple" size="7" name="input_7[]" id="input_3_7" class="medium gfield_select" tabindex="3" style="display: none;">
                                                        <option value="Website redesign">Website redesign</option>
                                                        <option value="Ecommerce">Ecommerce</option>
                                                        <option value="Startup">Startup</option>
                                                        <option value="Programming and technology">Programming and technology</option>
                                                        <option value="Application design or develoment">Application design or develoment</option>
                                                        <option value="User experience design">User experience design</option>
                                                        <option value="Online marketing (SEO, SEM, social media, etc.)">Online marketing (SEO, SEM, social media, etc.)</option>
                                                        <option value="Strategy and consulting">Strategy and consulting</option>
                                                        <option value="It's too complicated, just call me">It's too complicated, just call me</option>
                                                    </select>
                                                    <div class="dropdown-wrapper dropdown-select dropdown-select-multiple medium gfield_select dropdown-noselection" tabindex="3">
                                                        <a class="dropdown-button">
                                                            <span class="dropdown-status">Select</span>
                                                            <span class="dropdown-ico"></span>
                                                            <span class="dropdown-width-setter" style="width: 0px; display: block; height: 1px; overflow: hidden; visibility: hidden;"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="field_3_4" class="gfield right placeholder">
                                                <label class="gfield_label" for="input_3_4">Phone</label>
                                                <div class="ginput_container">
                                                    <input name="input_4" id="input_3_4" type="text" value="" class="medium" tabindex="4" placeholder="Phone">
                                                </div>
                                            </li>
                                            <li id="field_3_10" class="gfield hideit gfield_html gfield_html_formatted gfield_no_follows_desc">

                                            </li>
                                        </ul>
                                        <ul class="gform_fields">
                                            <li id="field_3_5" class="gfield placeholder">
                                                <label class="gfield_label" for="input_3_5">Message</label>
                                                <div class="ginput_container">
                                                    <textarea name="messageFF" id="input_3_5" class="textarea medium" tabindex="5" rows="10" cols="50" placeholder="Message" required></textarea>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gform_footer top_label">
                                        <button type="reset">Cancel</button>
                                        <button type="submit" id="" class="btn btn-outline btn-lg" tabindex="6" onclick="">
                                            <span>Submit</span>
                                        </button> 
                                    </div>
                                </form>
                            </div>
                            <script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [3, 1]) });</script>
                     
                    
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="sidebar " >

                       
                            <div class="widget-locations">
                                <div class="widget-header">
                                    <h3>Locations</h3></div>
                                <div class="widget-content"><ul class="locations"><li><a href="http://goo.gl/fmV1sy" onclick="javascript:_gaq.push(['_trackEvent', 'outbound-article', 'http://goo.gl']);" title="" class="location-map" target="_blank">
                                                <img src="assets/ico/ico-location.png" alt=""></a><p class="location-office">
                                                <strong>Ottawa, ON</strong> (headquarters)</p>
                                            <p class="location-address">1568 Merivale Road Suite 368<br> Nepean, ON K2G5Y7<br> Tel:  613.701.2443<br> Fax: 613.249.2436</p>
                                        </li><li>
                                            <a href="http://goo.gl/fsY3A3" onclick="javascript:_gaq.push(['_trackEvent', 'outbound-article', 'http://goo.gl']);" title="" class="location-map" target="_blank">
                                                <img src="assets/ico/ico-location.png" alt=""></a>
                                            <p class="location-office">
                                                <strong>Kharkov, Ukraine</strong> </p><p class="location-address">3 Industrialnaya St, Suite 1<br> Kharkiv, UA 61001<br>
                                                38.057.372.3999</p></li></ul>
                                    <div class="career-socials"> 

                                        <a href="#" target="_blank" title="">    
                                            <img src="images/icons/ico35-facebook.png" alt=""></a>
                                        <a href="#" target="_blank" title="">
                                            <img src="images/icons/ico35-linkedin.png" alt=""></a>

                                        <a href="#" target="_blank" title="">
                                            <img src="images/icons/ico35-twitter.png" alt="Follow Us"></a>

                                        <a href="mailto:consantine@vanguard-pro.com" title="">
                                            <img src="images/icons/ico35-mail.png" alt="Email Us"></a>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer
    ================================================== -->
        <footer class="bs-docs-footer" role="contentinfo"> 
            <div class="container">
                <div class="bs-docs-social">
                    <ul class="bs-docs-social-buttons">
                        <li>
                            <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=vanguardpro&repo=corporate-site&type=watch&count=true" width="100" height="20" title="Star on GitHub"></iframe>
                        </li>
                        <li>
                            <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=vanguardpro&repo=corporate-site&type=fork&count=true" width="102" height="20" title="Fork on GitHub"></iframe>
                        </li>
                        <li class="follow-btn">
                            <a href="https://twitter.com/webitadvisor" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @webitadvisor</a>
                        </li>
                        <li class="tweet-btn">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://vanguard-pro.com/" data-count="horizontal" data-via="webitadvisor" data-related="">Tweet</a>
                        </li>
                    </ul>
                </div>

 
                 <ul class="bs-docs-footer-links muted">
                    <li>Copyright &copy; Vanguard Pro Inc 2014</li>
                    <li>&middot;</li>
                    <li><a href="https://github.com/vanguardpro">GitHub</a></li>
                    <li>&middot;</li>
                    <li><a href="#">Examples</a></li>
                    <li>&middot;</li>
                    
                    <li>&middot;</li>
                    <li><a href="#">About</a></li>
                    <li>&middot;</li>
                    <li><a href="#">Clients</a></li>
                    <li>&middot;</li>
                    <li><a href="#">Blog</a></li>
                    <li>&middot;</li>
                 
                </ul>
            </div>
        </footer>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>

    </body>


</html>