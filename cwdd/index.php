<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/head/head.php'; ?>
        <link rel="stylesheet" type="text/css" href="/css/b4css/b4universal.css">
        <link rel="stylesheet" type="text/css" href="/css/b4css/home.css">
        <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
        <title>
            Home - Civil War Digital Digest
        </title>
        <script>
            $(document).ready(function() {
                $("#home-dropdown").addClass("highlight-tab");
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
            <div class="row" id="content-row">
                <aside class="col-12 col-md-2 justify-content-center" id="left-sidebar">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/sidebar/sidebar-ad.php'; ?>
                </aside>
                <div class="col-12 col-md-8" id="content">
                    <div class="row m-top">
                        <div class="col-12 center">
                            <h1 id="top-title">Welcome to the Civil War Digital Digest</h1>
                            <p>Civil War Digital Digest is your first stop for high quality videos on American Civil War era history and living history topics.
                                Avid living historians, relaxed armchair generals and teachers will find resources that both educate and entertain.
                            </p>
                        </div>
                    </div>
                    <div class="row m-bottom">
                        <div class="col-md-2 col-lg-3">
                            
                        </div>
                        <div class="col-12 col-md-8 col-lg-6 center no-padding">
                            <h2>Our Latest Episode</h2>
                            <div id="current-video-div" class="embed-responsive embed-responsive-16by9">
                                <iframe id="current-video" class="embed-responsive-item mx-auto" src="https://www.youtube.com/embed/QcvR2VErFJI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col-12">
                            <a href="http://civilwardigitaldigest.com/volumes/v6/v6-episodes.php" media="screen, handheld">
                                <img class="img-fluid menu-buttons" id="episodes-menu-button" src="/images/new-episodes-button.jpg" alt="episodes menu button">
                            </a>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col-12">
                            <a href="http://civilwardigitaldigest.com/pages/research/research-v6.php" media="screen, handheld">
                                <img class="img-fluid menu-buttons" id="research-menu-button" src="/images/new-research-button.jpg" alt="research menu button" >
                            </a>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col-12">
                            <a href="http://civilwardigitaldigest.com/pages/store.php" media="screen, handheld" target="_blank">
                                <img class="img-fluid menu-buttons" id="store-menu-button" src="/images/new-store-button.jpg" alt="store episodes menu button">
                            </a>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col-12">
                            <a href="http://civilwardigitaldigest.com/pages/support.php" media="screen, handheld">
                                <img class="img-fluid menu-buttons" id="support-menu-button" src="/images/new-support-button.jpg" alt="support menu button">
                            </a>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col-12">
                            <a href="http://civilwardigitaldigest.com/pages/communicate.php" media="screen, handheld">
                                <img class="img-fluid menu-buttons" id="communicate-menu-button" src="/images/new-communicate-button.jpg" alt="communicate menu button">
                            </a>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col-12">
                            <a href="http://civilwardigitaldigest.com/pages/links.php" media="screen, handheld">
                                <img class="img-fluid menu-buttons" id="links-menu-button" src="/images/new-links-button.jpg" alt="links menu button">
                            </a>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col-12">
                            <a href="https://historytunes.net" media="screen, handheld">
                                <img class="img-fluid menu-buttons" id="links-menu-button" src="/images/music.JPG" alt="History Tunes menu button">
                            </a>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col-12">
                            <a href="http://civilwardigitaldigest.com/holdmyhorse.php" media="screen, handheld">
                                <img class="img-fluid menu-buttons" id="links-menu-button" src="/images/movies-link.jpg" alt="History Tunes menu button">
                            </a>
                        </div>
                    </div>
                    <div class="row m-top">
                        <div class="col-md-2 col-lg-3">
                            
                        </div>
                        <div class="col-12 col-md-8 col-lg-6 center no-padding">
                            <h2>Our Introduction Episode</h2>
                            <div id="current-video-div" class="embed-responsive embed-responsive-16by9">
                                <iframe id="current-video" class="embed-responsive-item mx-auto" src="https://www.youtube.com/embed/XkTll5DyPbM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            
                        </div>
                    </div>
                    <div class="row m-bottom center">
                        <div class="col-12">
                            <a href="https://www.youtube.com/channel/UCR419HGD33ONzukp3c-WNPA/videos" media="screen, handheld" target="_blank">
                                <img src="/images/YouTube-logo-full_color.png" class="act img-fluid" id="youtube-logo" />
                            </a>
                        </div>
                    </div>
                </div>
                <aside class="col-12 col-md-2 justify-content-center" id="right-sidebar">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/sidebar/sidebar-ad.php'; ?>
                </aside>
            </div>
            <div class="row" id="footer-row">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/footer/b4-footer.php'; ?>
            </div>
        </div>
    </body>
</html>