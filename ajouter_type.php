<?php
include "../model/type.php";
include "../controller/typeC.php";

if (isset($_POST['idtype']) ){

    $typeC = new  typeC();
    $typee = new type($_POST['idtype'],$_POST['type']
    );

    $typeC->ajoutert($typee);
    header('Location: admintype.php');
//var_dump($besoin);
}


?>