$(document).ready(function () {

    //add product btn
    $('.add-product-btn-s').on('click', function (e) {

        e.preventDefault();
        var name = $(this).data('name');
        var id = $(this).data('id');
        var price = $.number($(this).data('price'), 2);
        var stock = $.number($(this).data('stock'));

        $(this).removeClass('btn-success').addClass('btn-default disabled');

        var html =
            `<tr>
                <td>${name}</td>
                <td><input type="number" name="products[${id}][quantity]" data-price="${price}" class="form-control input-sm product-quantity" min="1" max="${stock}" value="1"></td>
                <td class="product-price">${price}</td>
                <td><button class="btn btn-danger btn-sm remove-product-btn" data-id="${id}"><span class="fa fa-trash"></span></button></td>
            </tr>`;

        $('.order-list').append(html);


        //to calculate total price
        calculateTotal1();
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
        calculateTotal1();

    });//end of remove product btn


    //change product quantity
    $('body').on('keyup change', '.product-quantity', function () {
        // alert($(this).val());

        var quantity = Number($(this).val()); //2
        var unitPrice = parseFloat($(this).data('price').replace(/,/g, '')); //150
        // console.log(unitPrice);

        $(this).closest('tr').find('.product-price').html($.number(quantity * unitPrice, 2));
        calculateTotal1();

    });//end of product quantity change


    //list all products of an order (Show order products)
    $('.order-products').on('click', function (e) {

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
                $('#order-product-list').empty();
                $('#order-product-list').append(data);

            }
        })

    });//end of order products click


    //print order
    $(document).on('click', '.print-btn', function () {

        $('#print-area').printThis();

    });//end of click function


});//end of document ready


//calculate the total
function calculateTotal1() {

    var price = 0;

    $('.order-list .product-price').each(function (index) {
        // Search -> how to convert string with comma to number in javascript  ----> let output = parseFloat("2,299.00".replace(/,/g, ''));
        price += parseFloat($(this).html().replace(/,/g, ''));
    });//end of product price
    // alert(price);
    // console.log(price);

    $('.total-price-s').html($.number(price, 2));

    //check if price > 0
    if (price > 0) {

        $('#add-order-form-btn').removeClass('disabled')

    } else {

        $('#add-order-form-btn').addClass('disabled')

    }//end of else

}//end of calculate total
