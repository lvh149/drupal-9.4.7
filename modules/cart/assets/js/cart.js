$(document).ready(function () {

    getTotal();
    $(document).on('click', '.qtybtn', function () {
        let price = $(this).parents('tr').find('.cart__price').text().slice(1);
        let quantity = $(this).parents('tr').find('.qty_value').val();
        let sum = price * quantity;
        $(this).parents('tr').find('.cart__total').text(sum);
        getTotal();
    })
    function getTotal() {
        let total = 0;
        $(".cart__total").each(function () {
            total += parseFloat($(this).text());
        });
        $('.all_total_price').text(total);
    }
    $('.delete_product').click(function () {
        let btn = $(this);
        let product_id = btn.data('id');
        $.ajax({
            url: "/drupal-9.4.7/delete_product_cart",
            type: 'GET',
            data: { product_id },
        })
            .done(function () {
                btn.parents('tr').remove();
                getTotal();
                $.notify("Xóa sản phẩm thành công", "success");
            });
    });
    $('.update_cart').click(function (e) {
        e.preventDefault();
        let quantity = {};
        $(".qty_value").each(function () {
            quantity[$(this).data('id')] = $(this).val();
        });
        $.ajax({
            url: "/drupal-9.4.7/update_quantity_cart",
            type: 'GET',
            data: { quantity },
        })
            .done(function () {
                $.notify("Cập nhật giỏ hàng thành công", "success");
            });
    });
    // $('#clear_cart').click(function () {
    //     let clear = "clear";
    //     $.ajax({
    //         url: "{{path('delete_cart')}}",
    //         type: 'GET',
    //         data: { clear },
    //     })
    //         .done(function () {
    //             $('#table_cart > tbody').empty();
    //             getTotal();
    //         });
    // });

})