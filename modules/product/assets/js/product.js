$(document).ready(function () {
    $("#btn_filter").click(function (event) {
        event.preventDefault();
        $("#form_filter_price").submit();
    });

    $('#add_to_cart').on('click', function (event) {
        event.preventDefault();
        let product_id = $('#product_id').val();
        let quantity = $('#quantity').val();
        $.ajax({
            url: "/drupal-9.4.7/add_to_cart",
            type: 'GET',
            data: { product_id, quantity },
            success: function (data) {
                $.notify("Thêm vào giỏ hàng thành công", "success");
            },
            error: function (data) {
                $.notify("Có gì đó sai sai!", "error");
            },
        })
    })

    $('.add_to_cart').on('click', function (event) {
        event.preventDefault();
        let product_id = $(this).data('id');
        let quantity = 1;
        $.ajax({
            url: "/drupal-9.4.7/add_to_cart",
            type: 'GET',
            data: { product_id, quantity },
            success: function (data) {
                console.log(data);
                $.notify("Thêm vào giỏ hàng thành công", "success");
            },
            error: function (data) {
                $.notify("Có gì đó sai sai!", "error");
            },
        })
    })

    const min = location.search.split('min=').pop().split('&')[0].replaceAll('%24', '');
    const max = location.search.split('max=').pop().split('&')[0].replaceAll('%24', '');

    if (parseInt(min) > 0) {
        var rangeSlider = $(".price-range"),
            minamount = $("#minamount"),
            maxamount = $("#maxamount"),
            minPrice = rangeSlider.data('min'),
            maxPrice = rangeSlider.data('max');
        rangeSlider.slider({
            range: true,
            min: minPrice,
            max: maxPrice,
            values: [min, max],
            slide: function (event, ui) {
                minamount.val('$' + ui.values[0]);
                maxamount.val('$' + ui.values[1]);
            }
        });
        minamount.val('$' + rangeSlider.slider("values", 0));
        maxamount.val('$' + rangeSlider.slider("values", 1));
    }

})