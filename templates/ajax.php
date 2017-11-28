<?php require ('../inc/db_connect_settings.php'); ?>
<?php require_once ('header.php'); ?>
<div class="conteiner">
    <div class="wrapper">
        <p><b>Start typing a name in the input field below:</b></p>
        <form>
            First name: <input type="text" id="search" ">
        </form>
        <p>Suggestions: <span id="txtHint"></span></p>
    </div>
</div>

<?php require_once ('footer.php'); ?>