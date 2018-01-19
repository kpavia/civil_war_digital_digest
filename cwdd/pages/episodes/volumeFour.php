<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/v4-episodes-sheet.css" >
        <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="/javascript/slug-line-popup.js"></script>
        <title>
            Civil War Digital Digest - Episodes Vol. III
        </title>
        <script>
            $(document).ready(function() {
            
                $("#episodes-dropdown").addClass("active");
            
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
        
    </head> 
    <body>
        <header>
            <div class="container-fluid" >
                <img src="/images/cwddBanner.jpg" class="img-responsive" id="banner-img">
            </div>
        </header>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/nav/nav-bar.php'; ?>
        <div class="container-fluid text-center">
            <div class="row content" id="content-ads-holding-div">
                <aside class="col-sm-2 sidenav" id="left-side-aside">
                    
                <!-- Responsive Adsense -->
                    
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    
                    <!-- CWDD responsive -->
                    
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-5786123947739131"
                            data-ad-slot="6275650007"
                            data-ad-format="auto"> 
                        </ins>
                    
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>  
                </aside>
                <section class="col-sm-8 text-left" id="main-content-section">
                    <h1>Civil War Digital Digest</h1>
                    <h2>Episodes</h2>
                    <br>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/episodes/volumeOne.php" id="v1-top-link">To Volume I Episodes</a>
                    </p>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/episodes/volumeTwo.php" id="v2-top-link">To Volume II Episodes</a>
                    </p>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/episodes/volumeThree.php" id="v3-top-link">To Volume III Episodes</a>
                    </p>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/research/research-v4.php" id="v4-research-top-link">To Volume IV Research</a>
                    </p>
                    <br>
                    <h3>Volume IV</h3>
                    <p>Click on the image to view the episode.</p>
                    <br>
                    <div class="container-fluid episodes" id="episodes-div">
                        
                        <div class="container-fluid episode-div" id="v4e1-div">
                            <p class="popup" onclick="popup()" id="episode-one-pop">Episode 1<br> Musket Nomenclature
                                <span class="popuptext" id="episode-one-slugline">Learn Musket Terminology</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=cF9nnAmy08g" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e1.jpg" alt="Civil War Digital Digest Vol.4 Episode 1" id="v4e1">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e2-div">
                            <p class="popup" onclick="popup()" id="episode-two-pop">Episode 2<br> Frederick Schultz
                                <span class="popuptext" id="episode-two-slugline">Story of a veteran of Andersonville</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=ZTTvl-f10Pc" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e2.jpg" alt="Civil War Digital Digest Vol.4 Episode 2" id="v4e2">
                            </a>
                        </div>
                        
                        
                    </div>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/episodes/volumeOne.php">To Volume I Episodes</a>
                    </p>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/episodes/volumeTwo.php">To Volume II Episodes</a>
                    </p>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/episodes/volumeThree.php">To Volume III Episodes</a>
                    </p>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/research/research-v4.php">To Volume IV Research</a>
                    </p>
                </section>
                <aside class="col-sm-2 sidenav" id="right-side-aside">
                    
                    <!-- Responsive Adsense -->
                    
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    
                    <!-- CWDD responsive -->
                    
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-5786123947739131"
                            data-ad-slot="6275650007"
                            data-ad-format="auto"> 
                        </ins>
                    
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>   
                        
                </aside>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/footer/footer.php'; ?>  
        </footer>
    </body>
</html>