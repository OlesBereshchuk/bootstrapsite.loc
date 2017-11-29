<?php
    setcookie('count',"$count",time()+3600*24);
    $count = $_COOKIE['count'];
    if(!isset($count)){
        $count = 0;
    }
    $count++;
    setcookie('count',"$count",time()+3600*24);
//$count = 0;
//        if (isset($_COOKIE['count'])){
//            $count = $count +1;
//            $count = $_COOKIE['count'];
//        }else{
//            $count = 0;
//            setcookie('count',"$count",time()+3600*24);
//        }

 include ('header.php'); ?>
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
		<?php echo "Ви були на сайті ".$count." разів!" ?>
	</div>
<?php include ('footer.php'); ?>