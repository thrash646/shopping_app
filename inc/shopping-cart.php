    <?php
        if(isset($_GET["delete"])) {
            unset($_SESSION["listItem_" . $_GET["delete"]]);
        }
        if(sizeof($_SESSION) == 0) {
            $cartSize = sizeof($_SESSION);
            echo '<h3><i class="fa fa-cart-plus" aria-hidden="true"></i> CART ('.$cartSize .')</h3>';    
        }
        if(sizeof($_SESSION) > 0) {
            $cartSize = sizeof($_SESSION);
            echo '<h3><i class="fa fa-cart-plus" aria-hidden="true"></i> CART ('.$cartSize .')</h3>';
            echo '<ul>';
            foreach( $_SESSION as $k=>$v ){
                $id = substr($k,9,strlen($k)-9); 
                echo '<li><p>' . $v . ' <a class="cancel" href="index-jp.php?delete=' . $id . '"><i class="fa fa-times-circle" aria-hidden="true">[Remove]</i></a></p></li>';
            }
        echo '</ul>'; 
    ?>
    <form class="clearfix" method="get" action="<?php $_SERVER["PHP_SELF"] ?>">
        <div class="inner-form">
            <input class="clear" type="submit" name= "clear" value="EMPTY CART">
            <input class="payNow"  type="submit" name= "payNow" value="CHECKOUT">
        </div>
    </form>
    <?php 
        }
    ?>