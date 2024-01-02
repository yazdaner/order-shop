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
