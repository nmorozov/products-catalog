$(document).ready(function () {
    $('#appbundle_product_name').autocomplete({
        source: '/product_search',
        select: function (event, ui) {
            event.preventDefault();
            $('#appbundle_product_name').val(ui.item.value);
        },
        minLength: 3
    });
});
