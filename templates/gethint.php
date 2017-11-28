<?php
/**
 * Created by PhpStorm.
 * User: Oles
 * Date: 07.11.2017
 * Time: 11:43
 */

require ('../inc/db_connect_settings.php');

//$conection = mysqli_connect('localhost', 'root', '','ob_bootstrap_db');

if (!$conection ) return;


header("Content-type: text/html; charset=windows-1251");

$search = $_POST['search'];
$search = addslashes($search);
$search = htmlspecialchars($search);
$search = stripslashes($search);
if($search == ''){
    exit("Enter name");
}
//mysqli_select_db($conection,"ob_bootstrap_db");

//mysqli_query("SET NAMES cp1251");

$query = mysqli_query( $conection,
    "SELECT * FROM `author` WHERE `ath_name` LIKE '%". $search . "%' ", MYSQLI_STORE_RESULT) or die(mysqli_error($conection ));

if(mysqli_num_rows($query) > 0){
    $sql = mysqli_fetch_array($query) or die(mysqli_error($conection ));

    do{
        echo "<div>".$sql['ath_name']."</div>";
    }while($sql = mysqli_fetch_array($query));
}else{
    echo "Empty";
}



?>