<div class=" w-75 h-custom-fit bg-yellow panel g-1" id="user-panel">
    <div class="ud panel-head aic py-4 txt-uc w-100 ">
        <h2>USERS</h2>
        <span class="line-dark"></span>
    </div>
    <div class="users-tbl h-75 ud aic w-100">
        <table class="w-100">
            <thead>
                <tr>
                    <th>#</th>
                    <th>PROFILE PHOTO</th>
                    <th>USERNAME</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE NUMBER</th>
                    <th>OPTIONS</th>
                </tr>
            </thead>
            <tbody class="tbody">
                <tr>
                    <td>USR12</td>
                    <td><img src="assets/teen.png" alt="" class="img-xxsm"></td>
                    <td>SIR DEEZ</td>
                    <td>JOHNSON WANGENGI</td>
                    <td>johnsonwangengi@gmail.com</td>
                    <td>(+254)714 165-105 </td>
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
        <button class="btn btn-primary w-50" onclick="showUserModule()">Add User</button>
    </div>
    <div class="add-products w-100 aic jcc" id="add-users-module">
        <div class="bg-white p-4 s-in w-50 br-5 h-fit p-absolute">
            <div class="header ud w-100">
                <div class="lr jsb w-100">
                    <h3>ADD USER</h3>
                    <button class="btn btn-danger px-3" onclick="closeUserModule()"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <span class="line-dark"></span>
            </div>
            <form class="ud w-100 py-2">
                <div class="ud w-75">
                    <small class="form-text text-muted">The default user profile will be used. Any edits should be done on the user profile section.</small>
                </div>
                <div class="ud w-100">
                    <label for="user-name">User name:</label>
                    <input type="text" name="" id="user-name" class="form-control" placeholder="Enter the user name here">
                </div>
                <div class="ud w-100 py-2">
                    <label for="user-email">User Email:</label>
                    <input type="email" name="" id="user-email" class="form-control" placeholder="Enter user email">
                </div>
                <div class="ud w-100 py-2">
                    <label for="phone-number">Phone Number:</label>
                    <input type="number" name="" id="phone-number" class="form-control" placeholder="Enter user phone number here">
                </div>
                <div class="ud w-100 py-2">
                    <label for="user-password">Default user password:</label>
                    <input type="password" name="" id="user-password" class="form-control" placeholder="Enter default user password here">
                    <small class="form-text text-muted"><b>Suggestion :</b> Use an easy to remember password <i>eg. Password123 </i></small>
                </div>

                <!-- <div class="item-photo w-50 ud aic py-2 ">
                        <img src="assets/search.png" alt="" class="img-lg bd-dark my-2 image_preview">
                        <input type="file" name="item_img" class="form-control w-50" id="item_img" accept="Image/*">
                    </div> -->


                <button type="button" class="btn btn-primary w-100">Add Product</button>
            </form>
        </div>
    </div>

</div>