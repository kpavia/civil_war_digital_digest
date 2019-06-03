<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
              crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
        <link href="css/htEras.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title>Eras - History Tunes</title>
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
                    <h2>Please select a time period to browse the music</h2>
                    <br>
                    <h3>American Civil War</h3>
                    <a href="">
                        <img src="images/historytunes/brassBand.jpg" class="img-responsive menu-img" id="cw-menu-img">
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