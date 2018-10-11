<?php

    $myFile = "./price_tju.json";
   	$price = $_POST['price'];  
	$price['time']= date("Y/m/d h:i:s a");
    


   file_put_contents($myFile, json_encode($price, 128));
