
<?php
  $conn = new mysqli('localhost', 'root', '','energy');
  $sql = "SELECT titel, omschrijving, afbeelding FROM aanbiedingen;";
  $result = $conn->query($sql);
  $aanbieding = $result->fetch_row();
  
?>
<!doctype html>

<html>
    <head>
        <meta charset="utf-8"><meta http-equiv="language" content="NL">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 
        <title>Quick Boost</title>
        <link rel="stylesheet" type="text/css" href="css/Quick-Boost.css">
        <script src="js/homepage.js"></script> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
         <img src="images/logo.png" class="logo">
         <nav>
                <article class="nav">
                    <nav>
                       <ul id="menu">
                        <a class="hoofdnav" href="#"><li>Home</li></a>
                        <a class="hoofdnav" href="#"><li>About</li></a>
                        <a class="hoofdnav" href="#"><li>Events</li></a>
                        <a class="hoofdnav" href="#"><li>Contact</li></a>
                      
                      </ul>
                  </nav>
               </article>
            </nav>
        </header>

        <main>
        <?php if(isset($aanbieding)) { ?>
            <article class="aanbiedding-text">
                <img src="images/<?php echo $aanbieding[2]; ?>" class="drieblikjes">
            </article>
       <?php } ?>

        <div id="slideShow"></div>

        </main>
        <footer>
            <article class="footer">
                <p class="footertekst">©Copyright Quick Boost 2021</p>
            </article>
        </footer>
        
    
    </body>
</html>

