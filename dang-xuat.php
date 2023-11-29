<?php
    session_start();
    if (isset($_SESSION['tk'])){
        unset($_SESSION['tk']);
	unset($_SESSION['id_kh']);
    }

    header ('location:index.php');

?>