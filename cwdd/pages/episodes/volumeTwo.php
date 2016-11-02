<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="/css/v2-episodes-sheet.css" >
  <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="/javascript/slug-line-popup.js"></script>
  <title>Civil War Digital Digest</title>
  <script>
      $(document).ready(function() {
            
            $("#episodes-dropdown").addClass("active");
            
    }); //end ready function
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
                <section class="col-sm-8 text-left">
                    <h1>Civil War Digital Digest</h1>
                    <h2>Episodes</h2>
                    <br>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/episodes/volumeOne.php" id="v1-top-link">To Volume I Episodes</a>
                    </p>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/research/research-v2.php" id="v1-top-link">To Volume II Research</a>
                    </p>
                    <br>
                    <h3>Volume II</h3>
                    <p>Click on the image to view the episode.</p>
                    <br>
                    <div class="container-fluid episodes">
                        
                            <div class="container-fluid episode-div" id="v2e1-div">
                                <p class="popup" onclick="popup()" id="episode-one-pop">Episode 1: Beef Steak
                                    <span class="popuptext" id="episode-one-slugline">View a period soldier's recipe on how to prepare issued beef.</span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=r-2I5Vzatis&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ&index=1" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e1.jpg" alt="Vol.2 Episode 1" id="v2e1">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e2-div">
                                <p class="popup" onclick="popup()" id="episode-two-pop">Episode 2a-d: Michigan Civil War Books
                                    <span class="popuptext" id="episode-two-slugline">In participation with our partner website, www.allmichigancivilwar.com, we provide this four 
                                        part series on books about Michigan’s involvement in the Civil War.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/playlist?list=PLm0U6xIHaOs9F17KUb5pH_WUuVjcAzq-G" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e2b.jpg" alt="Vol.2 Episode 2b" id="v2e2b">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e3-div">
                                <p class="popup" onclick="popup()" id="episode-three-pop">Episode 3: Federal Fatigue Blouse
                                    <span class="popuptext" id="episode-three-slugline">This episode features uniform maker Dan Wambaugh sharing details that make a quality 
                                        reproduction fatigue blouse using criteria from an earlier episode.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=LQ7aiWMT45M&index=6&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e3.jpg" alt="Vol.2 Episode 3" id="v2e3">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e4-div">
                                <p class="popup" onclick="popup()" id="episode-four-pop">Episode 4: GAR Museum
                                    <span class="popuptext" id="episode-four-slugline">We visit with the Board President of this Michigan museum and share images of the museum, 
                                        it's story and collection.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=T0yFNVogz0A&index=7&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e4.jpg" alt="Vol.2 Episode 4" id="v2e4">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e5-div">
                                <p class="popup" onclick="popup()" id="episode-five-pop">Episode 5: Research Triangle
                                    <span class="popuptext" id="episode-five-slugline">We talk with jewelry maker Kristen Mrozek about the three types of sources she recommends be 
                                        used when researching material culture items.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=EFfuaK3ZOBw&index=8&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e5.jpg" alt="Vol.2 Episode 5" id="v2e5">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e6-div">
                                <p class="popup" onclick="popup()" id="episode-six-pop">Episode 6: General Casey's Stew
                                    <span class="popuptext" id="episode-six-slugline">We learn how to make a recipe General Silas Casey suggested to the men of his command.</span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=xWFgo4-GU_o&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ&index=9" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e6.jpg" alt="Vol.2 Episode 6" id="v2e6">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e7-div">
                                <p class="popup" onclick="popup()" id="episode-seven-pop">Episode 7: A Piece of Flag History
                                    <span class="popuptext" id="episode-seven-slugline">Hear the story of how a piece of a battle flag finally returned home.</span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=wz7b-QV5unc&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ&index=10" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e7.jpg" alt="Vol.2 Episode 7" id="v2e7">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e8-div">
                                <p class="popup" onclick="popup()" id="episode-eight-pop">Episode 8: Aprons - Not Just for Cooking
                                    <span class="popuptext" id="episode-eight-slugline">We talk about the uses of aprons and view originals, guided by collector and garment maker 
                                        Jackie Jacobs.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=CfoEJmZC0q0&index=11&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e8.jpg" alt="Vol.2 Episode 8" id="v2e8">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e9-div">
                                <p class="popup" onclick="popup()" id="episode-nine-pop">Episode 9: Simple Dumplings
                                    <span class="popuptext" id="episode-nine-slugline">Learn a simple recipe using flour so a soldier or a civilian can have a simple yet filling 
                                        addition to a meal.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=qzWsVLD2R5E&index=12&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e9.jpg" alt="Vol.2 Episode 9" id="v2e9">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e10-div">
                                <p class="popup" onclick="popup()" id="episode-ten-pop">Episode 10: Make a Blanket Roll
                                    <span class="popuptext" id="episode-ten-slugline">Hear the thoughts of veterans, North and South, as they describe how they made the blanket 
                                        roll and we demonstrate the process.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=_qiy7TEKhz0&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ&index=13" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e10.jpg" alt="Vol.2 Episode 10" id="v2e10">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e11-div">
                                <p class="popup" onclick="popup()" id="episode-eleven-pop">Episode 11: Don't Let the Colors go down!
                                    <span class="popuptext" id="episode-eleven-slugline">This episode tells the story of an early volunteer and the flag he carried.‬‬‬</span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=GuMq3WPR_44&index=14&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e11.jpg" alt="Vol.2 Episode 11" id="v2e11">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e12-div">
                                <p class="popup" onclick="popup()" id="episode-twelve-pop">Episode 12: Jewelry and Materials
                                    <span class="popuptext" id="episode-twelve-slugline">Provided here is a brief overview of jewelry styling popular during the war.</span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=VQuL8YcDtVM&index=15&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e12.jpg" alt="Vol.2 Episode 12" id="v2e12">
                                </a>
                            </div>
                            <div class="container-fluid episode-div" id="v2e13-div">
                                <p class="popup" onclick="popup()" id="episode-thirteen-pop">Episode 13: Knapsack Packing
                                    <span class="popuptext" id="episode-thirteen-slugline">This episode shows a good placement for many items and terms used by the government to 
                                        describe the different parts of the knapsack.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=rwtM58-YCtM&index=16&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e13.jpg" alt="Vol.2 Episode 13" id="v2e13">
                                </a>
                            </div>
                        
                        
                        
                            <div class="container-fluid episode-div" id="v2e14-div">
                                <p class="popup" onclick="popup()" id="episode-fourteen-pop">Episode 14: A Flag's Importance
                                    <span class="popuptext" id="episode-fourteen-slugline">Hear a discussion on the tactical and emotional importance of flags on the Civil War 
                                        Battlefield.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=FBQPwyy8AUM&index=17&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e14.jpg" alt="Vol.2 Episode 14" id="v2e14">
                                </a>
                            </div>
                        
                        
                            <div class="container-fluid episode-div" id="v2e15-div">
                                <p class="popup" id="episode-fifteen-pop">Episode 15: Coffee on Campaign
                                    <span class="popuptext" id="episode-fifteen-slugline">Click here to learn a great way to make coffee, drawn from an Ohio veteran’s 
                                        writings.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=XIKxZCxqXjc&index=18&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e15.jpg" alt="Vol.2 Episode 15" id="v2e15">
                                </a>
                            </div>
                        
                            <div class="container-fluid episode-div" id="v2e16-div">
                                <p class="popup" id="episode-sixteen-pop">Episode 16: Men's Vests
                                    <span class="popuptext" id="episode-sixteen-slugline">View four original men’s vests as we learn about the role of this garment in a Civil War 
                                        man’s wardrobe.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=Jcvt8Pjb0zY&index=19&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e16.jpg" alt="Vol.2 Episode 16" id="v2e16">
                                </a>
                            </div>
                        
                            <div class="container-fluid episode-div" id="v2e17-div">
                                <p class="popup" id="episode-seventeen-pop">Episode 17: Girl's Dresses
                                    <span class="popuptext" id="episode-seventeen-slugline">A wide range of original pieces introduce us to types of clothing worn by little 
                                        girls.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=pIRTZSttYHg&index=20&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e17.jpg" alt="Vol.2 Episode 17" id="v2e17">
                                </a>
                            </div>
                        
                            <div class="container-fluid episode-div" id="v2e18-div">
                                <p class="popup" id="episode-eighteen-pop">Episode 18: Hooker's Retreat
                                    <span class="popuptext" id="episode-eighteen-slugline">Learn how to make a drink popular with the officers of the 118th PA.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=-LgvMwLCh-M&index=21&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e18.jpg" alt="Vol.2 Episode 18" id="v2e18">
                                </a>
                            </div>
                        
                            <div class="container-fluid episode-div" id="v2e19-div">
                                <p class="popup" id="episode-nineteen-pop">Episode 19: Cornfields, like Antietam
                                    <span class="popuptext" id="episode-nineteen-slugline">Enjoy a discussion of how period cornfield differ from modern and how that 
                                        affected Civil War combat.
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=3LoBGQ-docQ&index=22&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e19.jpg" alt="Vol.2 Episode 19" id="v2e19">
                                </a>
                            </div>
                        
                            <div class="container-fluid episode-div" id="v2e20-div">
                                <p class="popup" id="episode-twenty-pop">Episode 20: Women's Winter Headwear
                                    <span class="popuptext" id="episode-twenty-slugline">Learn styles and construction methods of headwear from viewing multiple original copies. 
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=iooxxe8UkO8&index=23&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e20.jpg" alt="Vol.2 Episode 20" id="v2e20">
                                </a>
                            </div>
                        
                            <div class="container-fluid episode-div" id="v2e21-div">
                                <p class="popup" id="episode-twentyone-pop">Episode 21: Preparing Salt Pork
                                    <span class="popuptext" id="episode-twentyone-slugline">
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=BKPltjbZ_7Y&index=24&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e21.jpg" alt="Vol.2 Episode 21" id="v2e21">
                                </a>
                            </div>
                        
                            <div class="container-fluid episode-div" id="v2e22-div">
                                <p class="popup" id="episode-twentytwo-pop">Episode 22: Roasting Coffee
                                    <span class="popuptext" id="episode-twentytwo-slugline">
                                    </span>
                                </p>
                                <a href="https://www.youtube.com/watch?v=Y4NaCsKGiZ4&index=25&list=PLm0U6xIHaOs8lR06BUP0AhcseJ58_7_kJ" target="_blank">
                                    <img class="img-responsive episode-pic" src="/images/vol_two_episodes/v2e22.jpg" alt="Vol.2 Episode 22" id="v2e22">
                                </a>
                            </div>
                        
                        
                    </div>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/episodes/volumeOne.php">To Volume I Episodes</a>
                    </p>
                    <p>
                        <a href="http://civilwardigitaldigest.com/pages/research/research-v2.php" id="v1-top-link">To Volume II Research</a>
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
            
            <!-- Google Analytics Code -->
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-81785309-2', 'auto');
                ga('send', 'pageview');

            </script>
            
        </footer>

    </body>
</html>