function deleteItem(event, route, element = 'tr') {
    event.preventDefault();
    if (confirm("آیا از حذف این آیتم اطمینان دارید ؟")) {
        $.post(route, {
            _method: "delete",
            _token: $('meta[name="_token"]').attr('content'),
        })
            .done(function (response) {
                event.target.closest(element).remove();
                successMassage(response);
            })
            .fail(function (response) {
                errorMassage(response);
            });
    }
}

function successMassage(response) {
    return $.toast({
        heading: "با موفقعیت",
        text: response.message,
        showHideTransition: "slide",
        icon: "success",
    });
}

function errorMassage(response) {
    return $.toast({
        heading: "نا موفق",
        text: response.responseJSON.message,
        showHideTransition: "slide",
        icon: "error",
    });
}



function number_format (number, decimals, dec_point, thousands_sep) {
    // Strip all characters but numerical ones.
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}


$('.variation-select').on('change', function () {
    let variation = JSON.parse(this.value);
    let variationPriceDiv = $('.price-box');
    variationPriceDiv.empty();

    if (variation.is_sale) {
        console.log('sss');
        let spanSale = $('<span />', {
            class: 'price-regular',
            text: (number_format(variation.price2)) + ' تومان'
        });
        let spanPrice = $('<span />', {
            class: 'price-old',
            text: (number_format(variation.price)) + ' تومان'
        });

        variationPriceDiv.append(spanPrice);
        variationPriceDiv.append(spanSale);

    } else {
        let spanPrice = $('<span />', {
            class: 'price-regular',
            text: (number_format(variation.price)) + ' تومان'
        });
        variationPriceDiv.append(spanPrice);
    }

    // $('.quantity-input').attr('max', variation.quantity);
    // $('.quantity-input').val(1);

});
