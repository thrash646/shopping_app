<?php 

    session_start();
    $host = "shiku";
    $user = "nuye646.jpdynamic.com";
    $pass = "Jontesla@#1";
    $db_name = "main_db_jpdynamic_com";
    $conn = mysqli_connect("shiku", "nuye646.jpdynamic.com", "Jontesla@#1", "main_db_jpdynamic_com") or die("Sorry, we couldn't connect to MYSQL");
    mysqli_select_db($conn, $db_name) or die ("Sorry, we couldn't find the database");

    function products(){

        $query = "SELECT *
                FROM game_list_2";

        $rs = mysqli_query( $GLOBALS["conn"], $query);  
        echo "<ul>";
        while( $row = mysqli_fetch_assoc($rs)){
            echo "<li class='clearfix'>
                    <img src=\"" . $row["picture"] . "\" alt=\"" .$row["name"]. "\">
                    <h3>" .  $row["name"] . "</h3>
                    <p>(" .$row["console"] .  ")</p>
                    <p class=\"price\">$" .$row["price"] . " (50% off)</p>
                    <div class=\"cart-btn\"> 
                        <a href=\"index.php?add=" . $row["id"] . "\">
                            <i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i> Add To Cart
                        </a>
                    </div>

                 </li>";	
        }	

        echo "</ul>";	
    }

    if( isset($_GET["add"])){	
        $query = "SELECT id, name
                FROM game_list
                WHERE id = " . mysqli_real_escape_string($conn, $_GET["add"]);
        $rs = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($rs);
        if( $row ){
            $_SESSION["listItem_" . $_GET["add"]] = $row["name"];
        }
    }

    if(isset($_GET["clear"])) {
        session_unset();
        session_destroy();
    }

?>