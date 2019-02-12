<?php
//turn on session 

if(isset($_GET['name'])){
    
    $name = ($_GET['name']);
    $_SESSION['name'] = $name;
}else{
     session_start();
    } 

if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
}





$title = 'Happy vals Day '.$name;

$name_address = " ";
$picture_location = "";
$picture_name = " I love you";

require_once 'html/header.php';


?>


<div class="row">
    <div class=" col-lg-12 col-md-12">
        
<?php require_once 'html/carousel.php';?>

    </div>
       

</div>



<?php require_once 'html/footer.php'; ?>