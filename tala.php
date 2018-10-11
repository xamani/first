<?php
$html = file_get_contents('http://www.tala.ir/webservice/price_live.php');

if(!empty($html)){
    $strArray = explode(' ',$html);
    $price['time']= date("Y/m/d h:i:s a");
    $price['tala_ons']= preg_replace('/[^0-9\.]/', '', $strArray[2170]);
    $price['tala_18']= preg_replace('/[^0-9\.]/', '', $strArray[2018]) * 10;
    $price['tala_24']= preg_replace('/[^0-9\.]/', '', $strArray[2094]) * 10;
    $price['old_seke']= preg_replace('/[^0-9\.]/', '', $strArray[2245]) * 10;
    $price['new_seke']= preg_replace('/[^0-9\.]/', '', $strArray[2320]) * 10;
    $price['nim_seke']= preg_replace('/[^0-9\.]/', '', $strArray[2395]) * 10;
    $price['rob_seke']= preg_replace('/[^0-9\.]/', '', $strArray[2470]) * 10;
    $price['gerami_seke']= preg_replace('/[^0-9\.]/', '', $strArray[2545]) * 10;
// $price['euro']= preg_replace('/[^0-9\.]/', '', $strArray[2694])* 10;
// $price['derham_emarat']= preg_replace('/[^0-9\.]/', '', $strArray[2768])* 10;

    $myFile = "./price_tala.json";

    if (!empty($price['tala_18']))
        file_put_contents($myFile, json_encode($price, 128));
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- <meta http-equiv="refresh" content="10" /> -->
    <title>قیمت ها</title>
    <link rel="stylesheet" type="text/css" href="css\newstyle.css">
</head>

<body>
<div class="home-quickview-wrapper">
    <div class="container">
        <div style="margin-bottom: 12px">
            <ul class="info-bar mobile-hide">
                <li>
                    <strong><em></em> انس طلا</strong>
                    <span class="info-value">
                                <span class="info-price"><?php echo $price['tala_ons']; ?></span>
                            </span>
                    <!-- <span class="info-change">(0%) 0</span> -->
                </li>
                <li class="low">
                    <strong><em></em> طلای 18 عیار</strong>
                    <span class="info-value">
<span class="info-price"><?php echo $price['tala_18']; ?></span>
                            </span>
                    <!-- <span class="info-change">1.70 (0.13%)</span> -->
                </li>
                <li class="low" onclick="window.location='chart/mesghal'">
                    <strong><em></em> طلای 24 عیار</strong>
                    <span class="info-value">
<span class="info-price"><?php echo $price['tala_24']; ?></span>
                            </span>
                    <!-- <span class="info-change">6,000 (0.09%)</span> -->
                </li>
                <li class="low">
                    <strong><em></em> سکه طرح قدیم</strong>
                    <span class="info-value">
<span class="info-price"><?php echo $price['old_seke']; ?></span>
                            </span>
                    <!-- <span class="info-change">1,620 (0.11%)</span> -->
                </li>
                <li class="low" onclick="window.location='chart/sekee'">
                    <strong><em></em> سکه طرح جدید</strong>
                    <span class="info-value">
<span class="info-price"><?php echo $price['new_seke']; ?>0</span>
                            </span>
                    <!-- <span class="info-change">9,000 (0.06%)</span> -->
                </li>
                <li class="high">
                    <strong><em></em> نیم سکه</strong>
                    <span class="info-value">
<span class="info-price"><?php echo $price['nim_seke']; ?></span>
                            </span>
                    <!-- <span class="info-change">(0.49%) 240</span> -->
                </li>
                <li class=" medium-hide tablet-hide">
                    <strong><em></em> ربع سکه</strong>
                    <span class="info-value">
<span class="info-price"><?php echo $price['rob_seke']; ?></span>
                            </span>
                    <!-- <span class="info-change">(0%) 0</span> -->
                </li>
                <li class="high tablet-hide">
                    <strong><em></em>سکه گرمی</strong>
                    <span class="info-value">
<span class="info-price"><?php echo $price['gerami_seke']; ?></span>
                            </span>
                    <!-- <span class="info-change">(0.67%) 0.44</span> -->
                </li>
            </ul>
        </div>
    </div>
</div>

</body>

</html>
