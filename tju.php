<?php
// $html = file_get_contents('http://platform.tgju.org/fa/api/webservice-snippet/?token=webservice&items=ons,mesghal,geram18,geram24,sekeb,sekee,nim,rob,gerami,platinum,palladium,silver,oil,oil_brent,oil_opec,bourse,price_dollar_rl,price_eur,price_aed,price_gbp,price_jpy,price_kwd,price_rub,price_iqd,price_cny,price_try,price_sar,price_inr,transfer_usd,transfer_eur,transfer_aed&opts=&placeholder=tgju-data&hostname=www.sarpoosh.com');

$ch = curl_init();

    // curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'http://platform.tgju.org/fa/api/webservice-snippet/?token=webservice&items=ons,mesghal,geram18,geram24,sekeb,sekee,nim,rob,gerami,platinum,palladium,silver,oil,oil_brent,oil_opec,bourse,price_dollar_rl,price_eur,price_aed,price_gbp,price_jpy,price_kwd,price_rub,price_iqd,price_cny,price_try,price_sar,price_inr,transfer_usd,transfer_eur,transfer_aed&opts=&placeholder=tgju-data&hostname=www.sarpoosh.com');

    $html = curl_exec($ch);
    curl_close($ch);

if(!empty($html)){
    $strArray = explode('<',$html);
    // print_r($strArray);
    $price['time']= date("Y/m/d h:i:s a");
    $price['tala_ons']= preg_replace('/[^0-9\.]/', '', $strArray[19]);
    $price['tala_18']= preg_replace('/[^0-9\.]/', '', $strArray[31]);
    $price['tala_24']= preg_replace('/[^0-9\.]/', '', $strArray[37]);
    $price['old_seke']= preg_replace('/[^0-9\.]/', '', $strArray[43]);
    $price['new_seke']= preg_replace('/[^0-9\.]/', '', $strArray[49]);
    $price['nim_seke']= preg_replace('/[^0-9\.]/', '', $strArray[55]);
    $price['rob_seke']= preg_replace('/[^0-9\.]/', '', $strArray[61]);
    $price['gerami_seke']= preg_replace('/[^0-9\.]/', '', $strArray[67]);
    // $price['gerami_seke']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['ons_platin']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['ons_paladiom']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['ons_nogre']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['sabok_naft']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
    // $price['']= preg_replace('/[^0-9\.]/', '', $strArray[]) ;
// $price['euro']= preg_replace('/[^0-9\.]/', '', $strArray[2694])* 10;
// $price['derham_emarat']= preg_replace('/[^0-9\.]/', '', $strArray[2768])* 10;

    $myFile = "./price_tju.json";
    if (!empty($price['tala_18']))
        file_put_contents($myFile, json_encode($price, 128));
}
?>

