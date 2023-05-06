$(document).ready(function () {
    //alert('supply order page');


    //add product btn
    $('.add-purchase-product-btn').on('click', function (e) {
        e.preventDefault();
        //alert('btn clicked');
        let name = $(this).data('name');
        let id = $(this).data('id');
        let purchase_price = $.number($(this).data('purchase_price'), 2);
        let stock = $.number($(this).data('stock'));
        //console.log(id, name, purchase_price);

        $(this).removeClass('btn-success').addClass('btn-default disabled');

        var html =
            `<tr>
                <td>${name}</td>
                <td><input type="number" name="products[${id}][quantity]" data-price="${purchase_price}" class="form-control input-sm product-quantity" min="1" value="1"></td>
                <td class="product-purchase_price">${purchase_price}</td>
                <td><button class="btn btn-danger btn-sm remove-product-btn" data-id="${id}"><span class="fa fa-trash"></span></button></td>
            </tr>`;

        $('.supply-order-list').append(html);

        //to calculate total price
        calculateTotal();
    });

    //disabled btn
    $('body').on('click', '.disabled', function (e) {

        e.preventDefault();
        // alert('disabled');

    });//end of disabled

    //remove product btn
    $('body').on('click', '.remove-product-btn', function (e) {

        e.preventDefault();
        // alert('remove clicked');

        var id = $(this).data('id');
        // console.log(id);

        $(this).closest('tr').remove();
        $('#product-' + id).removeClass('btn-default disabled').addClass('btn-success');

        //to calculate total price
        calculateTotal();

    });//end of remove product btn


    //change product quantity
    $('body').on('keyup change', '.product-quantity', function () {
        // alert($(this).val());

        let quantity = Number($(this).val()); //2
        let unitPrice = parseFloat($(this).data('price').replace(/,/g, '')); //150
        // console.log(unitPrice);

        // console.log(quantity, unitPrice);

        $(this).closest('tr').find('.product-purchase_price').html($.number(quantity * unitPrice, 2));
        calculateTotal();

    });//end of product quantity change


    //list all products of a supply order (Show Supply Order)
    $('.supply_order-products').on('click', function (e) {

        e.preventDefault();
        // alert('clicked');

        $('#loading').css('display', 'flex');

        let url = $(this).data('url');
        // console.log(url);
        let method = $(this).data('method');

        $.ajax({
            url: url,
            method: method,
            success: function (data) {
                // console.log(data);

                $('#loading').css('display', 'none');
                $('#supply_order-product-list').empty();
                $('#supply_order-product-list').append(data);

            }
        })


    });//end of supply order products click


});//end of document ready


//calculate the total
function calculateTotal() {

    var price = 0;

    $('.supply-order-list .product-purchase_price').each(function (index) {
        // Search -> how to convert string with comma to number in javascript  ----> let output = parseFloat("2,299.00".replace(/,/g, ''));
        price += parseFloat($(this).html().replace(/,/g, ''));
    });//end of product price
    // alert(price);
    // console.log(price);

    $('.total-price').html($.number(price, 2));

    //check if price > 0   To Submit The Order
    if (price > 0) {

        $('#add-supply_order-form-btn').removeClass('disabled')

    } else {

        $('#add-supply_order-form-btn').addClass('disabled')

    }//end of else

}//end of calculate total


/*
//print order
$(document).on('click', '.print-btn', function () {

    $('#print-area').printThis();

});//end of click function


});//end of document ready


*/
