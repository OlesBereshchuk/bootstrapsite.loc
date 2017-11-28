<?php require_once ('header.php'); ?>

<div class="wrapper">
    <div id="test" style="text-align: center; font-size: 30px"></div>
    <h1 class="page-title">Lorem ipsum dolor sit amet.</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum earum eum, sit eos non qui quae, quisquam necessitatibus reprehenderit molestias culpa consequatur. A itaque officiis impedit, eaque eligendi tempore sint.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, id eligendi ipsam, odio optio ut amet veritatis eveniet fugit rerum nobis voluptatum, beatae corrupti. Eligendi ratione repellendus nemo possimus, veritatis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum hic eos, culpa, quos recusandae ea ut ullam assumenda cumque dicta nihil veritatis veniam provident pariatur unde dolorum, qui sit porro.</p>
    <h1 class="page-title">Lorem ipsum dolor sit amet.</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum earum eum, sit eos non qui quae, quisquam necessitatibus reprehenderit molestias culpa consequatur. A itaque officiis impedit, eaque eligendi tempore sint.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, id eligendi ipsam, odio optio ut amet veritatis eveniet fugit rerum nobis voluptatum, beatae corrupti. Eligendi ratione repellendus nemo possimus, veritatis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum hic eos, culpa, quos recusandae ea ut ullam assumenda cumque dicta nihil veritatis veniam provident pariatur unde dolorum, qui sit porro.</p>

</div>
    <div class="container-fluid">
        <form   id="myform" action="form.php" method="POST">
            <div>
                <label>Ваш логін</label>
                <input type="text" placeholder="Login" name="login">
            </div>
            <div>
                <label>Ваш пароль</label>
                <input type="password"  placeholder="Password" name="password">
            </div>
            <div>
                <label>Електронна адреса</label>
                <input type="email"  placeholder="Email" name="email">
            </div>
            <div>
                <label>Кнопка</label>
                <button type="submit" id="sbm-btn">Отправить</button>
            </div>
        </form>
    </div>



<?php require_once ('footer.php'); ?>
