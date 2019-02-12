<?php

   session_start();
 
print_r ($_SESSION['name']);
$title = 'Vals Gallery'.$_SESSION['name'];

$name_address = "vals.php";
$picture_location = " ";
$picture_name = "Picture Gallery";

require_once 'html/header.php';
require_once 'html/carousel.php';

//looping picture and text;

    
require_once 'html/footer.php';

?>