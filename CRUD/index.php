<?php
require_once"./confi/app.php";
require_once"./autoload.php";
require_once"./app/view/inc/session_start.php";
if(isset($_GET['view'])){

    $url=explode("/",$_GET ['view']);

}else{

$url=['login'];
} 



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once"./app/view/inc/head.php";  ?>
</head>
<body>


<?php
        use app\controller\viewController;
     

    

        $viewController= new viewController();
        $vista=$viewController->obtenerVistasControlador($url[0]);

        if($vista=="login" || $vista=="404"){
            require_once "./app/view/content/".$vista."-view.php";
        }else{
           require_once "./app/view/inc/navbar.php";
            require_once $vista;
        }
        require_once "./app/view/inc/script.php";

       
    ?>
    
</body>
</html>
