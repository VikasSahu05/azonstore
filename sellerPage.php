<?php
 include("view/header1.php");
 include("view/connection.php");
?>
<div class="container">
    <div class="row float-end">
        <div class="border rounded-pill w-100 m-1 bg-light">
            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> 
                
                <div>
                <label class=" bg-warning m-2 p-2 border-1 rounded-pill">Be a Seller of Azonestore</label>
                    <label class=" bg-warning m-2 p-2 border-1 rounded-pill seller-btn">start Selling</label>
                </div>
            </a>
        </div>
    </div>
    <div class="collapse m-3" id="collapseExample">
        <div class="card card-body">
        <form id="seller_form" method="POST" action="view/sellerData.php">
            <div class="form-group">
                <label for="seller_name">Name of your Store</label>
                <input type="name" required class="form-control seller_name" id="seller_name" minlength="3" maxlength="50"   name="seller_name" aria-describedby="emailHelp" placeholder="Shop Name" oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '').replace(/(\..*?)\..*/g, '$1');">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Product Category</label>
                <select class="custom-select" required name="seller_category" >
                    <option value="" selected>Select Product Category</option>
                    <option value="clothing">Clothing</option>
                    <option value="books">Book</option>
                    <option value="electronics">Electronics</option>
                    <option value="household">Household</option>
                    <option value="decoration">Decoration</option>
                    <option value="furniture">Furniture</option>
                    <option value="stationary">Stationary</option>
                    <option value="devotion">Devotion</option>
                </select>
            </div>
            <div class="form-group">
                <label for="seller_phone">Contact Number</label>
                <input type="tel" required  class="form-control" id="seller_phone" minlength="10" maxlength="10" name="seller_phone" aria-describedby="phoneHelp" placeholder="Contact Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
            </div>
            <div class="form-group">
                <label for="seller_email">Gmail Id</label>
                <input type="email" required  class="form-control" id="seller_email" name="seller_email" aria-describedby="seller_email" placeholder="Email Id">
            </div>
            <div class="form-group">
                <label for="seller_aadhar">Aadhar Number</label>
                <input type="text" required  class="form-control" maxlength="12" minlength="12" id="seller_aadhar" name="seller_aadhar" aria-describedby="seller_aadhar" placeholder="Aadhar Number">
            </div>
            <div class="form-group">
                <label for="seller_pan">PAN Number</label>
                <input type="text" required  class="form-control" maxlength="10" minlength="10" id="seller_pan" name="seller_pan" aria-describedby="seller_pan" placeholder="PAN Number">
            </div>
            <div class="form-group">
                <label for="seller_gst">GST Number(Optional)</label>
                <input type="text" class="form-control" id="seller_gst" name="seller_gst" aria-describedby="seller_gst" placeholder="GST Number">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" required  class="form-check-input" id="seller_tc" name="seller_tc">
                <label class="form-check-label" for="seller_tc">Agree with All the <a href="#" class="text-warning">terms & conditions</a></label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
<div class="row justify-content-center m-5">
    <div class="col-10 d-flex center">
        <p class="h3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, id possimus. Ullam beatae corporis eos necessitatibus? Est, temporibus deleniti dolores animi nesciunt amet in non fuga, omnis impedit, doloribus labore.
        </p>
        <div>
        <img class="img-responsive" src="asscet/img/image-asset.png">
        </div>    
    </div>
</div>
<div class="row d-flex justify-content-around m-5">
    <div class="card col-3">
        <div class="card-body">
            <i class="fa fa-phone h1"></i>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, id possimus. Ullam beatae corporis eos necessitatibus? Est, temporibus deleniti dolores animi nesciunt amet in non fuga, omnis impedit, doloribus labore.
            </p>
        </div>
    </div>
    <div class="card col-3">
        <div class="card-body">
        <i class="fa fa-info-circle h1"></i>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, id possimus. Ullam beatae corporis eos necessitatibus? Est, temporibus deleniti dolores animi nesciunt amet in non fuga, omnis impedit, doloribus labore.
        </p>
        </div>
    </div>
    <div class="card col-3">
        <div class="card-body">
        <i class="fa fa-plane h1"></i>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, id possimus. Ullam beatae corporis eos necessitatibus? Est, temporibus deleniti dolores animi nesciunt amet in non fuga, omnis impedit, doloribus labore.
        </p>
        </div>
    </div>

</div>

<?php include("view/footer.php");?>
<script>
    $(document).ready(function(){
        $("#seller_form").validate();
    });

    $.ajax({

    })
</script>