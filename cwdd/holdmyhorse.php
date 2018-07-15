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
                <div id="top-div">
                        <h1>Hold My Horse</h1>
                        <h3>A Short Film</h3>
                        <br>
                        <p>
                            Prone to dressing in civilian clothes when not on duty, Civil War General Israel Richardson decides to teach a lesson to an arrogant young lieutenant tasked 
                            with delivering him a message.
                        </p>
                </div>
                        <br>
                        <div>
                            <img class="img-responsive hidden" id="poster" src="/images/hold-my-horse/hmh-poster500w.jpg" />
                        </div>
                        <br>
                        <p>
                            The story is drawn from a diary left by Daniel Crotty, a Civil War veteran. Set in the spring of 1862, the characters are real men even if some of their true
                            names are no longer known.
                        </p>
                        <p>
                            The program is made to create high quality entertainment that uses history as its basis. Part of its goal is to help further historic preservation. 
                            Any funds raised after expenses will be donated to:
                        </p>
                        <ul>
                            <li> <a href="https://www.historicfortwaynecoalition.com/" target="_blank">
                                The Historic Fort Wayne Coalition
                                </a> - denoting where Richardson entered service in the Civil War.
                            <li> <a href="http://shaf.org/" target="_blank">The Save Historic Antietam Foundation</a> - denoting where his service ended.
                        </ul>
                        <br>
                        <img src="/images/hold-my-horse/cff500w.jpg" class="img-responsive" />
                        <br>
                        <p>
                            We are excited to be selected to screen at the 2018 Chesapeake Film Festival! Join us out there October 11-14, 2018. We will update here with 
                            our screening time when we get it. Find out more about the festival at <a href="http://chesapeakefilmfestival.com/" target="_blank">Chesapeake Film Festival</a>.
                        </p>
                        <br>
                        <img src="/images/hold-my-horse/af-finalist500w.png" class="img-responsive" />
                        <br>
                        <p>
                            We are thrilled to be accepted to screen at the Adrian International Film Festival in Adrian, Michigan on May 19, 2018. 
                            If you are close, we hope you will join us there! Find out more at <a href="https://www.adrianfilm.org/" target="_blank">Adrian Film Festival</a>.
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
                        <p>
                            A cast, production crew and ensemble of living historians was assembled from Illinois, Michigan, and Wisconsin to shoot for almost three days to create 
                            this project. Now that it is complete it will make the rounds of film festivals. 
                        </p>
                        <img src="/images/hold-my-horse/eagle.jpg" class="img-responsive" />
                        <br>
                        <div class="container-fluid" id="bottom-left">
                            <img src="/images/hold-my-horse/director500w.jpg" class="img-responsive" id="director" /><br>
                        </div>
                        <div class="container-fluid" id="bottom-right">
                            <img src="/images/hold-my-horse/behindTheScenes500w.jpg" class="img-responsive" id="troops" />
                        </div>
                        <br>
                        <p>
                            We will continue to update this page as the project is accepted to more festivals and 
                            finally becomes available for purchase.
                        </p>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/footer/footer.php'; ?>
        </footer>
    </body>
</html>