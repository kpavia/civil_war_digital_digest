<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/head/head.php'; ?>
        <link rel="stylesheet" type="text/css" href="/css/b4css/b4universal.css" >
        <link rel="stylesheet" type="text/css" href="/css/b4css/b4patreon-intro.css" >
        <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
        <title>
            Patreon Supporters
        </title>
        <script>
            $(document).ready(function() {
                $("#support-dropdown").addClass("highlight-tab");
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
            <div class="row" id="nav-row">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/nav/b4-nav-bar.php'; ?>
            </div>
            <div class="row" id="content-row">
                <aside class="col-md-2 col-lg-2 justify-content-center" id="left-sidebar">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/sidebar/sidebar-ad.php'; ?>
                </aside>
                <div class="col-md-8 col-lg-8" id="content">
                    <div class="row">
                        <div class="col-12 center">
                            <h1 id="header-title">Civil War Digital Digest</h1>
                            <h2>Become a Patreon CWDD Coffee Grinder</h2>
                            <img class="img-fluid" src="/images/eagle.jpg" alt="eagle" />
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 center">
                            <p>
                                This video is available to our Patrons only.<br>
                                As a group, they are called the CWDD Coffee Grinders and their support helps historic preservation as well as our efforts here.<br>
                                We'd love to have you consider joining the CWDD Coffee Grinders!<br>
                                You will get access to all premium videos, as well as other awards based on your level of support.<br>
                                Click <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">here</a> to learn more!
                            </p>
                            <iframe id="video" src="https://www.youtube.com/embed/cOd42RRdkHE" frameborder="0" allowfullscreen></iframe>
                            <br>
                            <a href="https://www.patreon.com/civilwardigitaldigest/" target="_blank">
                                <img src="/images/patreon-logo.png" class="img-fluid" id="patreon-logo"/>
                            </a>
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