<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/head/head.php'; ?>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/header/b4head.php'; ?>
        <link rel="stylesheet" type="text/css" href="/css/universal.css" >
        <link rel="stylesheet" type="text/css" href="/css/v6-research.css" >
        <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
        <title>
            Vol. 6 Research - Civil War Digital Digest
        </title>
        <style>
        </style>
        <script>
            $(document).ready(function() {
                $("#research-dropdown").addClass("highlight-tab");
            }); //end ready function
        </script>
        <!-- Google Analytics Code -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-81785309-2', 'auto');
            ga('send', 'pageview');

        </script>
        <script src="/javascript/slug-line-popup.js"></script>
        <script src="/javascript/navbar-mousing.js"></script>
        <link rel="icon" href="data:;base64,iVBORwOKGO=" />
    </head> 
    <body>
        <div id="main-container" class="container-fluid">
            <div class="row" id="header-row">
                <header id="header" class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="/images/cwddBanner.jpg" id="logo" class="img-fluid mx-auto d-block">
                </header>
            </div>
            <div class="row" id="nav-row">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/nav/b4-nav-bar.php'; ?>
            </div>
            <div class="row" id="content-row">
                <aside class="col-md-2 col-lg-2 justify-content-center" id="left-sidebar">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/sidebar/sidebar-ad.php'; ?>
                </aside>
                <div class="col-md-8 col-lg-8" id="content">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="center" id="header-title">Civil War Digital Digest</h1>
                            <h2 class="center">Research, Vol. VI</h2>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 center">
                            <h3>
                                <a href="http://civilwardigitaldigest.com/pages/episodes/v6-episodes.php">
                                    Vol. VI Episodes
                                </a>
                            </h3>
                        </div>
                    </div>
                    <br>
                    <div class="row episodes-row">
                        <div class="col-12 align-content-center episodes-col">
                            <h4 class="center">
                                <a href="#episode-two" data-toggle="collapse" class="research-collapsibles">Episode 2<br>Sword & Saber Nomenclature</a>
                            </h4>
                            <div id="episode-two" class="collapse center">
                                <p>US 1862 Ordnance Manual</p>
                                <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" 
                                        src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=allmiccivwar-20&marketplace=amazon&region=US&placement=B00LCEKTIG&asins=B00LCEKTIG&linkId=95fe35908a42a31b935575e259c5e321&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row episodes-row">
                        <div class="col-12 align-content-center episodes-col">
                            <h4 class="center">
                                <a href="#episode-six" data-toggle="collapse" class="research-collapsibles">Episode 6<br>Online Research</a>
                            </h4>
                            <div id="episode-six" class="collapse center">
                                <p class="heading">Archive.org</p>
                                <p class="link-size">
                                    <a href="https://archive.org/details/volunteerunitsunion" target="_blank">
                                        Compiled Records of Union Volunteer Military Units
                                    </a>
                                </p>
                                <p class="link-size">
                                    <a href="https://archive.org/details/volunteerunitsconfederate" target="_blank">
                                        Compiled Records of Confederate Volunteer Military Units
                                    </a>
                                </p>
                                <br>
                                <p class="heading">Official Records</p>
                                <p class="link-size">
                                    <a href="http://collections.library.cornell.edu/moa_new/waro.html" target="_blank">
                                        Cornell University Library: Making of America
                                    </a>
                                </p>
                                <p class="link-size">
                                    <a href="https://ehistory.osu.edu/books/official-records/index" target="_blank">
                                        Ohio State University eLibrary
                                    </a>
                                </p>
                                <br>
                                <p class="heading">
                                    <a href="https://www.loc.gov/pictures/collection/cwp/" target="_blank">
                                        Library of Congress Civil War Photos
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-md-2 col-lg-2 justify-content-center" id="right-sidebar">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/sidebar/sidebar-ad.php'; ?>
                </aside>
            </div>
            <div class="row" id="footer-row">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/footer/b4-footer.php'; ?>
            </div>
        </div>
    </body>
</html>