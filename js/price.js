   $.getJSON( "http://talaforoshan.com/api/price.json", function( data ) {
        let str = "</p><div class='container'><div class='row row-collapse'>";
        $.each( data, function( key, val ) {
            switch(key){
                case 'tala_24':
                    str +='<div class="col medium-3 small-6 large-3 col-mod">';
                    str +='<strong class="info-name">طلا 24 عیار</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</div>';
                    break;
                case 'tala_18':
                    str +='<div class="col medium-3 small-6 large-3 col-mod">';
                    str +='<strong class="info-name">طلا 18 عیار</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</div>';
                    break;
                case 'tala_ons':
                    str +='<div class="col medium-3 small-6 large-3 col-mod">';
                    str +='<strong class="info-name">انس طلا</strong>';
                    str +='<span class="info-value"><span class="info-price">' + (val) + '</span></span>';
                    str +='</div>';
                    break;
                case 'old_seke':
                    str +='<div class="col medium-3 small-6 large-3 col-mod">';
                    str +='<strong class="info-name">سکه طرح قدیم</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</div>';
                    break;
                case 'new_seke':
                    str +='<div class="col medium-3 small-6 large-3 col-mod">';
                    str +='<strong class="info-name">سکه طرح جدید</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</div>';
                    break;
                case 'nim_seke':
                    str +='<div class="col medium-3 small-6 large-3 col-mod">';
                    str +='<strong class="info-name">نیم سکه</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</div>';
                    break;
                case 'rob_seke':
                    str +='<div class="col medium-3 small-6 large-3 col-mod">';
                    str +='<strong class="info-name">ربع سکه</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</div>';
                    break;
                case 'gerami_seke':
                    str +='<div class="col medium-3 small-6 large-3 col-mod">';
                    str +='<strong class="info-name">سکه گرمی</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val) + '</span></span>';
                    str +='</div>';
                    break;
                default:
                    str += '';
                    break;
            }

        });
        str += "</div></div>";
        $('.price-1').html(str);
    });

    function normailze(num){
        return Number(num.toString().slice(num.toString().indexOf('.')+1)).toLocaleString();
    }