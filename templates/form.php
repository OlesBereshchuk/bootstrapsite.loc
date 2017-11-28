
<?php require ('../inc/db_connect_settings.php');

      //require_once ('header.php');

//Registr
$login = $_POST['login'];
$pass = $_POST['password'];
$email = $_POST['email'];
$dt = date('Y-m-d H:i:s');

if (isset($login) && isset($pass)){


    $user_db_query = mysqli_query($conection,
        "INSERT INTO `users` (`login`, `password` )VALUES ('$login', '$pass' )");

  if ($user_db_query==true){
    echo "Все гуд! Зареєстровані, $login". "<br/>" . "Дані остримані о $dt";
    }else{
        echo "Реєстрацію не вдалася!";
        //header( 'Location: /', true, 307 );
    }

}
    //require_once ('footer.php');
?>