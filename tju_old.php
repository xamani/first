<!DOCTYPE html>
<html>

<head>
    <!-- <meta http-equiv="refresh" content="10" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="css\newstyle.css">

</head>

<body>
    <div id="tgju-data"></div>
    <script src="http://www.tgju.org/webservice/global/snippet-loader.php?token=webservice&items=ons,mesghal,geram18,geram24,sekeb,sekee,nim,rob,gerami,platinum,palladium,silver,oil,oil_brent,oil_opec,bourse,price_dollar_rl,price_eur,price_aed,price_gbp,price_jpy,price_kwd,price_rub,price_iqd,price_cny,price_try,price_sar,price_inr,transfer_usd,transfer_eur,transfer_aed&opts=&placeholder=tgju-data"></script>




    <script src="js/jquery.js"></script>
    <script defer>
        $(window).bind("load", function() {
            var price = {
                time: new Date().toLocaleString()
            };
            $('tr').each(function() {
                switch ($(this).children('th').text()) {
                    case 'اونس طلا':
                        price['tala_ons'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'مثقال طلا':
                        price['tala_methgal'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'گرم طلای ۱۸':
                        price['tala_18'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'گرم طلای ۲۴':
                        price['tala_24'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'سکه بهار آزادی':
                        price['old_seke'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'سکه امامی':
                        price['new_seke'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'نیم سکه':
                        price['nim_seke'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'ربع سکه':
                        price['rob_seke'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'سکه گرمی':
                        price['gerami_seke'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'انس پلاتین':
                        price['ons_platin'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'انس پالادیوم':
                        price['ons_paladiom'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'انس نقره':
                        price['ons_nogre'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'نفت سبک':
                        price['sabok_naft'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'نفت برنت':
                        price['brent_naft'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'نفت اپک':
                        price['opec_naft'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'شاخص بورس':
                        price['boors'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'دلار':
                        price['dollar'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'یورو':
                        price['euro'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'درهم امارات':
                        price['derham_emarat'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'پوند':
                        price['pond'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'ین ژاپن':
                        price['yen'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'دینار کویت':
                        price['dinar_koveyt'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'روبل روسیه':
                        price['roble'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'دینار عراق':
                        price['dinar_iraq'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'یوان چین':
                        price['yoan'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'لیر ترکیه':
                        price['lir'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'ریال عربستان':
                        price['rial_soudi'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'روپیه هند':
                        price['rupie'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'حواله دلار':
                        price['dollar_havale'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'حواله یورو':
                        price['euro_havale'] = $(this).children('td').text().split(',').join('');
                        break;
                    case 'حواله یوان چین':
                        price['yoan_havale'] = $(this).children('td').text().split(',').join('');
                        break;
                    default:
                        break;
                }

            });
            if(!!price['tala_18']){
                $.ajax({
                    type: "POST",
                    url: window.location.href.match(/^.*\//) + 'save_tju.php',
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
        }

        });

    </script>
</body>
