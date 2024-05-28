<?php
 $servername = "localhost";
 $user = "root";
 $pass = "";
 try{
         $conn = new PDO("mysql:host=$servername;
         dbname=artes_da_tia_eva", $user, $pass);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  echo 'funcionou';
 }catch(PDOException $erro){
         echo "nao deu certo" . $erro->getMessage();
 };
?>