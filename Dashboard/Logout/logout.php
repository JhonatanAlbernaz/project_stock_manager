<?php

    if(isset($_SESSION["logedIn"])){
        session_destroy();
    }
header("Location: ../../index.php");
?>