<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="/css/hold-my-horse-styling.css">
  <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="/javascript/slug-line-popup.js"></script>
  <title>Civil War Digital Digest</title>
  <!-- Google Analytics Code -->
  <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-81785309-2', 'auto');
                ga('send', 'pageview');

  </script>
  <script>
      $(document).ready(function() {
            $("#episodes-dropdown").addClass("active");
            $("#poster").fadeIn(2000).removeClass("hidden");
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
                <div id="top-div" class="col-12">
                    <p>
                        <br>
                        Enjoy a great story and help historic preservation at the same time! Buy or rent a copy of "Hold My Horse" here:<br>
                        <a href="https://vimeo.com/ondemand/holdmyhorse" target="_blank">
                            Hold My Horse Vimeo Store
                        </a>
                    </p>
                    <h1>Hold My Horse</h1>
                    <h3>A Short Film</h3>
                    <br>
                    <p>
                        Prone to dressing in civilian clothes when not on duty, Civil War General Israel Richardson decides to teach a lesson to an arrogant young lieutenant tasked 
                        with delivering him a message.
                    </p>
                </div>
                <br>
                <div class="col-12">
                    <img class="img-responsive hidden" id="poster" src="/images/hold-my-horse/hmh-poster2.png" />
                </div>
                <div class="col-12">
                    <br>
                    <p>
                        The story is drawn from a diary left by Daniel Crotty, a Civil War veteran. Set in the spring of 1862, the characters are real men even if some of their true
                        names are no longer known.
                    </p>
                    <p>
                        The program is made to create high quality entertainment that uses history as its basis. <br><br>
                        Part of its goal is to help further historic preservation. 
                        Part of all monies raised are being donated to:
                    </p>
                    <ul>
                        <li> <a href="https://www.historicfortwaynecoalition.com/" target="_blank">
                            The Historic Fort Wayne Coalition
                            </a> - denoting where Richardson entered service in the Civil War.
                        <li> <a href="http://shaf.org/" target="_blank">The Save Historic Antietam Foundation</a> - denoting where his service ended.
                    </ul>
                    <br>
                    <img src="/images/hold-my-horse/wisconsinFilm500w.png" class="img-responsive" />
                    <br>
                    <p>
                        We were proud to screen in the “Stories We Tell in Wisconsin” at the Wisconsin Film Festival on April 6, 2019.
                    </p>
                    <br>
                    <img src="/images/hold-my-horse/cff500w.jpg" class="img-responsive" />
                    <br>
                    <p>
                        We were excited to screen at the 2018 Chesapeake Film Festival on October 12, 2018. 
                        Christian Stolte won Best Actor awards at this festival for his role here!
                    </p>
                    <br>
                    <img src="/images/hold-my-horse/af-finalist500w.png" class="img-responsive" />
                    <br>
                    <p>
                        We were thrilled to screen at the Adrian International Film Festival in Adrian, Michigan on May 19, 2018.
                    </p>
                    <br>
                    <img src="/images/hold-my-horse/eagle.jpg" class="img-responsive" />
                    <br>
                    <img src="/images/hold-my-horse/cast500w.jpg" class="img-responsive" />
                    <br>
                    <p>
                        This seven-minute story is an introduction to the world of “Barely Fiction,” an initiative by Civil War Digital Digest to bring real stories out of history and 
                        tell them in a narrative setting.  We take you on a journey to catch a glimpse of the men who served and some of their daily life. 
                    </p>
                    <br>
                    <img src="/images/hold-my-horse/castAndCamera500w.jpg" class="img-responsive" />
                    <br>
                    <img src="/images/hold-my-horse/eagle.jpg" class="img-responsive" />
                    <br>
                    <div class="container-fluid" id="bottom-left">
                        <img src="/images/hold-my-horse/director500w.jpg" class="img-responsive" id="director" /><br>
                    </div>
                    <div class="container-fluid" id="bottom-right">
                        <img src="/images/hold-my-horse/behindTheScenes500w.jpg" class="img-responsive" id="troops" />
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/footer/footer.php'; ?>
        </footer>
    </body>
</html>