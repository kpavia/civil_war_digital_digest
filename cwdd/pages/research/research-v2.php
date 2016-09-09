<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/research-sheet.css" >
  <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <title>Civil War Digital Digest</title>
  <script>
      $(document).ready(function() {
            $("#episodes-dropdown").removeClass("active");
            $("#research-dropdown").addClass("active");
            
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
                       <p>
                           <a href="https://www.etsy.com/shop/VictorianNeedle" media="screen, handheld" target="_blank">
                               <img src="/images/vict-needle-side-ad.jpg" class="img-responsive" id="vict-needle-ad">
                           </a>
                       </p>        
                </aside>
                <section class="col-sm-8 text-left">
                    <h1>Civil War Digital Digest</h1>
                    <h2>Research</h2>
                    <h3>Volume II</h3>
                    
                </section>
                <aside class="col-sm-2 sidenav" id="right-side-aside">
                    
                        <p>
                            <a href="http://www.wwandcompany.com/" media="screen, handheld" target="_blank">
                                <img src="/images/wambaugh-side-ad.jpg" class="img-responsive" id="wambaugh-ad-pic">
                            </a>
                        </p>
                        
                </aside>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/footer/footer.php'; ?>
            <!-- Google Analytics Code -->
            
        </footer>

    </body>
</html>