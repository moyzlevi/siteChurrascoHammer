<?php
    if(isset($_POST['key'])){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $database = "churrasco";
        
        $conn =  mysqli_connect($servidor,$usuario,$senha,$database);
       
       
        if($_POST['key'] == 'addNew'){

        }
    }
?>

