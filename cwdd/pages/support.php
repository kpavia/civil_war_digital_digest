<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/second-bootstrap-stylesheet.css" >
  <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <title>Civil War Digital Digest</title>
  <script>
      $(document).ready(function() {
            
            $("#support").addClass("active");
            
    }); //end ready function
  </script>
</head>
    <body>
        <header>
            <div class="container-fluid" >
                <img src="/images/cwddBanner.jpg" class="img-responsive" id="banner-img">
            </div>
        </header>
        <nav class="navbar navbar-inverse" >
            <!-- this does the mobile device/smaller screen menu button -->
            <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
            </div>
            
            <div class="container-fluid" id="navbar-container">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div id="nav-div-center">
                        <ul class="nav navbar-nav" id="nav-ul">
                            <li id="home"><a href="http://civilwardigitaldigest.com/grid-home.php">Home</a></li>
                            <li id="episodes"><a href="http://civilwardigitaldigest.com/pages/episodes.php">Episodes</a></li>
                            <li id="research"><a href="http://civilwardigitaldigest.com/pages/research.php">Research</a></li>
                            <li id="store"><a href="http://civilwardigitaldigest.com/pages/store.php">Store</a></li>
                            <li id="support"><a href="http://civilwardigitaldigest.com/pages/support.php">Support</a></li>
                            <li id="communicate"><a href="http://civilwardigitaldigest.com/pages/communicate.php">Communicate</a></li>
                            <li id="links"><a href="http://civilwardigitaldigest.com/pages/links.php">Links</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </nav>
        <div class="container-fluid text-center">
            <div class="row content" id="content-ads-holding-div">
                <aside class="col-sm-2 sidenav" id="left-side-aside">
                       <p>
                           <a href="https://www.etsy.com/shop/VictorianNeedle" media="screen, handheld" target="_blank">
                               <img src="/images/vict-needle-ad.jpg" class="img-responsive" id="vict-needle-ad">
                           </a>
                       </p>        
                </aside>
                <section class="col-sm-8 text-left">
                    <h1>Welcome to the Civil War Digital Digest</h1>
                    <p>This is the support page.</p>
                        <div id="intro-video-div">
                            <iframe id="intro-video" src="https://www.youtube.com/embed/XkTll5DyPbM" frameborder="0" allowfullscreen></iframe>
                        </div>
                    <br><br>
                    
                    <a href="https://www.youtube.com/channel/UCR419HGD33ONzukp3c-WNPA/videos" media="screen, handheld" target="_blank"><img src="/images/YouTube-logo-full_color.png" class="act                      img-responsive" id="youtube-logo" /></a>
                </section>
                <aside class="col-sm-2 sidenav" id="right-side-aside">
                    
                        <p>
                            <a href="http://www.wwandcompany.com/" media="screen, handheld" target="_blank">
                                <img src="/images/wambaugh-ad.jpg" class="img-responsive" id="wambaugh-ad-pic">
                            </a>
                        </p>
                        
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

                ga('create', 'UA-81700293-1', 'auto');
                ga('send', 'pageview');

            </script>
        </footer>

    </body>
</html>