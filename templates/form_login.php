<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php require ('../inc/db_connect_settings.php');
 require_once ('header.php');
/**
 * Created by PhpStorm.
 * User: Oles
 * Date: 10.10.2017
 * Time: 14:02
 */


//Login

/*
$user_login = $_POST['user_login'];
$user_password = $_POST['user_password'];
$conection = mysqli_connect('localhost', 'root', '','ob_blog');
if (!$conection ) return;

$sql = ("SELECT id FROM users WHERE login = '$user_login' AND password = '$user_password'");
$query = mysqli_query($conection , $sql);
$data = mysqli_fetch_assoc($query);

var_dump($data);*/

 $user_login = $_POST['user_login'];
 $user_password = $_POST['user_password'];



if (isset($user_login)&& isset($user_password)){

    $date_test = mysqli_query($conection, "SELECT * FROM `users` WHERE `login` = '{$user_login}' AND `password` = '{$user_password}'");
    if (mysqli_num_rows($date_test)== 0){
        echo "Пройдіть реєстрацію". " <a href='register.php'> Реєстрацію </a>  ";
    }else{
        echo "Вітаємо Вас, ". $user_login ." ! <br>"." На нашому сайті!";

    }

}

require_once ('footer.php');
?>