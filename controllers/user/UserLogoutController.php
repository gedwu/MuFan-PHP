<?php

session_start();
session_destroy();

header("Location: ../../index.php");

//if (!isset($page)) {
//    header("Location: ../index.php");
//} else {
//    header("Location: ../index.php?page=".$page); //@todo redirectint i dabartini page
//}
exit();