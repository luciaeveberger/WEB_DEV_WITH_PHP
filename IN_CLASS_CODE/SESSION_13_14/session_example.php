<?php


session_start();

if (isset($_SESSION['views'])) {
    echo "Views=" . $_SESSION['views'];
    $_SESSION['views'] = $_SESSION['views'] + 1;
    if ($_SESSION['views']>10){
        session_destroy();
    }
}
else {

    $_SESSION['views'] = 1;
}


