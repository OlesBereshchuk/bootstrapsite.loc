<?php
/**
 * Created by PhpStorm.
 * User: Oles
 * Date: 09.11.2017
 * Time: 11:38
 */
require ('../inc/db_connect_settings.php');
if (!$conection ) return;

if ($_POST['author']!='' && $_POST['message'] !=''){
    $author = htmlspecialchars($_POST['author']);
    $author = mysqli_real_escape_string($conection,$author);

    $message = htmlspecialchars($_POST['message']);
    $message = mysqli_real_escape_string($conection,$message);

    $date = date("d-m-Y в H:i:s");
    $sql_insrt = "INSERT INTO `comment` (author,message,date)VALUES('$author','$message','$date')";
    $result = mysqli_query($conection,$sql_insrt) ;
    echo $result;
}else{
    echo "FUCK!";
}


if ($_GET['id_del_com'] !=''){
    var_dump($_GET['id_del_com']);
//    $id_del = htmlspecialchars($_POST['id_del_com']);
//    $id_del = mysqli_real_escape_string($conection,$id_del);
//
//    $sql_delete = "DELETE FROM `comment` WHERE `comment`.`id` = $id_del";
//    $result = mysqli_query($conection,$sql_delete) ;
//    echo $result;
}}else{
    echo "FU1313CK!";
}





?>