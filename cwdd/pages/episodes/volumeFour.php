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
        <script src="/javascript/slug-line-popup.js"></script>
    </head> 
    <body>
        <header>
            <div class="container-fluid" >
                <img src="/images/cwddBanner.jpg" class="img-responsive" id="banner-img">
            </div>
        </header>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/nav/nav-bar.php'; ?>
        <div class="container-fluid text-center" id="top-parent-div">
            <div class="row content" id="content-ads-holding-div">
                <aside class="col-sm-2 sidenav" id="left-side-aside">
                    
                <!-- Responsive Adsense
                    
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-5786123947739131"
                            data-ad-slot="6275650007"
                            data-ad-format="auto"> 
                        </ins>
                    
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>  
                -->
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
                        <div class="container-fluid episode-div" id="v4e2a-div">
                            <p class="popup" onclick="popup()" id="episode-twoa-pop">Episode 2a<br> An Original Cartridge Box
                                <span class="popuptext" id="episode-twoa-slugline">Examine an original cartridge box</span>
                            </p>
                            <a href="http://civilwardigitaldigest.com/pages/patreon-intro.php" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/patreon_extras/v4e2a.jpg" 
                                     alt="Civil War Digital Digest Vol.4 Episode 2a" id="v4e2a">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e3-div">
                            <p class="popup" onclick="popup()" id="episode-three-pop">Episode 3<br>Block Dominoes
                                <span class="popuptext" id="episode-three-slugline">Block Dominoes</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=silh_E8d04M" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e3.jpg" alt="Civil War Digital Digest Vol.4 Episode 3" id="v4e3">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e4-div">
                            <p class="popup" onclick="popup()" id="episode-four-pop">Episode 4<br>Modified Sleeves
                                <span class="popuptext" id="episode-four-slugline">Modified women’s sleeve type </span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=i1CtMFZfJx8" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e4.jpg" alt="Civil War Digital Digest Vol.4 Episode 4" id="v4e4">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e5-div">
                            <p class="popup" onclick="popup()" id="episode-five-pop">Episode 5<br>Reverse Arms
                                <span class="popuptext" id="episode-five-slugline">Reverse Arms</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=-hq0V25pcyw" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e5.jpg" alt="Civil War Digital Digest Vol.4 Episode 5" id="v4e5">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e6-div">
                            <p class="popup" onclick="popup()" id="episode-six-pop">Episode 6<br>Sharpshooter Weapons
                                <span class="popuptext" id="episode-six-slugline">Weapons of the Sharpshooters</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=sLQm3f-a-kw" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e6.jpg" alt="Civil War Digital Digest Vol.4 Episode 6" id="v4e6">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e6a-div">
                            <p class="popup" onclick="popup()" id="episode-sixa-pop">Episode 6a<br> Whitworth Rifle
                                <span class="popuptext" id="episode-sixa-slugline">A closer look at a sharpshooter rifle</span>
                            </p>
                            <a href="http://civilwardigitaldigest.com/pages/patreon-intro.php" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/patreon_extras/v4e6a.jpg" 
                                     alt="Civil War Digital Digest Vol.4 Episode 6a" id="v4e6a">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e7-div">
                            <p class="popup" onclick="popup()" id="episode-seven-pop">Episode 7<br>Fry Meat & Gravy
                                <span class="popuptext" id="episode-seven-slugline">Fry Meat & Gravy</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=j5_6BFw31RM" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e7.jpg" alt="Civil War Digital Digest Vol.4 Episode 7" id="v4e7">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e8-div">
                            <p class="popup" onclick="popup()" id="episode-eight-pop">Episode 8<br>Griddle Cakes
                                <span class="popuptext" id="episode-eight-slugline">Griddle cakes are prepared</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=sEs4HNikqx4" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e8.jpg" alt="Civil War Digital Digest Vol.4 Episode 8" id="v4e8">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e9-div">
                            <p class="popup" onclick="popup()" id="episode-nine-pop">Episode 9<br>Rest on Arms
                                <span class="popuptext" id="episode-nine-slugline">How to Rest On Arms</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=EJ2ffx_n1cw" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e9.jpg" alt="Civil War Digital Digest Vol.4 Episode 9" id="v4e9">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e10-div">
                            <p class="popup" onclick="popup()" id="episode-ten-pop">Episode 10<br>Why Pork?
                                <span class="popuptext" id="episode-ten-slugline">Why pork was essential in the era</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=6GubMOXAYjw" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e10.jpg" alt="Civil War Digital Digest Vol.4 Episode 10" id="v4e10">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e10a-div">
                            <p class="popup" onclick="popup()" id="episode-tena-pop">Episode 10a<br> Why Pork Outtake
                                <span class="popuptext" id="episode-tena-slugline">Outtake from shooting Why Pork episode </span>
                            </p>
                            <a href="http://civilwardigitaldigest.com/pages/patreon-intro.php" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/patreon_extras/v4e10a.jpg" 
                                     alt="Civil War Digital Digest Vol.4 Episode 10a" id="v4e10a">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e11-div">
                            <p class="popup" onclick="popup()" id="episode-eleven-pop">Episode 11<br>Dry Cure Bacon
                                <span class="popuptext" id="episode-eleven-slugline">How Pork was Dry Cured</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=r16iFy1Ekv0" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e11.jpg" alt="Civil War Digital Digest Vol.4 Episode 11" id="v4e11">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e11a-div">
                            <p class="popup" onclick="popup()" id="episode-elevena-pop">Episode 11a<br> Dry Cure Deleted Scene 
                                <span class="popuptext" id="episode-elevena-slugline">Learn pork processing terminology</span>
                            </p>
                            <a href="http://civilwardigitaldigest.com/pages/patreon-intro.php" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/patreon_extras/v4e11a.jpg" 
                                     alt="Civil War Digital Digest Vol.4 Episode 11a" id="v4e11a">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e12-div">
                            <p class="popup" onclick="popup()" id="episode-twelve-pop">Episode 12<br>Womens' Short Sleeves
                                <span class="popuptext" id="episode-twelve-slugline">Women’s Short Sleeves</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=clBOmHDkg9o" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e12.jpg" alt="Civil War Digital Digest Vol.4 Episode 12" id="v4e12">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e13-div">
                            <p class="popup" onclick="popup()" id="episode-thirteen-pop">Episode 13<br>1816 Conversions
                                <span class="popuptext" id="episode-thirteen-slugline">Exploring 1816 Conversions </span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=F8Uarajchyo&t=258s" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e13.jpg" alt="Civil War Digital Digest Vol.4 Episode 13" id="v4e13">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e14-div">
                            <p class="popup" onclick="popup()" id="episode-fourteen-pop">Episode 14<br>An Iron Brigade Mystery
                                <span class="popuptext" id="episode-fourteen-slugline">Research on the Iron Brigade</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=jWk8ssFsCmo" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e14.jpg" alt="Civil War Digital Digest Vol.4 Episode 14" id="v4e14">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e15-div">
                            <p class="popup" onclick="popup()" id="episode-fifteen-pop">Episode 15<br>Cucumbers
                                <span class="popuptext" id="episode-fifteen-slugline">A quick cucumber recipe</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=0bjaVO2QuMk" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e15.jpg" alt="Civil War Digital Digest Vol.4 Episode 15" id="v4e15">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e16-div">
                            <p class="popup" onclick="popup()" id="episode-sixteen-pop">Episode 16<br>Casey's Stack
                                <span class="popuptext" id="episode-sixteen-slugline">Teaching Stack Arms</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=J0RGd_Iylc4" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e16.jpg" alt="Civil War Digital Digest Vol.4 Episode 16" id="v4e16">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e16a-div">
                            <p class="popup" onclick="popup()" id="episode-sixteena-pop">Episode 16a<br>Drawing Rammers
                                <span class="popuptext" id="episode-sixteena-slugline">Draw Rammers Patch</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=iObR3b8hDCI" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e16a.jpg" alt="Civil War Digital Digest Vol.4 Episode 16a" id="v4e16a">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e17-div">
                            <p class="popup" onclick="popup()" id="episode-seventeen-pop">Episode 17<br>Tomato Cakes
                                <span class="popuptext" id="episode-seventeen-slugline">Tomato Griddle Cakes Prepared</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=Q-miyflIXo8" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e17.jpg" alt="Civil War Digital Digest Vol.4 Episode 17" id="v4e17">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e18-div">
                            <p class="popup" onclick="popup()" id="episode-eighteen-pop">Episode 18<br>All Fours
                                <span class="popuptext" id="episode-eighteen-slugline">Learn All Fours or Old Sledge</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=kJ1DAmlMVRM" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e18.jpg" alt="Civil War Digital Digest Vol.4 Episode 18" id="v4e18">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e19-div">
                            <p class="popup" onclick="popup()" id="episode-nineteen-pop">Episode 19<br>Hudson Museum
                                <span class="popuptext" id="episode-nineteen-slugline">Visit a local museum filled with Civil War artifacts</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=YhSS9vRwZPA" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e19.jpg" alt="Civil War Digital Digest Vol.4 Episode 19" id="v4e19">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e20-div">
                            <p class="popup" onclick="popup()" id="episode-twenty-pop">Episode 20<br>Cold Rooms
                                <span class="popuptext" id="episode-twenty-slugline">Cold Room</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=vVu0qUTlN54" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e20.jpg" alt="Civil War Digital Digest Vol.4 Episode 20" id="v4e20">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e20a-div">
                            <p class="popup" onclick="popup()" id="episode-twentya-pop">Episode 20a<br>Cold Room Deleted Scene
                                <span class="popuptext" id="episode-twentya-slugline">Cold Room</span>
                            </p>
                            <a href="http://civilwardigitaldigest.com/pages/patreon-intro.php" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/patreon_extras/v4e20a.jpg" 
                                     alt="Civil War Digital Digest Vol.4 Episode 20a" id="v4e20a">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e21-div">
                            <p class="popup" onclick="popup()" id="episode-twentyone-pop">Episode 21<br>Rice Pudding
                                <span class="popuptext" id="episode-twentyone-slugline">Rice Pudding in the Field </span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=IiVjF4O7kHs" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e21.jpg" alt="Civil War Digital Digest Vol.4 Episode 21" id="v4e21">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e22-div">
                            <p class="popup" onclick="popup()" id="episode-twentytwo-pop">Episode 22<br>Five-Card Cribbage
                                <span class="popuptext" id="episode-twentytwo-slugline">Learn Civil War Cribbage</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=subxhTL1lSE" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e22.jpg" alt="Civil War Digital Digest Vol.4 Episode 22" id="v4e22">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e23-div">
                            <p class="popup" onclick="popup()" id="episode-twentythree-pop">Episode 23<br>Fried Beef Steaks
                                <span class="popuptext" id="episode-twentythree-slugline">Preparing Fried Beef Steaks</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=2wXOtbYG7UU&t=2s" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e23.jpg" alt="Civil War Digital Digest Vol.4 Episode 23" id="v4e23">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e24-div">
                            <p class="popup" onclick="popup()" id="episode-twentyfour-pop">Episode 24<br>
                                <span id="smaller-title">HH Bennett-Carpenter, Soldier, Photographer</span>
                                <span class="popuptext" id="episode-twentyfour-slugline">Story of a Civil War Vet turned photographer</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=mCYNfzkMogM" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e24.jpg" alt="Civil War Digital Digest Vol.4 Episode 24" id="v4e24">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e25-div">
                            <p class="popup" onclick="popup()" id="episode-twentyfive-pop">Episode 25<br>
                                <span id="smaller-title">Draw Dominoes</span>
                                <span class="popuptext" id="episode-twentyfive-slugline">Play Block Dominoes</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=0WqW2nQR2bg" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e25.jpg" alt="Civil War Digital Digest Vol.4 Episode 25" id="v4e25">
                            </a>
                        </div>
                        <div class="container-fluid episode-div" id="v4e26-div">
                            <p class="popup" onclick="popup()" id="episode-twentysix-pop">Episode 26<br>
                                <span id="smaller-title">Moore, Nast & Santa</span>
                                <span class="popuptext" id="episode-twentysix-slugline">The story of Moore, Nast, & Santa</span>
                            </p>
                            <a href="https://www.youtube.com/watch?v=eEyWuE2Avqg&t=9s" target="_blank">
                                <img class="img-responsive episode-pic" src="/images/vol_four_episodes/v4e26.jpg" alt="Civil War Digital Digest Vol.4 Episode 26" id="v4e26">
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
                    
                    <!-- Responsive Adsense
                    
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-5786123947739131"
                            data-ad-slot="6275650007"
                            data-ad-format="auto"> 
                        </ins>
                    
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>   
                        -->
                </aside>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/footer/footer.php'; ?>
        </footer>
    </body>
</html>