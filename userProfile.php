<!-- <link rel="stylesheet" href="css/sidebar.css"> -->
<?php 
include("view/header.php");
if($_GET){
    intval($_GET["id"]);
    $id=$conn -> real_escape_string($_GET["id"]);
    $query = "SELECT * FROM  user where id='$id'";
    $result1 =mysqli_query($conn,$query);
    $userDataArray=mysqli_fetch_assoc($result1);
    // var_dump($userDataArray);
    
}
?>

<body>

<div class="container">
<div id="navSlideProfileContent">
    <div class="d-flex flex-row">
    <div class="col-lg-2 w-25">
        <!-- <span class="slideBaar">
            <a class="openIconSideProfile"  href="#" onclick="openSlideMenuProfile()">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </span> -->

        <div id="menuProfile" class="navSlideProfile">
            <a href="#" class="closeTab" onclick="closeSideMenuProfile()">
            <i class="fa fa-times" aria-hidden="true"></i>
            </a>
            <a href="#" id="firstTab" class="tablinks firstTab commonTab active">Order</a>
            <a href="#" id="secondTab" class="tablinks secondTab commonTab inActive" >Profile</a>
            <a href="#" id="thirdTab" class="tablinks thirdTab commonTab inActive">Address</a>
            <a href="#" id="fourthTab" class="tablinks fourthTab commonTab inActive" >Reward</a>
            <a href="#" id="fiveTab" class="tablinks fiveTab commonTab inActive ">About</a>
            <a href="#" id="sixTab" class="tablinks sixTab commonTab inActive" >Contact</a>
      </div>
    </div>
    <div class="col-lg-10 w-75">
        <div class="mb-2">
        <span class="slideBaar">
            <a class="openIconSideProfile" href="#" onclick="openSlideMenuProfile()">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </span>
        </div>   
    
      <section id="firstTab" class="firstTabContent commonTabContent">
        <div id="order" class="tabcontent">
            <h3>Order</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi sunt voluptatum tempora.</p>
        </div>
      </section>
      
      <section id="secondTab" class="secondTabContent commonTabContent">
        <div id="profile" class="tabcontent">
            <h3>Profile</h3>
            <div class="mb-5">
                <form id="signUpform">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="hidden" class="hidden1" id="hidden1" name="hidden1" value="<?=$userDataArray["id"]?>">
                                <input type="name" class="form-control " id="updateName" name="updateName" placeholder="Name" value="<?=$userDataArray["name"]?>">
                                <div id="errorname" class="error mt-2" style="color:red"></div>
                            </div>
                            <div class="mb-3">                        
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="mobile" class="form-control w-100" id="updatePhone" name="updatePhone" placeholder="Phone Number" value="<?=$userDataArray["phone"]?>">
                                <div id="errorphone" class="error mt-2" style="color:red"></div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control w-100" id="updateEmail" name="updateEmail" placeholder="Email Address" value="<?=$userDataArray["email"]?>">
                                <div id="erroremail" class="error mt-2" style="color:red"></div>
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control w-100" id="updatePass" name="updatePass" placeholder="Password" value="<?=$userDataArray["pass"]?>">
                                <div id="errorpass" class="error mt-2" style="color:red"></div>
                            </div>
                </form>
                <button type="button"  class="btn btn-success mt-4" onclick='update()'>Update Profile</button>
            </div>
        </div>
      </section>
      
      <section id="thirdTab" class="thirdTabContent commonTabContent">
        <div id="address" class="tabcontent">
            <h3>Adress</h3>
            <div class="">
                    <form>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Address</label>
                            <input type="hidden" class="hidden" id="hidden" name="hidden" value="<?=$userDataArray["id"]?>">
                            <input type="address" class="form-control" id="updateAddress" name="updateAddress" placeholder="Address" value="<?=$userDataArray["user_address"]?>">
                            <div id="errorAddress" class="error mt-2" style="color:red"></div>
                        </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">City</label>
                                <input type="City" class="form-control w-100" id="updateCity" name="updateCity" placeholder="City" value="<?=$userDataArray["user_city"]?>">
                                <div id="errorCity" class="error mt-2" style="color:red"></div>
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Pin Code</label>
                                <input type="pin" class="form-control w-100" id="updatePin" name="updatePin" placeholder="Pincode" value="<?=$userDataArray["user_pincode"]?>">
                                <div id="errorPin" class="error mt-2" style="color:red"></div>
                            </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">State</label>
                            <input type="state" class="form-control w-100" id="updateState" name="updateState" placeholder="State" value="<?=$userDataArray["user_state"]?>">
                            <div id="errorState" class="error mt-2" style="color:red"></div>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Country</label>
                            <input type="country" class="form-control w-100" id="updateCountry" name="updateCountry" placeholder="Country" value="<?=$userDataArray["user_country"]?>">
                            <div id="errorCountry" class="error" style="color:red"></div>
                        </div>
                    </form>
                    <button type="button"  class="btn btn-success mt-4" onclick='updateAddress()'>Update Address</button>
            </div>
        </div>
      </section>

      <section id="fourthTab" class="fourthTabContent commonTabContent">
        <div id="reward" class="tabcontent">
            <h3>Reward</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis omnis unde porro repellendus, neque magni.</p>
        </div>
      </section>

      <section id="fiveTab" class="fiveTabContent commonTabContent">
        <div id="about" class="tabcontent">
            <h3>About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nulla maiores deleniti esse, dolorum corrupti totam?</p>
        </div>
      </section>

      <section id="sixTab" class="sixTabContent commonTabContent">
        <div id="contact" class="tabcontent">
            <h3>Content</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quod, dolorum ut iste ullam ipsa error. Sint, ea!</p>
        </div>
      </section>
      </div>
    </div>
  </div>
</div>
</body>
</html> 

<script>

function openSlideMenuProfile(){
  document.getElementById('menuProfile').style.width = '120px';
  document.getElementById('navSlideProfileContent').style.marginLeft = '0px';
}
function closeSideMenuProfile(){
  document.getElementById('menuProfile').style.width = '0px';
  document.getElementById('navSlideProfileContent').style.marginLeft = '0px';
}
  

//side tab script start
$(document).ready(function () {
                $(".commonTabContent").hide();
                $(".firstTabContent").show();
                $(".commonTab").click(function () {
                    var id = $(this).attr("id");
                    $(".commonTab").removeClass("inActive");
                    $(".commonTab").removeClass("active");
                    $(".commonTab").addClass("inActive");
                    $(this).addClass("active");
                    $(this).removeClass("inActive");
                    $(".commonTabContent").hide();
                    // $(".inActive").css('color','#4cbec9');
                    // $(".active").css({ 'color': '#4cbec9','text-decoration':'underline'});
                    // $(".inActive").css({ color: "#000000",'background-color':'#ffff','text-decoration':'none'});
                    $("." + id + "Content").show();
                });
            });
// side tab script end

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
