<?php
require ('../inc/db_connect_settings.php');
if (!$conection ) return;

if ($_POST['check']!=''){

    $sql_output_last = "SELECT `author`, `message` FROM comment  ORDER BY id DESC LIMIT 9 ";
    $output_data = mysqli_query($conection,$sql_output_last) ;

    if (!$output_data || mysqli_num_rows($output_data) > 0 ){
        while ($row = mysqli_fetch_assoc($output_data)){
            echo "<div style='background-color: white;color: red;width: 450px;margin: 0 auto;'>";
            echo "<p class='test'>";
            echo "Автор: ".$row['author'];
            echo "<br>";
            echo "Повідомлення: ".$row['message'];
            echo "<div><a href='comments.php' data-id= '". $row['id'] . "' class='del' style='display:inline;margin-left: 10px;'>Del</a></div> ";
            //echo "<a href='comments.php?id=".$row['id'].">delete</a>";
            echo "</p>";
            echo "</div>";
        }
    }else{
        echo "No comments";
    }
}