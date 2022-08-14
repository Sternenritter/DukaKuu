<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
</head>

<body>
    <?php include("components/navbar_sc.php"); ?>

    <section class="cart-body ud aic bg-dark h-test color-dark">
        <div class="ud w-100 jcc aic p-4">
            <h2>CART</h2>
            <span class="line-dark"></span>
        </div>
        <div class="lr w-100 px-4">
            <div class="w-custom-table table-container color-dark">
                <table class="w-100 color-dark">
                    <thead class="py-custom">
                        <tr class="py-4 aic tac jcc">
                            <th>ITEM</th>
                            <th>DESCRIPTION</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
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
        </div>

    </section>
</body>

</html>