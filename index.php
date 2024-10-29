<?php
 
session_name('sesje');
session_start();
 
$_SESSION["huh"] = "THERE ARE PARASITES IN YOUR SKIN ";
 
$low = 0;
$high = 255;
 
for($i=0; $i<100000; $i++){
echo '<p style="color:rgb('.rand($low, $high).','.rand($low, $high).','.rand($low, $high).');background-color:rgb('.rand($low, $high).','.rand($low, $high).','.rand($low, $high).');display:inline">'.$_SESSION["huh"].'</p>' ;
}