<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/second-bootstrap-stylesheet.css" >
  <link rel="stylesheet" type="text/css" href="/css/communicate-sheet.css">
  <link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <title>Civil War Digital Digest</title>
  <script>
    $(document).ready(function() {
          
            $("#communicate").addClass("active");
            
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
                
                <?php include $_SERVER['DOCUMENT_ROOT']. '/php/contact-form.php'; ?>
                <section class="col-sm-8 ">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1 class="page-header text-center">Contact the Civil War Digital Digest</h1>
                            <form class="form-horizontal" role="form" method="post" action="communicate.php">
                                <div class="form-group">
                                    <label for="first-name" class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First Name" 
                                               value="<?php echo htmlspecialchars($_POST['first-name']);?>">
                                        <?php echo "<p class='text-danger'>$errFirstName</p>";?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="last-name" class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name" 
                                               value="<?php echo htmlspecialchars($_POST['last-name']);?>">
                                        <?php echo "<p class='text-danger'>$errLastName</p>";?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" 
                                               value="<?php echo htmlspecialchars($_POST['email']);?>">
                                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="city" class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City" 
                                               value="<?php echo htmlspecialchars($_POST['city']);?>">
                                        <?php echo "<p class='text-danger'>$errCity</p>";?>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="state" class="col-sm-2 control-label">State</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="state" name="state" placeholder="State. If outside the United States, please enter N/A." 
                                               value="<?php echo htmlspecialchars($_POST['state']);?>">
                                        <?php echo "<p class='text-danger'>$errCity</p>";?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="country" class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Country" 
                                               value="<?php echo htmlspecialchars($_POST['country']);?>">
                                        <?php echo "<p class='text-danger'>$errCountry</p>";?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="message" class="col-sm-2 control-label">Message</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="4" name="message" placeholder="Your message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                        <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                        <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-10 ">
                                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2" id="message-sent-sentence">
                                        <?php echo $result; ?>
                                    </div>
                                </div>
                                        
                            </form>
                        </div>
                    </div>
                    <div>
                        <h2>Connect with us!</h2>
                        <p id="social-media-links">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/civilwardigitaldigest/" target="_blank">
                                <img src="/images/facebook-button-50px-width.png" alt="Facebook Link">
                            </a>
                            
                            <!-- Twitter -->
                            <a href="https://twitter.com/AcwDigest" target="_blank">
                                <img src="/images/twitter-button.png" alt="Twitter Link">
                            </a>
                            
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/civilwardigitaldigest/" target="_blank">
                                <img src="/images/instagram-button.png">
                            </a>
                        </p>
                        
                    </div>
                    
                </section>
                <aside class="col-sm-2 sidenav" id="right-side-aside">
                    
                        <p>
                            <a href="http://unionreenactor.com/" media="screen, handheld" target="_blank">
                                <img src="/images/5th-michigan-side-ad.jpg" class="img-responsive" id="right-ad-pic">
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

                ga('create', 'UA-81785309-2', 'auto');
                ga('send', 'pageview');

            </script>
            
            
        </footer>

    </body>
</html>