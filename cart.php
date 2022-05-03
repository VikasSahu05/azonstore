<?php include("view/header1.php");?>

<body>

    <div class="container shadow my-5">
        <h1 class="p-2 text-uppercase">Shopping Cart</h1>
        <hr/>
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-9 p-1 shadow">
                <div class="row align-items-center p-2">
                    <div class="col-12 col-lg-3 p-1 text-center">
                        <img src="img/imgg/dress.png"  class="img-thumbnail w-50" alt="">
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quia autem exercitationem.</strong></p>
                        <span class="text-success">In stock</span><br>
                        <span><strong>Color Name :</strong>Red</span><br>
                        <div class="d-flex flex-row  p-1">
                            <select  name="" id="">
                                <option disabled selected>Qty</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <a href="" class="border-right p-1">Delete</a>
                            <a href="" class="border-right p-1">Save for later</a>
                            <a href="" class="p-1">See more like this</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <strong>Rs. 122</strong>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center p-2">
                    <div class="col-12 col-lg-3 p-1 text-center">
                        <img src="img/imgg/dress.png"  class="img-thumbnail w-50" alt="">
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quia autem exercitationem.</strong></p>
                        <span class="text-success">In stock</span><br>
                        <span><strong>Color Name :</strong>Red</span><br>
                        <div class="d-flex flex-row p-1">
                            <select  name="" id="">
                                <option disabled selected>Qty</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <a href="#" class="border-right p-1">Delete</a>
                            <a href="#" class="border-right p-1">Save for later</a>
                            <a href="#" class="p-1">See more like this</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <strong>Rs. 122</strong>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 p-1 text-center">
                    <h3><strong>Subtotal (2 items) : Rs. 500</strong></h3>
                    <button class="btn btn-warning">Proceed to Buy</button>
            </div>
        </div>
    </div>
    <?php include("view/footer.php"); ?>

</body>
</html>