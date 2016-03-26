jQuery(function ($) {
    $(document).ready(function () {

        var formCart = $('.ajax-attributes-custom');
        if (formCart.size()) {

            var nid = formCart.data('nid');
            var productid = formCart.data('productid');
            var lineitem = formCart.data('lineitem');

            formCart.click(function() {

                $.ajax({
                    type: "POST",
                    url: "/ajax/order",
                    data: "nid=" + formCart.data('nid') + "&product_id=" + productid + "&line_item_id=" + lineitem,
                    success: function(msg){
                        // text
                    }
                });
            });


        }

    });
});

