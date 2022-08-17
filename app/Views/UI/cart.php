<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
</head>

<body>
    <?php include("components/navbar_sc.php"); ?>

    <section class="cart-body ud aic custom-dark h-fit color-dark py-4 w-100">
        <div class="ud w-100 jcc aic p-4">
            <h2>CART</h2>
            <span class="line-dark"></span>
        </div>
        <div class="lr w-100 jsb px-4 py-1">
            <div class="w-custom-table table-container color-dark h-70 px-4">
                <table class="w-100 color-dark">
                    <thead class="py-custom">
                        <tr class="aic tac jcc">
                            <th class="py-2">ITEM</th>
                            <th class="py-2">DESCRIPTION</th>
                            <th class="py-2">QUANTITY</th>
                            <th class="py-2">PRICE</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr class="py-4 aic tac jcc">
                            <td class="w-15-vw ">
                                <div class="ud g-1 jcc aic p-4">
                                    <img src="assets/fashion2.jpg" alt="" class="img-cart">
                                    <h4>LOOKU MOTO</h4>
                                </div>
                            </td>
                            <td class="w-15-vw">
                                <h4>Made in Italy</h4>
                            </td>
                            <td>
                                <h4>2</h4>
                            </td>
                            <td>
                                <h4> $ 50.00</h4>
                            </td>
                            <td>
                                <div class="lr g-1 jcc aic">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-custom-30 color-dark h-fit px-4 ud aic g-5">
                <div class="ud jcc aic w-100">
                    <h3> CHECKOUT</h3>
                    <span class="line-dark"></span>
                </div>
                <div class="px-4 ud w-100 g-1">
                    <div class="lr w-100 jsb">
                        <h3>TOTAL PRICE:</h3>
                        <h3>$ 500 . 00</h3>
                    </div>
                    <div class="lr w-100 jsb">
                        <h3>DISCOUNT:</h3>
                        <h3>$ 20 . 00</h3>
                    </div>
                    <div class="lr w-100 jsb">
                        <h3>DELIVERY FEE:</h3>
                        <h3>$ 7 . 50</h3>
                    </div>
                    <div class="lr w-100 jsb">
                        <h3>TOTAL PAYABLE:</h3>
                        <h3>$ 512 . 50</h3>
                    </div>
                </div>
                <div class="ud w-100 jcc aic">
                    <h4>By proceeding with payments you agree with our</h4>
                    <h4 class="color-blue">TERMS & CONDITIONS</h4>
                </div>
                <!-- <div class="ud g-1 aic">
                    <button class="visa">
                        <img src="assets/visa.png" class="img-xsm" alt="">
                    </button>
                </div> -->

                <div class="ud aic w-100 jcc">
                    <div class="m-2 md:m-4 w-75" id="paypal-button-container">
                    </div>
                    <a href="store" class="w-75">
                        <button class="btn btn-outline-secondary w-100">
                            Continue shopping
                        </button>
                    </a>

                </div>
            </div>
        </div>

    </section>

    <?php include("components/footer.php"); ?>
    <script src="https://www.paypal.com/sdk/js?client-id=AQ5nbfdM6A7AmySBZIzeYIOEESlWbVgVOHkFL4dOUZiPCZl_IlwIv7VBrJ9u8trzWhGRo75ITP1RGw9B&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
    <script>
        //var total = ((document.querySelector(".order-total").value)*0.0086);
        var total = 8;

        function initPayPalButton() {
            paypal.Buttons({
                style: {
                    shape: 'rect',
                    color: 'gold',
                    layout: 'vertical',
                    label: 'paypal',

                },

                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            "amount": {
                                "currency_code": "USD",
                                "value": total,
                            }
                        }]
                    });
                },

                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(orderData) {
                        $.ajax({
                            type: 'post',
                            url: 'placeOrder.php',
                            success: function(xhr) {
                                //const message = (JSON.parse(xhr.responseText))["message"];
                                /*if(confirm("Order has been completed, redirecting you to homepage...") == true){
                                    location.assign("http://localhost/GreenSoko/PRODUCT_MODULE/locations.php");
                                }*/
                                location.assign("../PRODUCT_MODULE/locations.php");
                                alert('Order has been completed');
                                //location.assign("http://localhost/GreenSoko/PRODUCT_MODULE/locations.php")
                                //const message = (JSON.parse(xhr.responseText))["message"];
                                //alert(message);
                            },
                            error: function(xhr) {
                                const message = (JSON.parse(xhr.responseText))["message"];
                                console.log(message);
                            }
                        });
                        // Full available details
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                        /*$.ajax({
                            type: 'post',
                            url: 'placeOrder.php',
                            success: function (xhr) {
                                //const message = (JSON.parse(xhr.responseText))["message"];
                                if(confirm("Order has been completed, redirecting you to homepage...") == true){
                                    location.assign("http://localhost/GreenSokoUpdate/locations.php")
                                }
                            },
                            error: function (xhr) {
                                const message = (JSON.parse(xhr.responseText))["message"];
                                console.log(message);
                            }
                        });*/
                        // Show a success message within this page, e.g.
                        // const element = document.getElementById('paypal-button-container');
                        // element.innerHTML = '';
                        // alert("Payment Successful");

                        // Or go to another URL:  actions.redirect('thank_you.html');

                    });
                },

                onError: function(err) {
                    console.log(err);
                }
            }).render('#paypal-button-container');
        }
        initPayPalButton();
    </script>
</body>

</html>