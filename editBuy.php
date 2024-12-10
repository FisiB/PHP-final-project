<?php

    include_once('config.php');

    if(isset($_POST['submit'])){
        $date = $_POST['size'];
        
        $sql = "UPDATE buy SET  WHERE id=:id";
    
        $prep = $conn->prepare($sql);
        
        $prep->bindParam(":size", $size);
        $prep->execute();

        header("Location: buying.php");
        
    
    }




?>