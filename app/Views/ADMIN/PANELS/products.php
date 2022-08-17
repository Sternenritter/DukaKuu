<div class=" w-75 h-custom-fit bg-yellow panel g-1" id="products-panel">
    <div class="ud panel-head aic py-4 txt-uc w-100 ">
        <h2>PRODUCTS</h2>
        <span class="line-dark"></span>
    </div>
    <div class="users-tbl h-75 ud aic w-100">
        <table class="w-100">
            <thead>
                <tr>
                    <th>#</th>
                    <th>PRODUCT PHOTO</th>
                    <th>PRODUCT NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>OPTIONS</th>
                </tr>
            </thead>
            <tbody class="tbody">
                <tr>
                    <td>PRD12</td>
                    <td><img src="assets/fashion1.jpg" alt="" class="img-tbl"></td>
                    <td>ITEM NAME</td>
                    <td>$ 500 . 00</td>
                    <td>300</td>
                    <td>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="add-user w-50 p-4">
        <button class="btn btn-secondary w-50" onclick="showModule()">Add Item</button>
    </div>
    <div class="add-products w-100 aic jcc" id="add-products-module">
        <div class="bg-white p-4 s-in w-50 br-5 h-fit p-absolute">
            <div class="header ud w-100">
                <div class="lr jsb w-100">
                    <h3>ADD PRODUCTS</h3>
                    <button class="btn btn-danger px-3" onclick="closeModule()"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <span class="line-dark"></span>
            </div>
            <form class="ud w-100 py-2">
                <div class="lr">
                    <div class="ud w-50">
                        <div class="ud w-100">
                            <label for="item-name">Item name:</label>
                            <input type="text" name="" id="item-name" class="form-control" placeholder="Enter the item name here">
                        </div>
                        <div class="ud w-100 py-2">
                            <label for="item-quantity">Quantity in stock:</label>
                            <input type="number" name="" id="item-quantity" class="form-control" placeholder="Enter item quantity in stock here">
                        </div>
                        <div class="ud w-100 py-2">
                            <label for="item-price">Item Price:</label>
                            <input type="number" name="" id="item-price" class="form-control" placeholder="Enter item price here">
                        </div>
                    </div>
                    <div class="item-photo w-50 ud aic py-2 ">
                        <img src="assets/search.png" alt="" class="img-lg bd-dark my-2 image_preview">
                        <input type="file" name="item_img" class="form-control w-50" id="item_img" accept="Image/*">
                    </div>
                </div>

                <button type="button" class="btn btn-primary w-100">Add Product</button>
            </form>
        </div>
    </div>
</div>