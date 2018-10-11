<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<iframe style="width:100%;border:0;height:410px" src="http://www.tala.ir/webservice/price_live.php?new=1&bg=f0f4f6&upc=196900&dc=FF0000&obc=f9f9f9&oc=09334d&ebc=ffffff&ec=09334d&hbc=09334d&hc=ffffff&fs=13" ></iframe>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
        $(window).bind("load", function() {
            var price = {
                time: new Date().toLocaleString()
            };

          console.log($('tr').children('td').text());
            $('tr').each(function() {
                switch ($(this).children('th').text()) {
                    case 'اونس طلا':
                        price['ons_tala'] = $(this).children('td').text();
                        break;
                    case 'مثقال طلا':
                        price['methgal_tala'] = $(this).children('td').text();
                        break;
                    case 'گرم طلای ۱۸':
                        price['18_tala'] = $(this).children('td').text();
                        break;
                    case 'گرم طلای ۲۴':
                        price['24_tala'] = $(this).children('td').text();
                        break;
                    case 'سکه بهار آزادی':
                        price['bahar_seke'] = $(this).children('td').text();
                        break;
                    case 'سکه امامی':
                        price['emame_seke'] = $(this).children('td').text();
                        break;
                    case 'نیم سکه':
                        price['nim_seke'] = $(this).children('td').text();
                        break;
                    case 'ربع سکه':
                        price['rob_seke'] = $(this).children('td').text();
                        break;
                    case 'سکه گرمی':
                        price['gerami_tal'] = $(this).children('td').text();
                        break;
                    case 'انس پلاتین':
                        price['ons_platin'] = $(this).children('td').text();
                        break;
                    case 'انس پالادیوم':
                        price['ons_paladiom'] = $(this).children('td').text();
                        break;
                    case 'انس نقره':
                        price['ons_nogre'] = $(this).children('td').text();
                        break;
                    case 'نفت سبک':
                        price['sabok_naft'] = $(this).children('td').text();
                        break;
                    case 'نفت برنت':
                        price['brent_naft'] = $(this).children('td').text();
                        break;
                    case 'نفت اپک':
                        price['opec_naft'] = $(this).children('td').text();
                        break;
                    case 'شاخص بورس':
                        price['boors'] = $(this).children('td').text();
                        break;
                    case 'دلار':
                        price['dollar'] = $(this).children('td').text();
                        break;
                    case 'یورو':
                        price['euro'] = $(this).children('td').text();
                        break;
                    case 'درهم امارات':
                        price['derham_emarat'] = $(this).children('td').text();
                        break;
                    case 'پوند':
                        price['pond'] = $(this).children('td').text();
                        break;
                    case 'ین ژاپن':
                        price['yen'] = $(this).children('td').text();
                        break;
                    case 'دینار کویت':
                        price['dinar_koveyt'] = $(this).children('td').text();
                        break;
                    case 'روبل روسیه':
                        price['roble'] = $(this).children('td').text();
                        break;
                    case 'دینار عراق':
                        price['dinar_iraq'] = $(this).children('td').text();
                        break;
                    case 'یوان چین':
                        price['yoan'] = $(this).children('td').text();
                        break;
                    case 'لیر ترکیه':
                        price['lir'] = $(this).children('td').text();
                        break;
                    case 'ریال عربستان':
                        price['rial_soudi'] = $(this).children('td').text();
                        break;
                    case 'روپیه هند':
                        price['rupie'] = $(this).children('td').text();
                        break;
                    case 'حواله دلار':
                        price['dollar_havale'] = $(this).children('td').text();
                        break;
                    case 'حواله یورو':
                        price['euro_havale'] = $(this).children('td').text();
                        break;
                    case 'حواله یوان چین':
                        price['yoan_havale'] = $(this).children('td').text();
                        break;
                    default:
                        break;
                }

            });
            $.ajax({
                type: "POST",
                url: window.location.href.match(/^.*\//) + 'save_json.php',
                dataType: "JSON",
                data: {
                    'price': price
                },
                success: function() {
                    // alert("Thanks!");
                },
                failure: function() {
                    alert("Error!");
                }
            });

        });

    </script>
</body>
