<?php 
require 'functions.php';

if(isset($_POST['subBtn'])){


    $username = $_POST['username'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    
   if(isset($_POST['languages'])){
    $languages = $_POST['languages'];

   }


}else{

    header("Location: forma.php");

}

if(isset($languages)){
    echo "<h2>Welcome $username</h2>";
    foreach($languages as $languages){
        echo "<h4>We need $languages developer</h4>";
    }
    echo "<h5>We send u email at <span>$email</span></h5>";
}else{
    echo "<h2>Sorry we need one language</h2>";
}


?>