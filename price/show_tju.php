<?php
$file_arrs = array("price_tju.json");
foreach ($file_arrs as $file_arr)
    $price_arrs[] = json_decode(file_get_contents($file_arr));

if(!empty($price_arrs)){
    $price_str = array("tala_ons","tala_methgal" ,"tala_18" ,"tala_24" ,"new_seke","old_seke","nim_seke","rob_seke" ,"gerami_seke" ,"ons_platin","ons_paladiom","ons_nogre","sabok_naft","brent_naft","opec_naft","boors","dollar","euro","derham_emarat","pond","yen","dinar_koveyt","roble","dinar_iraq","yoan","lir","rial_soudi","rupie","dollar_havale","euro_havale","yoan_havale");
    $price['time'] = date("Y/m/d h:i:s a");

    foreach($price_str as $str){
        if (isset($price_arrs[0]->$str) && isset($price_arrs[1]->$str))
            $price [$str] = ((int) $price_arrs[0]->$str + (int )$price_arrs[1]->$str) / count($price_arrs);
        else {
            $price [$str] = (int) $price_arrs[0]->$str;
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
<div class="home-quickview-wrapper"></div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    $.getJSON( "price.json", function( data ) {
        let str = "<div class='container'><div style='margin-bottom: 12px'><ul class='info-bar mobile-hide'>";
        $.each( data, function( key, val ) {
            switch(key){
                case 'tala_24':
                    str +='<li>';
                    str +='<strong>طلا 24 عیار</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</li>';
                    break;
                case 'tala_18':
                    str +='<li>';
                    str +='<strong>طلا 18 عیار</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</li>';
                    break;
                case 'tala_ons':
                    str +='<li>';
                    str +='<strong>انس طلا</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</li>';
                    break;
                case 'old_seke':
                    str +='<li>';
                    str +='<strong>سکه طرح قدیم</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</li>';
                    break;
                case 'new_seke':
                    str +='<li>';
                    str +='<strong>سکه طرح جدید</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</li>';
                    break;
                case 'nim_seke':
                    str +='<li>';
                    str +='<strong>نیم سکه</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</li>';
                    break;
                case 'rob_seke':
                    str +='<li>';
                    str +='<strong>ربع سکه</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</li>';
                    break;
                case 'gerami_seke':
                    str +='<li>';
                    str +='<strong>سکه گرمی</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</li>';
                    break;
                default:
                    str += '';
                    break;
            }

        });
        str += "</ul></div></div>";
        $('.home-quickview-wrapper').html(str);
    });
    function normailze(num){
        return Number(num.toString().slice(num.toString().indexOf('.')+1)).toLocaleString();
    }
</script>
</body>
</html>
