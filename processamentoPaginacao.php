<?php 
session_set_cookie_params(0);
session_start();

if(isset($_GET["pagina"])){
    $_SESSION["pagina"] = $_GET["pagina"];
}else{
    $_SESSION["pagina"] = 1;
}




header("Location:home.php#service");

?>