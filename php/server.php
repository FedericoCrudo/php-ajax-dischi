
<?php 
    //Giacomo is the bestt :D
    // if($_GET["richiesta"]=="dischi"){
    //     include("db.php");
    //     header('Content-Type: application/json');
    //     echo json_encode($db);
    // }
    // else{
    //     echo "Non esiste";
    // }
    include("db.php");
    header('Content-Type: application/json');
     echo json_encode($db);



?>