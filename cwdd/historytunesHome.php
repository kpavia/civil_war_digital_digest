<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
              crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
        <link href="css/historytunesHome.css" rel="stylesheet" type="text/css">
        <title>History Tunes</title>
        <style>
        </style>
    </head>
    <body>
        <div id="main-container" class="container-fluid">
            <div class="row">
                <header id="header" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 id="title-banner">History Tunes</h1>
                </header>
            </div>
            <div class="row">
                <aside id="left-sidebar" class="aside col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    
                </aside>
                <div id="content" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <h2>Welcome to History Tunes!<br>Click the image to enter the store</h2>
                    <a href="http://civilwardigitaldigest.com/historyTunesEras.php">
                        <img id="home-img" src="images/historytunes/yankeeDoodle.jpeg" class="img-responsive" />
                    </a>
                </div>
                <aside id="right-sidebar" class="aside col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    
                </aside>
            </div>
            <div class="row">
                <footer id="footer" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/php_modules/historyTunes/footer.php'; ?>
                </footer>
            </div>
        </div>
    </body>