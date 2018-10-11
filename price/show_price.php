<?php
$file_arrs = array("price_tju.json","price_tala.json");
foreach ($file_arrs as $file_arr)
    $price_arrs[] = json_decode(file_get_contents($file_arr));

if(!empty($price_arrs)){
    // $price_str = array("tala_ons","tala_methgal" ,"tala_18" ,"tala_24" ,"old_seke","new_seke","nim_seke","rob_seke" ,"gerami_seke" ,"ons_platin","ons_paladiom","ons_nogre","sabok_naft","brent_naft","opec_naft","boors","dollar","euro","derham_emarat","pond","yen","dinar_koveyt","roble","dinar_iraq","yoan","lir","rial_soudi","rupie","dollar_havale","euro_havale","yoan_havale");
    $price_str = array("tala_ons" ,"tala_18" ,"tala_24" ,"old_seke","new_seke","nim_seke","rob_seke","gerami_seke");
    $price['time'] = date("Y/m/d h:i:s a");
    $old_price = json_decode(file_get_contents('price.json'), true);
    
    foreach($price_str as $str){
        if (isset($price_arrs[0]->$str) && isset($price_arrs[1]->$str)){
            $price[$str]['price'] = ((float) $price_arrs[0]->$str + (float) $price_arrs[1]->$str) / count($price_arrs);
            // if ($price[$str] > $old_price[$str]) 
                $price[$str]['dec'] = number_format($price[$str]['price'] - (float)$old_price[$str]['price'] , 2);
            // else 
                // $price[$str]['dec'] = (float)$old_price[$str]['price'] - $price[$str]['price'];
                
            if($price[$str]['dec']  != 0)
                $price[$str]['per'] = number_format(($price[$str]['dec']  / $old_price[$str]['price']) * 100 , 2);
            else 
                $price[$str]['per'] = 0;
        }
    else {
            $price [$str] = (float) $price_arrs[0]->$str;
        }
    }
    
    file_put_contents('price.json', json_encode($price, 128));
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>قیمت ها</title>
    <link rel="stylesheet" type="text/css" href="css/newstyle.css">
</head>
<body>
<div class="home-quickview-wrapper">
    <div class="price-2"></div>
    <hr />
    <div class="price-3"></div>
    <hr />
    <div class="price-1"></div>

</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/price.js"></script>
</body>
</html>
