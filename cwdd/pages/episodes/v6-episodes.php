<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/head/head.php'; ?>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/header/b4head.php'; ?>
        <link rel="stylesheet" type="text/css" href="/css/universal.css" >
        <link rel="stylesheet" type="text/css" href="/css/v6-episodes.css" >
        <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
        <title>
            Vol. 6 Episodes - Civil War Digital Digest
        </title>
        <style>
        </style>
        <script>
            $(document).ready(function() {
                $("#episodes-dropdown").addClass("highlight-tab");
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
                            <h2 class="center">Episodes, Vol. VI</h2>
                            <h4 class="center">Click on the image to view the episode</h4>
                            <br>
                        </div>
                    </div>
                    <div class="row episodes-row">
                        <div class="col-12 align-content-center episodes-col">
                            <div class="wrapper">
                                <div class="episode-div" id="v6e1-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-one-pop">Episode 1<br>Lucretia Gillett, Photographer
                                        <span class="popuptext" id="episode-one-slugline">Lucretia Gillett, Photographer</span>
                                    </p>
                                    <a href="https://www.youtube.com/watch?v=fXvpJR2ZTGw" target="_blank">
                                        <img class="episode-pic" src="/images/v6-episodes/v6e1.jpg" alt="Civil War Digital Digest Vol.6 Episode 1" id="v6e1">
                                    </a>
                                </div>
                                <div class="episode-div middle-col" id="v6e2-div">
                                    <p class="popup episode-title" onclick="popup()" id="episode-two-pop">Episode 2<br>Sword & Saber Nomenclature
                                        <span class="popuptext" id="episode-two-slugline">Learn Sword & Saber Nomenclature</span>
                                    </p>
                                    <a href="https://www.youtube.com/watch?v=wZfqqGlb6mA" target="_blank">
                                        <img class="episode-pic" src="/images/v6-episodes/v6e2.jpg" alt="Civil War Digital Digest Vol.6 Episode 2" id="v6e2">
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row" id="4-6-row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            
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