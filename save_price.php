<?php
$file_arrs = array("price_tju.json","price_tala.json");
// http://sm-moosavi.ir/price/
foreach ($file_arrs as $file_arr)
    $price_arrs[] = json_decode(file_get_contents($file_arr));
  $curlSession = curl_init();
    

foreach ($file_arrs as $file_arr){
        
    curl_setopt($curlSession, CURLOPT_URL, "http://sm-moosavi.ir/price".$file_arr);
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
    
    $price_arrs[] = json_decode(curl_exec($curlSession));
    // $price_arrs[] = json_decode(file_get_contents("http://sm-moosavi.ir/price/".$file_arr));
}
curl_close($curlSession);
var_dump($price_arrs[1]);
if(!empty($price_arrs)){
    // $price_str = array("tala_ons","tala_methgal" ,"tala_18" ,"tala_24" ,"old_seke","new_seke","nim_seke","rob_seke" ,"gerami_seke" ,"ons_platin","ons_paladiom","ons_nogre","sabok_naft","brent_naft","opec_naft","boors","dollar","euro","derham_emarat","pond","yen","dinar_koveyt","roble","dinar_iraq","yoan","lir","rial_soudi","rupie","dollar_havale","euro_havale","yoan_havale");
    $price_str = array("tala_ons" ,"tala_18" ,"tala_24" ,"old_seke","new_seke","nim_seke","rob_seke","gerami_seke");
    $price['time'] = date("Y/m/d h:i:s a");

    foreach($price_str as $str){
        if (isset($price_arrs[0]->$str) && isset($price_arrs[1]->$str)){
            $full_price = ((float) $price_arrs[0]->$str + (float )$price_arrs[1]->$str) / count($price_arrs);
            $price [$str] = ((int) $full_price == $full_price) ? $full_price : number_format($full_price,2);
        }

        else {
            $price [$str] = (float) $price_arrs[0]->$str;
        }
    }
    file_put_contents('price.json', json_encode($price, 128));

}
?>