<?php
    include "/inc/session-connect.php";
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SHOPPING LIST</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css"> 
        <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <header class="bg-header">
            <div class="bg-masthead">
                <div class="box clearfix"> 
                    <img class="logo clearfix" src="img/dynamic-games-logo.png" alt="">
                    <div class="tagline clearfix">
                        <h2>Trade-ins for profit.</br>Used games for less.</h2>
                    </div>
                    <img class="float-img hidden-mobile clearfix" src="img/mario.png" alt="">
                </div>
               <nav>
                   <ul>
                       <li><a href="">Home</a></li>
                       <li><a href="">On Sale</a></li>
                       <li><a href="">Best-Sellers</a></li>
                       <li><a href="">Consoles</a></li>
                   </ul>
               </nav>
           </div>
       </header>
       <section class="bg-promotion">
           <div class="box clearfix">
                <div class="big-deal clearfix">
                    <a href="">  
                       <img class="clearfix" src="img/cover-art-edit3.png" alt="">
                       <h3 class="tablet clearfix"><span>SAVE</span> up to <span>50% OFF</span> on all games!</h3>
                        <h3 class="desktop-only clearfix"><span>SAVE</span></br> up to <span></br>50% OFF</span></br> on all games!</h3>
                   </a>
                   <img class="divider mobile-only" src="img/site-divider.png" alt="">
                </div>
           </div>
            <div class="box clearfix">    
                <div class="small-deal clearfix">
                   <a href="#">
                       <img class="clearfix" src="img/n64-controller.png" alt="">
                       <h3 class="clearfix">Save 20% on gaming controllers</h3>
                   </a>
                   <img class="divider mobile-only" src="img/site-divider.png" alt="">
                </div>
                <div class="small-deal clearfix">
                   <a href="#">
                       <img class="clearfix" src="img/keyboard.png" alt="">
                       <h3 class="clearfix">Save 10% on accessories</h3>
                    </a>   
                   <img class="divider mobile-only" src="img/site-divider.png" alt="">
                </div>
            </div>
       </section>
       
       <div class="bg-list clearfix">
            <div class="bg-prodlist clearfix">
               <h2>Used games list:</h2>
                <div class="box clearfix">
                    <?php
                        products();
                    ?>
                </div>
            </div>
            <div class="bg-shoplist">
                <div class="box">
                   <div class="cart">
                       <h2>CART ITEMS:</h2>
                        <?php include "/inc/shopping-cart.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-special-service">
            <ul class="box clearfix">
                
                <li class="footer-service clearfix">
                    <a href="#">
                        <i class="fa fa-map-marker left" aria-hidden="true"></i> 
                        <p class="right">Track your Order</p>
                    </a>
                </li>
                <li class="footer-service clearfix">
                    <a href="#">
                       <i class="fa fa-retweet left" aria-hidden="true"></i>
                        <p class="right">Free &amp; Easy Returns</p>
                    </a>
                </li>
                <li class="footer-service clearfix">
                    <a href="#">
                        <i class="fa fa-times-circle-o left" aria-hidden="true"></i>
                        <p class="right">Cancel Anytime</p>
                    </a>
                </li>
            </ul>
        </div>
        <footer class="clearfix">
            <ul class="box footer-nav clearfix">
                <li><a href="#">Home</a></li>
                <li><a href="#">On Sale</a></li>
                <li><a href="#">Best Sellers</a></li>
                <li><a href="#">Consoles</a></li>
            </ul>
            <p class="copyright">&copy; JP Dynamic Media 2016</p>
        </footer>	
    </body>
</html>