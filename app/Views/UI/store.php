<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
</head>

<body>
    <?php include("components/navbar_sc.php"); ?>
    <section class="ud custom-dark h-fit aic w-100 py-2">

        <div class="categories-btns ud w-100 aic py-4">
            <div class="lr jcc aic nav-categories">
                <!-- <button class="btn-ctg active txt-uc">NEW ARRIVALS</button>
                <button class="btn-ctg txt-uc">MENSWEAR</button>
                <button class="btn-ctg txt-uc">LADIESWEAR</button>
                <button class="btn-ctg txt-uc">KIDS</button> -->
            </div>
            <span class="line-top"></span>
        </div>
        <div class="grid-layout w-100 g-1 aic jcc products-container">
            <div class="item-card ud br-yellow w-fit jssc">
                <img src="assets/fashion1.jpg" alt="" class="img-display">
                <div class="ud bg-yellow py-4 px-3 w-100 g-1">
                    <h3><b>ITEM NAME</b></h3>
                    <span class="line"></span>
                    <!-- <div class="colors">

                    </div> -->
                    <div class="lr jsb">
                        <div class="lr counter">
                            <button class="btn btn-dark">-</button>
                            <h4 class="px-4 py-0 m-0">1</h4>
                            <button class="btn btn-dark">+</button>
                        </div>
                        <div class="lr aic">
                            <button class="btn btn-dark lr aic jcc g-1">
                                Add to cart
                                <span class="material-symbols-outlined">shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-card ud br-yellow w-fit jssc">
                <img src="assets/fashion1.jpg" alt="" class="img-display">
                <div class="ud bg-yellow py-4 px-3 w-100 g-1">
                    <h3><b>ITEM NAME</b></h3>
                    <span class="line"></span>
                    <!-- <div class="colors">

                    </div> -->
                    <div class="lr jsb">
                        <div class="lr counter">
                            <button class="btn btn-dark">-</button>
                            <h4 class="px-4 py-0 m-0">1</h4>
                            <button class="btn btn-dark">+</button>
                        </div>
                        <div class="lr aic">
                            <button class="btn btn-dark lr aic jcc g-1">
                                Add to cart
                                <span class="material-symbols-outlined">shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-card ud br-yellow w-fit jssc">
                <img src="assets/fashion1.jpg" alt="" class="img-display">
                <div class="ud bg-yellow py-4 px-3 w-100 g-1">
                    <h3><b>ITEM NAME</b></h3>
                    <span class="line"></span>
                    <!-- <div class="colors">

                    </div> -->
                    <div class="lr jsb">
                        <div class="lr counter">
                            <button class="btn btn-dark">-</button>
                            <h4 class="px-4 py-0 m-0">1</h4>
                            <button class="btn btn-dark">+</button>
                        </div>
                        <div class="lr aic">
                            <button class="btn btn-dark lr aic jcc g-1">
                                Add to cart
                                <span class="material-symbols-outlined">shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-card ud br-yellow w-fit jssc">
                <img src="assets/fashion1.jpg" alt="" class="img-display">
                <div class="ud bg-yellow py-4 px-3 w-100 g-1">
                    <h3><b>ITEM NAME</b></h3>
                    <span class="line"></span>
                    <!-- <div class="colors">

                    </div> -->
                    <div class="lr jsb">
                        <div class="lr counter">
                            <button class="btn btn-dark">-</button>
                            <h4 class="px-4 py-0 m-0">1</h4>
                            <button class="btn btn-dark">+</button>
                        </div>
                        <div class="lr aic">
                            <button class="btn btn-dark lr aic jcc g-1">
                                Add to cart
                                <span class="material-symbols-outlined">shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-card ud br-yellow w-fit jssc">
                <img src="assets/fashion1.jpg" alt="" class="img-display">
                <div class="ud bg-yellow py-4 px-3 w-100 g-1">
                    <h3><b>ITEM NAME</b></h3>
                    <span class="line"></span>
                    <div class="lr jsb">
                        <div class="lr counter">
                            <button class="btn btn-dark">-</button>
                            <h4 class="px-4 py-0 m-0">1</h4>
                            <button class="btn btn-dark">+</button>
                        </div>
                        <div class="lr aic">
                            <button class="btn btn-dark lr aic jcc g-1">
                                Add to cart
                                <span class="material-symbols-outlined">shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-card ud br-yellow w-fit jssc">
                <img src="assets/fashion1.jpg" alt="" class="img-display">
                <div class="ud bg-yellow py-4 px-3 w-100 g-1">
                    <h3><b>ITEM NAME</b></h3>
                    <span class="line"></span>
                    <!-- <div class="colors">

                    </div> -->
                    <div class="lr jsb">
                        <div class="lr counter">
                            <button class="btn btn-dark">-</button>
                            <h4 class="px-4 py-0 m-0">1</h4>
                            <button class="btn btn-dark">+</button>
                        </div>
                        <div class="lr aic">
                            <button class="btn btn-dark lr aic jcc g-1">
                                Add to cart
                                <span class="material-symbols-outlined">shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <?php include("components/footer.php"); ?>
</body>
<script>
    $(document).ready(function() {
        getDisplayCategories();
    });

    function getDisplayCategories() {
        
        $.ajax({
            url: '<?= base_url('getCategories') ?>',
            type: 'GET',
            success: function(response) {
                $('.nav-categories').html('');            
                $.each(response.categories, function(key, value) {
                    if (key == Object.keys(response.categories)[0]) {
                        $('.nav-categories').append(`<button data-category_id="` + value.category_id + `" class="btn-ctg txt-uc active">` + value.category_name + `</button>`);
                        displayProductsByCategory(value.category_id)
                    } else {
                        $('.nav-categories').append(`<button data-category_id="` + value.category_id + `" class="btn-ctg txt-uc">` + value.category_name + `</button>`);
                    }
                });
            }
        })
    }



    function displayProductsByCategory(category_id) {
        $.ajax({
            url: '<?= base_url('getProductsByCategory') ?>',
            type: 'POST',
            data: {
                category_id: category_id
            },
            success: function(response) {
                $('.products-container').html('');
                console.log(response);
                $.each(response.products, function(key, value) {
                    $('.products-container').append(
                        `<div class="item-card ud br-yellow w-fit jssc">
                            <img src="<?= base_url() ?>/` + value.image_path + `" alt="" class="img-display">
                            <div class="ud bg-yellow py-4 px-3 w-100 g-1">
                                <h3><b>` + value.product_name + `</b></h3>
                                <span class="line"></span>
                                <div class="lr jsb">
                                    <div class="lr counter">
                                        <button class="btn btn-dark">-</button>
                                        <h4 class="px-4 py-0 m-0">1</h4>
                                        <button class="btn btn-dark">+</button>
                                    </div>
                                    <div class="lr aic">
                                        <button class="btn btn-dark lr aic jcc g-1">
                                            Add to cart
                                            <span class="material-symbols-outlined">shopping_cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>`);
                });
            }
        })
    }
    $(document).on('click', '.btn-ctg', function() {
        $('.btn-ctg.active').removeClass("active");
        $(this).addClass('active');
        displayProductsByCategory($(this).data('category_id'))
    });
</script>

</html>