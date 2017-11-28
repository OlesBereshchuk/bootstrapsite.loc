<?php header('Content-Type: text/html; charset=utf-8');
    require ('../inc/db_connect_settings.php');
    require_once ('header.php');
    if (!$conection ) return;


?>


    <div class="conteiner">
        <div class="wrapper">
            <div class="add-comment-form">
                <p>
                    Автор:<br>
                    <input name="author" type="text" id="author" value="<?php echo "$au1thor"; ?>">
                </p>
                <p>
                    Текст сообщения:<br>
                    <textarea name="message" rows="5" cols="50" id="message" value="<?php echo "$me1ssage"; ?>"></textarea>
                </p>
                <p>
                    <input name="button" type="button" value="Отправить" id="send"> <span id="resp"></span>
                </p>
            </div>
            <div id="commentBlock"  >
                <?php
                $sql_output_last = "SELECT `id`,`author`, `message` FROM comment ORDER BY id DESC LIMIT 9";
                $output_data = mysqli_query($conection,$sql_output_last) ;
                    if (mysqli_num_rows($output_data) > 0 ){
                        while ($row = mysqli_fetch_assoc($output_data)){
                            echo "<div style='background-color: white;color: red;width: 450px;margin: 0 auto;'>";
                                echo "<p class='test'>";
                                echo "Автор: ".$row['author'];
                                echo "<br>";
                                echo "Повідомлення: ".$row['message'];
                                echo "<div><a href='comments.php' data-id ='". $row['id'] . "' class='del' style='display:inline;margin-left: 10px;'>Del</a></div> ";
                                //echo "<a href='comments.php?id=".$row['id'].">delete</a>";

                                echo "</p>";
                            echo "</div>";
                        }
                    }else{
                        echo "No comments";
                    }
                ?>
            </div>

        </div>
    </div>
<?php require_once ('footer.php'); ?>