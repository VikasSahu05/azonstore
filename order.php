
<?php include("view/header.php");?>
<?php include("view/connection.php");?>
<?php
if($_GET){
    $id=intval($_GET['id']);
    $query = "SELECT name FROM  user where id='$id'";
    $result=mysqli_query($conn,$query);
    // var_dump($result);
    $userNameArray=mysqli_fetch_assoc($result);
    $name=$userNameArray["name"];

    $queryOrder="SELECT * FROM customer_orders WHERE customer_id='$id'";
    $result1=mysqli_query($conn,$queryOrder);
    // var_dump($result1);
    $count=mysqli_num_rows($result1);
    $userOrderArray=mysqli_fetch_all($result1, MYSQLI_ASSOC);
    // for($j=0;$j<$count;$j++){
    //     var_dump($userOrderArray[$j]);
    // }    
}
?>
<div class="container-fluid  d-flex justify-content-center">
    <div class="card card-1 w-100">
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse text-center ">
                <div class="col my-auto">
                    <h4 class="mb-0">Thanks for your Order,<span class="change-color"><?=$name?></span> !</h4>
                </div>
            </div>
        </div>
        <?php
        for($i=0;$i<$count;$i++)
        {
        ?>
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-auto">
                    <h6 class="color-1 mb-0 change-color">Receipt</h6>
                    <p class="mb-0">Order Status : <?=$userOrderArray[$i]["order_status"]?></p> 
                </div>
                
                <div class="col-auto "> 
                    <p class="mb-0">Invoice Date : <?=$userOrderArray[$i]["order_date"]?></p>    
                    <small>Invoice No : <?=$userOrderArray[$i]["invoice_no"]?></small>
                    <div>
                    <small>Voucher : <?=$userOrderArray[$i]["invoice_no"]?></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-2">
                        <div class="card-body">
                            <div class="media">
                                <div class="sq align-self-center "> <img class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="https://i.imgur.com/RJOW4BL.jpg" width="135" height="135" /> </div>
                                <div class="media-body my-auto text-right">
                                    <div class="row my-auto flex-column flex-md-row">
                                        <div class="col my-auto">
                                            <h6 class="mb-0"> Jack Jacs</h6>
                                        </div>
                                        <div class="col-auto my-auto"> <small>Golden Rim </small></div>
                                        <div class="col my-auto"> <small>Size : <?=$userOrderArray[$i]["size"]?></small></div>
                                        <div class="col my-auto"> <small>Qty :<?=$userOrderArray[$i]["qty"]?></small></div>
                                        <div class="col my-auto">
                                            <h6 class="mb-0">&#8377;<?=$userOrderArray[$i]["due_amount"]?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <hr class="my-3 ">
                            <div class="row">
                                <div class="col-md-3 mb-3"> <small> Track Order <span><i class=" ml-2 fa fa-refresh" aria-hidden="true"></i></span></small> </div>
                                <div class="col mt-auto">
                                    <div class="progress my-auto">
                                        <div class="progress-bar progress-bar rounded" style="width: 62%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="media row justify-content-between ">
                                        <div class="col-auto text-right"><span> <small class="text-right mr-sm-2"></small> <i class="fa fa-circle active"></i> </span></div>
                                        <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for delivary</small><i class="fa fa-circle active"></i></span></div>
                                        <div class="col-auto flex-col-auto"><small class="text-right mr-sm-2">Delivered</small><span> <i class="fa fa-circle"></i></span></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
        <!-- <div>
            <div class="row mt-4">
                <div class="col">
                    <div class="row">
                        <div class="col-auto">
                            <p class="mb-1 text-dark"><b>Order Details</b></p>
                        </div>
                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"><b>Total</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">&#8377;4,835</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"> <b>Discount</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">&#8377;150</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"><b>GST 18%</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">843</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"><b>Delivery Charges</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">Free</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="card-footer">
            <div class="jumbotron-fluid">
                <div class="row justify-content-between ">
                    <div class="col-sm-auto col-auto my-auto"><img class="img-fluid my-auto align-self-center " src="https://i.imgur.com/7q7gIzR.png" width="115" height="115"></div>
                    <div class="col-auto my-auto ">
                        <h2 class="mb-0 font-weight-bold">TOTAL PAID</h2>
                    </div>
                    <div class="col-auto my-auto ml-auto">
                        <h1 class="display-3 ">&#8377; 5,528</h1>
                    </div>
                </div>
                <div class="row mb-3 mt-3 mt-md-0">
                    <div class="col-auto border-line"> <small class="text-white">PAN:AA02hDW7E</small></div>
                    <div class="col-auto border-line"> <small class="text-white">CIN:UMMC20PTC </small></div>
                    <div class="col-auto "><small class="text-white">GSTN:268FD07EXX </small> </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<?php include("view/footer.php")?>