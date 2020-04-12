<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/head/head.php'; ?>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/header/b4head.php'; ?>
        <link rel="stylesheet" type="text/css" href="/css/b4css/b4universal.css" >
        <link rel="stylesheet" type="text/css" href="/css/premium.css" >
        <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
        <title>
            Premium Patreon Content
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
        <!-- <script src="/javascript/slug-line-popup.js"></script> -->
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
                            <h2 class="center">Premium Patreon Content</h2>
                            <h4 class="center">Click on the image to view the episode</h4>
                            <br>
                        </div>
                    </div>
                    <div class="row episodes-row">
                        <div class="col-12 align-content-center episodes-col">
                            <div class="wrapper">
                                <div class="episode-div" id="pce1-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-one-pop">Edward Cunningham<br>19th Maine Biography
                                        <span class="popuptext" id="episode-one-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/1.v3e4.jpg" alt="Civil War Digital Digest Premium Content Episode 1" id="pce1">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce2-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-two-pop">Commutation<br>System Overview
                                        <span class="popuptext" id="episode-two-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/2.v3e5.jpg" alt="Civil War Digital Digest Premium Content Episode 2" id="pce2">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce3-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-three-pop">Soldier's Games<br>Humorous Story
                                        <span class="popuptext" id="episode-three-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/3.v3e8.jpg" alt="Civil War Digital Digest Premium Content Episode 3" id="pce3">
                                    </a>
                                </div>
                                
                                <div class="episode-div" id="pce4-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-four-pop">Look at an Original<br>Cartridge Box
                                        <span class="popuptext" id="episode-four-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/vol_three_episodes/v3e15.jpg" alt="Civil War Digital Digest Premium Content Episode 4" id="pce4">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce5-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-five-pop">In-Depth Look at<br>One Original Wrapper
                                        <span class="popuptext" id="episode-five-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/5.v3e13.jpg" alt="Civil War Digital Digest Premium Content Episode 5" id="pce5">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce6-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-six-pop">William Gilham<br>Biography
                                        <span class="popuptext" id="episode-six-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/6.v3e11.jpg" alt="Civil War Digital Digest Premium Content Episode 6" id="pce6">
                                    </a>
                                </div>
                                
                                <div class="episode-div" id="pce7-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-seven-pop">Fred Schultz<br>Deleted Scene
                                        <span class="popuptext" id="episode-seven-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/7.v4e2.jpg" alt="Civil War Digital Digest Premium Content Episode 7" id="pce7">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce8-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-eight-pop">Attaching the <br>Whitworth Scope
                                        <span class="popuptext" id="episode-eight-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/8.v4e6.jpg" alt="Civil War Digital Digest Premium Content Episode 8" id="pce8">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce9-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-nine-pop">Why Pork?<br>Outtakes
                                        <span class="popuptext" id="episode-nine-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/9.v4e10.jpg" alt="Civil War Digital Digest Premium Content Episode 9" id="pce9">
                                    </a>
                                </div>
                                
                                <div class="episode-div" id="pce10-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-ten-pop">Deleted Scene<br>Dry Cure Pork
                                        <span class="popuptext" id="episode-ten-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/10.v4e11.jpg" alt="Civil War Digital Digest Premium Content Episode 10" id="pce10">
                                    </a>
                                </div>
                                
                                <div class="episode-div" id="pce11-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-eleven-pop">Deleted Scene<br>Cold Rooms
                                        <span class="popuptext" id="episode-eleven-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/11.v4e20.jpg" alt="Civil War Digital Digest Premium Content Episode 11" id="pce11">
                                    </a>
                                </div>
                                
                                <div class="episode-div" id="pce12-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-twelve-pop">73rd OVI Band<br>Maryland, My Maryland
                                        <span class="popuptext" id="episode-twelve-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/12.v5e9maryland.jpg" alt="Civil War Digital Digest Premium Content Episode 12" id="pce12">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce13-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-thirteen-pop">73rd OVI Band<br>Red, White, & Blue
                                        <span class="popuptext" id="episode-thirteen-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/13.v5e9red.jpg" alt="Civil War Digital Digest Premium Content Episode 13" id="pce13">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce14-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-fourteen-pop">Why "Sample Room"<br>is Premium Content
                                        <span class="popuptext" id="episode-fourteen-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/14.sample-whiskey-punch.jpg" alt="Civil War Digital Digest Premium Content Episode 14" id="pce14">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce15-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-fifteen-pop">Sample Room<br>Whiskey Punch #9
                                        <span class="popuptext" id="episode-fifteen-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/15.sample-punch.jpg" alt="Civil War Digital Digest Premium Content Episode 15" id="pce15">
                                    </a>
                                </div>
                                
                                <div class="episode-div" id="pce16-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-sixteen-pop">Sample Room Philadelphia<br>Fish House Punch #46
                                        <span class="popuptext" id="episode-sixteen-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/16.sample-fish-punch.jpg" alt="Civil War Digital Digest Premium Content Episode 16" id="pce16">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce17-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-seventeen-pop">Potato Soup<br>Modern Thoughts
                                        <span class="popuptext" id="episode-seventeen-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/17.v5e21.jpg" alt="Civil War Digital Digest Premium Content Episode 17" id="pce17">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce18-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-eighteen-pop">Sample Room<br>Hot Milk Punch #23
                                        <span class="popuptext" id="episode-eighteen-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/18.sample-milk.jpg" alt="Civil War Digital Digest Premium Content Episode 18" id="pce18">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce19-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-nineteen-pop">Gilham's<br>Northern Connections
                                        <span class="popuptext" id="episode-nineteen-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/19.gilhams-connections.jpg" alt="Civil War Digital Digest Premium Content Episode 19" id="pce19">
                                    </a>
                                </div>
                                <div class="episode-div" id="pce20-div" >
                                    <p class="popup episode-title" onclick="popup()" id="episode-twenty-pop">US Tools<br>Deleted Scene
                                        <span class="popuptext" id="episode-twenty-slugline"></span>
                                    </p>
                                    <a href="https://www.patreon.com/civilwardigitaldigest" target="_blank">
                                        <img class="episode-pic" src="/images/premium/20.v6e7.jpg" alt="Civil War Digital Digest Premium Content Episode 20" id="pce20">
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