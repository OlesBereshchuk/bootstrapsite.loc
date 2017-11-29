<?php session_start() ?>
<?php require_once ('templates/header.php'); ?>
<?php require ('inc/db_connect_settings.php'); ?>
    <div class="wrapper">
		<h1 class="page-title">Lorem ipsum dolor sit amet.</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum earum eum, sit eos non qui quae, quisquam necessitatibus reprehenderit molestias culpa consequatur. A itaque officiis impedit, eaque eligendi tempore sint.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, id eligendi ipsam, odio optio ut amet veritatis eveniet fugit rerum nobis voluptatum, beatae corrupti. Eligendi ratione repellendus nemo possimus, veritatis.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum hic eos, culpa, quos recusandae ea ut ullam assumenda cumque dicta nihil veritatis veniam provident pariatur unde dolorum, qui sit porro.</p>
		<h1 class="page-title">Lorem ipsum dolor sit amet.</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum earum eum, sit eos non qui quae, quisquam necessitatibus reprehenderit molestias culpa consequatur. A itaque officiis impedit, eaque eligendi tempore sint.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, id eligendi ipsam, odio optio ut amet veritatis eveniet fugit rerum nobis voluptatum, beatae corrupti. Eligendi ratione repellendus nemo possimus, veritatis.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum hic eos, culpa, quos recusandae ea ut ullam assumenda cumque dicta nihil veritatis veniam provident pariatur unde dolorum, qui sit porro.</p>
		<h1 class="page-title">Lorem ipsum dolor sit amet.</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum earum eum, sit eos non qui quae, quisquam necessitatibus reprehenderit molestias culpa consequatur. A itaque officiis impedit, eaque eligendi tempore sint.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, id eligendi ipsam, odio optio ut amet veritatis eveniet fugit rerum nobis voluptatum, beatae corrupti. Eligendi ratione repellendus nemo possimus, veritatis.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum hic eos, culpa, quos recusandae ea ut ullam assumenda cumque dicta nihil veritatis veniam provident pariatur unde dolorum, qui sit porro.</p>
		<h1 class="page-title">Lorem ipsum dolor sit amet.</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum earum eum, sit eos non qui quae, quisquam necessitatibus reprehenderit molestias culpa consequatur. A itaque officiis impedit, eaque eligendi tempore sint.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, id eligendi ipsam, odio optio ut amet veritatis eveniet fugit rerum nobis voluptatum, beatae corrupti. Eligendi ratione repellendus nemo possimus, veritatis.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum hic eos, culpa, quos recusandae ea ut ullam assumenda cumque dicta nihil veritatis veniam provident pariatur unde dolorum, qui sit porro.</p>
		
	</div>

    <div class="div">
        <?php
            date_default_timezone_set('europe/kiev');
            $time = time();
            $timer = time() + ( 45 * 60 );
            $nextWeek = date('H:i:s');
            $date_time_array = getdate();

           // echo $date_time_array['month'];

//        "seconds" - секунды
//        "minutes" - минуты
//        "hours" - часы
//        "mday" - день месяца
//        "wday" - день недели в числовом формате
//        "mon" - месяц в числовом формате
//        "year" - год
//        "dyear" - день года в числовом формате
//        "month" - полное имя месяца

            //echo " $nextWeek <br>";
            echo "$time";
           // echo "<br>";
            //echo "$timer";


        $access_date = '1993/10/03';

        // функция  explode()разбивает  строку другой строкой. В данном случае
        // $access_date разбит на символе /

        $date_elements  = explode("/",$access_date);

        // здесь
        // $date_elements[0] = 2000
        // $date_elements[1] = 5
        // $date_elements[2] = 27

        echo mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);


        ?>
    </div>

    <pre>
        <?php print_r($date_time_array); ?>
    </pre>

<?php require_once ('templates/footer.php'); ?>