   $.getJSON( "price.json", function( data ) {
    let str = "<p class='p-1'>میانگین قیمت ها</p><div class='container'><div style='margin-bottom: 12px;    padding: 20px'><ul class='info-bar mobile-hide'>";
    $.each( data, function( key, val ) {
      switch(key){
        case 'tala_24':
        str +='<li>';
        str +='<strong>طلا 24 عیار</strong>';
        str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
        str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
        str +='</li>';
        break;
        case 'tala_18':
        str +='<li>';
        str +='<strong>طلا 18 عیار</strong>';
        str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
        str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
        str +='</li>';
        break;
        case 'tala_ons':
        str +='<li>';
        str +='<strong>انس طلا</strong>';
        str +='<span class="info-value"><span class="info-price">' + (val.price) + '</span></span>';
        str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
        str +='</li>';
        break;
        case 'old_seke':
        str +='<li>';
        str +='<strong>سکه طرح قدیم</strong>';
        str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
        str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
        str +='</li>';
        break;
        case 'new_seke':
        str +='<li>';
        str +='<strong>سکه طرح جدید</strong>';
        str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
        str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
        str +='</li>';
        break;
        case 'nim_seke':
        str +='<li>';
        str +='<strong>نیم سکه</strong>';
        str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
        str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
        str +='</li>';
        break;
        case 'rob_seke':
        str +='<li>';
        str +='<strong>ربع سکه</strong>';
        str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
        str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
        str +='</li>';
        break;
        case 'gerami_seke':
        str +='<li>';
        str +='<strong>سکه گرمی</strong>';
        str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
        str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
        str +='</li>';
        break;
        default:
        str += '';
        break;
    }

});
    str += "</ul></div></div>";
    $('.price-1').html(str);
});

   $.getJSON( "price_tala.json", function( data ) {
    let str = "<p class='p-1'>قیمت های سایت tala.ir</p><div class='container'><div style='margin-bottom: 12px;    padding: 20px'><ul class='info-bar mobile-hide'>";
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
            str +='<span class="info-value"><span class="info-price">' + (val) + '</span></span>';
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
    $('.price-2').html(str);
});

   $.getJSON( "price_tju.json", function( data ) {
    let str = "<p class='p-1'>قیمت های سایت tgju.ir</p><div class='container'><div style='margin-bottom: 12px;    padding: 20px'><ul class='info-bar mobile-hide'>";
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
            str +='<span class="info-value"><span class="info-price">' + (val) + '</span></span>';
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
    $('.price-3').html(str);
});
   var previous = null;
   var current = null;
   setInterval(function() {
    $.getJSON( "price.json", function( data ) {
        current = JSON.stringify(data);  

        if ((!previous) || (previous && current && previous !== current)) {

            let str = "<p class='p-1'>میانگین قیمت ها</p><div class='container'><div style='margin-bottom: 12px;    padding: 20px'><ul class='info-bar mobile-hide'>";
            $.each( data, function( key, val ) {
                switch(key){
                    case 'tala_24':
                    str +='<li>';
                    str +='<strong>طلا 24 عیار</strong>';
                    str +='<span class="info-value change-price"><span class="info-price">' + normailze(val.price) + '</span></span>';
                    str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
                    str +='</li>';
                    break;
                    case 'tala_18':
                    str +='<li>';
                    str +='<strong>طلا 18 عیار</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
                    str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
                    str +='</li>';
                    break;
                    case 'tala_ons':
                    str +='<li>';
                    str +='<strong>انس طلا</strong>';
                    str +='<span class="info-value"><span class="info-price">' + (val.price) + '</span></span>';
                    str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
                    str +='</li>';
                    break;
                    case 'old_seke':
                    str +='<li>';
                    str +='<strong>سکه طرح قدیم</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
                    str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
                    str +='</li>';
                    break;
                    case 'new_seke':
                    str +='<li>';
                    str +='<strong>سکه طرح جدید</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
                    str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
                    str +='</li>';
                    break;
                    case 'nim_seke':
                    str +='<li>';
                    str +='<strong>نیم سکه</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
                    str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
                    str +='</li>';
                    break;
                    case 'rob_seke':
                    str +='<li>';
                    str +='<strong>ربع سکه</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
                    str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
                    str +='</li>';
                    break;
                    case 'gerami_seke':
                    str +='<li>';
                    str +='<strong>سکه گرمی</strong>';
                    str +='<span class="info-value"><span class="info-price">' + normailze(val.price) + '</span></span>';
                    str +='<span class="info-change">' + val.dec +' (' + val.per +'%)' + '</span>';
                    str +='</li>';
                    break;
                    default:
                    str += '';
                    break;
                }

            });
            str += "</ul></div></div>";
            $('.price-1').html(str);
        }
        previous = current;
    });
}, 8000); 
   function normailze(num){
    return Number(num.toString().slice(num.toString().indexOf('.')+1)).toLocaleString();
}
setInterval(function() {
    $("span.change-price").css("background-color", "blue");
}, 2500); 
