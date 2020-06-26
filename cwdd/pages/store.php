<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="/css/second-bootstrap-stylesheet.css" >  -->
  <link rel="stylesheet" type="text/css" href="/css/store-sheet.css">
  <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <title>Civil War Digital Digest</title>
  <script>
      $(document).ready(function() {
            
            $("#store").addClass("active");
            
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
                <section class="col-sm-8 text-left">
                    <br>
                    <img src="/images/hold-my-horse/eagle.jpg" id="eagle" class="img-responsive" />
                    <h1>
                        <a href="http://civilwardigitaldigest.com/general-store.php" rel="link to CWDD General Store">
                            Civil War Digital Digest General Store
                        </a>
                    </h1>
                    <p>Our general store is  place to find links to items we use in our episodes, whether food items or durable goods. 
                        The links here help the Digest continue since they are affiliate links and we see a small commission from every purchase made.
                    </p>
                    <br>
                    <h1>
                        <a href="https://www.cafepress.com/civilwardigitaldigeststore" rel="link to CWDD General Store" target="_blank">
                            Civil War Digital Digest CafePress Store
                        </a>
                    </h1>
                    <p>Want to show your support for CWDD - check out the items in our cafe press store! 
                        Whether it’s a mug, shirt, bag or other items, get your logo wear here.
                    </p>
                    <br>
                    <h1>
                        <a href="http://civilwardigitaldigest.com/pages/library.php" rel="link to CWDD General Store">
                            Civil War Digital Digest Library
                        </a>
                    </h1>
                    <p>
                        Want to see some of the books we use for research? Here’s a partial list. 
                        If you can make a purchase through a link in here, it’s an affiliate link and 
                        we will see a small portion of the sale to support our efforts.
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