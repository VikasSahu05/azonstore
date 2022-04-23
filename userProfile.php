<link rel="stylesheet" href="css/sidebar.css">
<?php include("view/header.php");
if($_GET){
    intval($_GET["id"]);
    $id=$conn -> real_escape_string($_GET["id"]);
    $query = "SELECT * FROM  user where id='$id'";
    $result1 =mysqli_query($conn,$query);
    $userDataArray=mysqli_fetch_assoc($result1);
    // var_dump($userDataArray);
    
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
    <div class="vertical-tabs">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home"><i class="fa fa-first-order icon"><span class="m-2">Order</span></i></a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag2" role="tab" aria-controls="profile"><i class="fa fa-first-order icon"></i><span class="m-2">Edit profile</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages"><i class="fa fa-first-order icon"></i><span class="m-2">Change Address</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="settings"><i class="fa fa-trophy icon" aria-hidden="true"></i><span class="m-2">Rewards</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="settings"><i class="fa fa-heart icon" aria-hidden="true"></i><span class="m-2">Wishlis</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag6" role="tab" aria-controls="settings">about</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" aria-controls="settings">Support</a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="pag1" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>TAB 1</h3>
            <p>CONTEUDO 1</p>
          </div>
        </div>
        <div class="tab-pane" id="pag2" role="tabpanel">
          <div class="sv-tab-panel">
            <form id="signUpform">
                    <div class="row">
                        <div class="ml-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="hidden" class="hidden1" id="hidden1" name="hidden1" value="<?=$userDataArray["id"]?>">
                            <input type="name" class="form-control editUser" id="updateName" name="updateName" placeholder="Name" value="<?=$userDataArray["name"]?>">
                            <div id="errorname" class="error mt-2" style="color:red"></div>
                        </div>
                        <div class="ml-2">                        
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="mobile" class="form-control editUser" id="updatePhone" name="updatePhone" placeholder="Phone Number" value="<?=$userDataArray["phone"]?>">
                            <div id="errorphone" class="error mt-2" style="color:red"></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="ml-2">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control editUser" id="updateEmail" name="updateEmail" placeholder="Email Address" value="<?=$userDataArray["email"]?>">
                            <div id="erroremail" class="error mt-2" style="color:red"></div>
                        </div>
                        <div class="ml-2">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control editUser" id="updatePass" name="updatePass" placeholder="Password" value="<?=$userDataArray["pass"]?>">
                            <div id="errorpass" class="error mt-2" style="color:red"></div>
                        </div>
                    </div>
            </form>
            <button type="button"  class="btn btn-success mt-4" onclick='update()'>Update Profile</button>
          </div>
        </div>
        <div class="tab-pane" id="pag3" role="tabpanel">
          <div class="sv-tab-panel">
                <form>
                    <div class="mb-3">

                        <label for="pass" class="form-label">Address</label>
                        <input type="hidden" class="hidden" id="hidden" name="hidden" value="<?=$userDataArray["id"]?>">
                        <input type="address" class="form-control" id="updateAddress" name="updateAddress" placeholder="Address" value="<?=$userDataArray["user_address"]?>">
                        <div id="errorAddress" class="error mt-2" style="color:red"></div>
                    </div>
                    <div class="row">
                        <div class="ml-2">
                            <label for="pass" class="form-label">City</label>
                            <input type="City" class="form-control editUser" id="updateCity" name="updateCity" placeholder="City" value="<?=$userDataArray["user_city"]?>">
                            <div id="errorCity" class="error mt-2" style="color:red"></div>
                        </div>
                        <div class="ml-2">
                            <label for="pass" class="form-label">Pin Code</label>
                            <input type="pin" class="form-control editUser" id="updatePin" name="updatePin" placeholder="Pincode" value="<?=$userDataArray["user_pincode"]?>">
                            <div id="errorPin" class="error mt-2" style="color:red"></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                    <div class="ml-2">
                        <label for="pass" class="form-label">State</label>
                        <input type="state" class="form-control editUser" id="updateState" name="updateState" placeholder="State" value="<?=$userDataArray["user_state"]?>">
                        <div id="errorState" class="error mt-2" style="color:red"></div>
                    </div>
                    <div class="ml-2">
                        <label for="pass" class="form-label">Country</label>
                        <input type="country" class="form-control editUser" id="updateCountry" name="updateCountry" placeholder="Country" value="<?=$userDataArray["user_country"]?>">
                        <div id="errorCountry" class="error" style="color:red"></div>
                    </div>

                    </div>
                </form>
                <button type="button"  class="btn btn-success mt-4" onclick='updateAddress()'>Update Address</button>
          </div>
        </div>
        <div class="tab-pane" id="pag4" role="tabpanel">
          <div class="sv-tab-panel">
           <h3>TAB 4</h3>
            <p>CONTEUDO 4</p>
          </div>
        </div>

        <div class="tab-pane" id="pag5" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>TAB 5</h3>
            <p>CONTEUDO 5</p>
          </div>
        </div>

        <div class="tab-pane" id="pag6" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>TAB 6</h3>
            <p>CONTEUDO 6</p>
          </div>
        </div>

        <div class="tab-pane" id="pag7" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>TAB 7</h3>
            <p>CONTEUDO 7</p>
          </div>
        </div>

      </div>
    </div>
    </div>
</body>
</html> 


<script>
    (function($) {

"use strict";

var fullHeight = function() {

$('.js-fullheight').css('height', $(window).height());
$(window).resize(function(){
$('.js-fullheight').css('height', $(window).height());
});

};
fullHeight();

$('#sidebarCollapse').on('click', function () {
$('#sidebar').toggleClass('active');
});

})(jQuery);

$(document).ready(function(){
$("#close").click(function(){
    $("#editModal").modal('hide');
})
$("#editProfile").click(function(){
    // $("#editModal").modal('show');    
})
});
function update(){
        var id=$("#hidden1").val();
        var name=$('#updateName').val();
        var phone=$('#updatePhone').val();
        var email=$('#updateEmail').val();
        var pass=$('#updatePass').val();
        // console.log(country);
        if(name==""){
			$("#errorname").text("Name Filed Is Blank");
		}
		else{
            $("#errorname").text("");
			if(name!=''&& name.length<=3){
			$("#errorname").text("Name length must be Greater then 3");	
			}
			else{
                $("#errorname").text("");
				if($.isNumeric(name)){
					$("#errorname").text("Filed Doesn't support Integer");	
				}
				else{
                    $("#errorname").text("");
					regexName=/^[a-zA-Z ]*$/
					if(!regexName.test(name)){
						$("#errorname").text("Filed Doesn't special Char");	
					}
					else{
                        $("#errorname").text("");
						if(email==" "){
							$("#erroremail").text("Email Filed Is Blank");
						}
						else{
                            $("#erroremail").text("");
							regex=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
							if(!regex.test(email)){
								$("#erroremail").text("Please Enter Valid Mail");
							}
							else{
                                $("#erroremail").text("");
								if(phone==""){
									$("#errorphone").text("Phone Filed Is Blank");
								}
								else{
                                    $("#errorphone").text("");
									if(phone.length!=10){
										$("#errorphone").text("Please enter 10 Digits For Mobile");
									}
									else{
                                        $("#errorphone").text("");
										regexPhone=/^\d+$/;
										if(!regexPhone.test(phone)){
											$("#errorphone").text("Filed Doesn't Support Characters");
										}
										else{
                                            $("#errorphone").text("");
                                                if(pass==""){
                                                    $("#errorpass").text("Password Field is Empty");
                                                }
                                                else{
                                                    $("#errorpass").text("");
                                                    if(pass.length<8){
                                                        $("#errorpass").text("Password must be Greater Then 8 characters");
                                                    }
                                                    else{
                                                        $("#errorpass").text("");
                                                        passValid=/(?=.*\d)(?=.*[a-z]).{8,}/
                                                        if(!passValid.test(pass)){
                                                            $("#errorpass").text("Password Must Contain one special Char,One Number & character");   
                                                        }
                                                        else{
                                                            $("#errorpass").text("");
                                                        var data={id:id,name:name,phone:phone,email:email,pass:pass}
                                                        $.ajax({
                                                            url : 'view/editUserDetail.php', // url where to submit the request
                                                            type : "POST", // type of action POST || GET
                                                            // contentType: "application/json",
                                                            // dataType : 'JSON', // data type
                                                            // processData:false,
                                                            // contentType:false,
                                                            data : data, // post data || get data
                                                            success : function(resp){
                                                                // console.log(resp);
                                                                var response=JSON.parse(resp);
                                                                console.log(response.name);
                                                                if(resp){
                                                                    swal.fire({
                                                                    title: "Your Profile Has Been Updated",
                                                                    icon: "success",
                                                                    }).then((value)=>{
                                                                        
                                                                        $("#setName").text(response.name);
                                                                        data1={id:id,name:response.name,email:email}
                                                                        $.ajax({
                                                                            url : 'view/header.php', // url where to submit the request
                                                                            type : "POST", // type of action POST || GET
                                                                            data:data1,
                                                                        })
                                                                    })
                                                                }
                                                            }
                                                        });
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
function updateAddress(){
    var id=$('.hidden').val();
    var address=$('#updateAddress').val();
        var city=$('#updateCity').val();
        // console.log(city);
        var state=$('#updateState').val();
        // console.log(state);
        var pin=$('#updatePin').val();
        var country=$('#updateCountry').val();
        if(address==''){
            $("#errorAddress").text("Address Field is Blank");
        }
        else{
            $("#errorAddress").text("");
            if(city==''){
                $("#errorCity").text("City Filed is Blank");
            }
            else{
                $("#errorAddress").text("");
                regexName=/^[a-zA-Z ]*$/
                if(!regexName.test(city)){
                    $("#errorCity").text("Fill Proper City Name");
                }
                else{
                    $("#errorCity").text("");
                    if(pin==''){
                        $("#errorPin").text("Pincode is Blank");
                    }
                    else{
                        $("#errorPin").text("");
                        if(pin.length!=6){
                            $("#errorPin").text("Pincode Must be of 6 Digits");
                        }
                        else{
                        $("#errorPin").text("");
                            regexPhone=/^\d+$/;
                            if(!regexPhone.test(pin)){
                                $("#errorPin").text("Fill Proper Pincode");
                            }
                            else{
                                $("#errorPin").text("");
                                if(state==''){
                                    $("#errorState").text("State Filed is Blank");
                                }
                                else{
                                    $("#errorState").text("");
                                    if(!regexName.test(state)){
                                        $("#errorState").text("State Filed Does't Support Digits And Special Char");
                                    }
                                    else{
                                    $("#errorState").text("");
                                        if(country=='')
                                        {
                                            $("#errorCountry").text("Country Filed is Blank");
                                        }
                                        else{
                                            $("#errorCountry").text("");
                                            if(!regexName.test(country)){
                                                $("#errorCountry").text("Country Filed Does't Support Digits And Special Char");
                                            }
                                            else{
                                                $("#errorCountry").text("");
                                                var data={id:id,address:address,pin:pin,city:city,state:state,country:country}
                                                        $.ajax({
                                                            url : 'view/updateData.php', // url where to submit the request
                                                            type : "POST", // type of action POST || GET
                                                            // contentType: "application/json",
                                                            // dataType : 'JSON', // data type
                                                            // processData:false,
                                                            // contentType:false,
                                                            data : data, // post data || get data
                                                            success : function(resp){
                                                                console.log(resp);
                                                                var response=JSON.parse(resp);
                                                                console.log(response.name);
                                                                if(resp){
                                                                    swal.fire({
                                                                    title: "Your Profile Has Been Updated",
                                                                    icon: "success",
                                                                    })
                                                                }
                                                            }
                                                });

                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
}
</script>
<?php include("view/footer.php"); ?>

<!-- <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4">
            <ul class="list-unstyled components mb-5">
                <li>
                    <a id="editProfile"><span class="fa fa-user mr-3"></span> Edit Profile</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile Data</h5>
      </div>
      <div class="modal-body">
        <form id="signUpform">
        <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="hidden" class="hidden" id="hidden" name="hidden" value="<?=$userDataArray["id"]?>">
                <input type="name" class="form-control" id="updateName" name="updateName" placeholder="Name" value="<?=$userDataArray["name"]?>">
                <div id="errorname" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="mobile" class="form-control" id="updatePhone" name="updatePhone" placeholder="Phone Number" value="<?=$userDataArray["phone"]?>">
                <div id="errorphone" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="updateEmail" name="updateEmail" placeholder="Email Address" value="<?=$userDataArray["email"]?>">
                <div id="erroremail" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="updatePass" name="updatePass" placeholder="Password" value="<?=$userDataArray["pass"]?>">
                <div id="errorpass" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Address</label>
                <input type="address" class="form-control" id="updateAddress" name="updateAddress" placeholder="Address" value="<?=$userDataArray["user_address"]?>">
                <div id="errorAddress" class="error" style="color:red"></div>
            </div>
            <div class="row justify-content-around">
            <div class="mb-3">
                <label for="pass" class="form-label">City</label>
                <input type="City" class="form-control" id="updateCity" name="updateCity" placeholder="City" value="<?=$userDataArray["user_city"]?>">
                <div id="errorCity" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Pin Code</label>
                <input type="pin" class="form-control" id="updatePin" name="updatePin" placeholder="Pincode" value="<?=$userDataArray["user_pincode"]?>">
                <div id="errorPin" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">State</label>
                <input type="state" class="form-control" id="updateState" name="updateState" placeholder="State" value="<?=$userDataArray["user_state"]?>">
                <div id="errorState" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Country</label>
                <input type="country" class="form-control" id="updateCountry" name="updateCountry" placeholder="Country" value="<?=$userDataArray["user_country"]?>">
                <div id="errorCountry" class="error" style="color:red"></div>
            </div>

            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="close"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button"  class="btn btn-success" onclick='update()'>Update Profile</button>
      </div>
    </div>
  </div>
</div>
        
    </div>
</div> -->