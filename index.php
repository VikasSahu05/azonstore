<?php include("view/header.php");?>
<?php include("functions/functions.php");?>

<div class="modal fade" id="Mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modalStyle">
      <div class="modal-header">
        <h5 class="modal-title labelStyle" id="exampleModalLabel">Be Our Customer</h5>
      </div>
      <div class="modal-body">
        <form id="signUpform">
        <div class="mb-3">
                <!-- <label for="name" class="form-label">Name</label> -->
                <input type="name" class="form-control inputStyle" id="name" name="name" placeholder="Name">
                <div id="errorname" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <!-- <label for="phone" class="form-label">Phone Number</label> -->
                <input type="mobile" class="form-control inputStyle" id="phone" name="phone" placeholder="Phone Number">
                <div id="errorphone" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <!-- <label for="email" class="form-label">Email address</label> -->
                <input type="email" class="form-control inputStyle" id="email" name="email" placeholder="Email Address">
                <div id="erroremail" class="error" style="color:red"></div>
            </div>
            <div class="mb-3">
                <!-- <label for="pass" class="form-label">Password</label> -->
                <input type="password" class="form-control inputStyle" id="pass" name="pass" placeholder="Password">
                <div id="errorpass" class="error" style="color:red"></div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="close"  class="btn inputBtn" data-bs-dismiss="modal">Close</button>
        <button type="button"  class="btn inputBtn" onclick='submit()'>Sign Up</button>
      </div>
    </div>
  </div>
</div>

<!-- ----------------------------------------login  modal------------------------ -->
<div class="modal fade" id="MyLoginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content modalStyle">
      <div class="modal-header">
        <h5 class="modal-title labelStyle" id="exampleModalLabel">Login</h5>
      </div>
      <div class="modal-body">
        <form id="signIpform">
            <div class="mb-3 mailDiv">
                <!-- <label for="email" class="form-label">Email address</label> -->
                <input type="email" class="form-control inputStyle" id="emailLogin" name="emailLogin" placeholder="Email Address">
                <div id="erroremailLogin" class="error" style="color:red"></div>
            </div>
            <div class="mb-3 passDiv">
                <!-- <label for="pass" class="form-label">Password</label> -->
                <input type="password" class="form-control inputStyle" id="passLogin" name="passLogin" placeholder="Password">
                <div id="errorpassLogin" class="error" style="color:red"></div>
            </div>
            <div class="mb-3 verify">
                <!-- <label for="pass" class="form-label">Verify</label> -->
                <input type="otp" class="form-control inputStyle" id="otp" name="otp" placeholder="Verify OTP">
                <div id="errorOtp" class="error" style="color:red"></div>
            </div>
        </form>
        <a href="#" class="text-dark">New customer?</a>
        <a href="#" class="text-dark" id="signUp">sign up</a>
      </div>
      <div class="modal-footer">
        <button type="button" id="closeLogin"  class="btn inputBtn" data-bs-dismiss="modal">Close</button>
        <button type="button"  class="btn inputBtn submitLogin" onclick='submitLogin()'>Login</button>
        <button type="button" id="verify"  class="btn inputBtn validate">Verify</button>
      </div>
    </div>
  </div>
</div>

 <!-- ------------------------------------------------- top slider Section 
---------------------------------------------------------------------------------- -->    
    <section  class=" ">
        <div class="swiper mySwiper swipe" id="myswipers">
            <div class="swiper-wrapper ">
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/b2.png" alt="img">
                </div>
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/kurti.png" alt="img">
                </div>
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/shirt_wo.jfif" alt="img">
                </div>
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/top.png" alt="img">
                </div>
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/tshirt_m.png" alt="img">
                </div>
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/m3.jpeg" alt="img">
                </div>
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/b1.png" alt="img">
                </div>
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/m2.jpeg" alt="img">
                </div>
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/makup_product.jpeg" alt="img">
                </div>
                <div class="swiper-slide "  id="swiper_slider">
                    <img class="img" src="img/imgg/top.png" alt="img">
                </div>
            </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
    </section>
 

    
 <!-- ------------------------------------------------- women clothing Section 
------------------------------------------------------------------------------------>    
<section class="container">
<div class="row">
<?php

    getPro();

    ?>
    </div>
    </section>

    
 <!-- ------------------------------------------------- men clothing Section 
------------------------------------------------------------------------------------>    
    <section class="">
        <div class="common_section men_section">
           

            <div class="content">
                <h1>MEN CLOTHING</h1>
                <div class="item_box">
                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/tshirt_m.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>Tshirts & polos</h4></a>
                        </caption>

                         <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/shirt_m.webp" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>shirts</h4></a>
                        </caption>

                         <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/trouser.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>trousers</h4></a>
                        </caption>

                         <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>

                    <div class="item_">
                        <figure>
                           <a href="#"> <img class="img" src="img/imgg/27.png" alt=""> </a>
                           </figure> 
                        <caption>
                          <a href="#">  <h4>jeans</h4></a>
                        </caption>

                         <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/kurta.jpeg" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>kurtas</h4></a>
                        </caption>

                         <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>

                    <div class="item_    d_none">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/dress.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>Dresses</h4></a>
                        </caption>

                        <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

         
 <!-- ------------------------------------------------- Women footwear Section 
------------------------------------------------------------------------------------>  
<section class="">
    <div class="common_section  women_footwear ">
      
        <div class="content">
            <h1> women footwear</h1>

            <div class="item_box">
                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img  " src="img/imgg/slip.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>home slippers</h4></a>
                    </caption>

                    <span class="prices">starting<i class="fa fa-inr" aria-hidden="true"></i>149</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/sliper.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>fashion slippers</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/heel.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>heels</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/belle.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>bellies</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/sport_shoe.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>sport shoes</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/shoe.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>casual shoes</h4></a>
                    </caption>

                    <span class="prices">up to 80% off</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ------------------------------------------------- Men footwear Section 
------------------------------------------------------------------------------------>  
<section class="">
    <div class="common_section  men_footware ">
      
        <div class="content">
            <h1> men footwear</h1>

            <div class="item_box ">
                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img " src="img/imgg/slip.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>home slippers</h4></a>
                    </caption>

                    <span class="prices">starting<i class="fa fa-inr" aria-hidden="true"></i>149</span>
                </div>

                <div class="item_ ">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/sliper.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>fashion slippers</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/heel.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>heels</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/belle.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>bellies</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/sport_shoe.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>sport shoes</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/shoe.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>casual shoes</h4></a>
                    </caption>

                    <span class="prices">up to 80% off</span>
                </div>
                
            </div>
        </div>
    </div>
</section>




 
 <!-- ------------------------------------------------- women Accesseries Section 
------------------------------------------------------------------------------------>    
    <section class=" ">
        <div class="common_section  women_accesseries">
          
            <div class="content">
                <h1> women Accesseries</h1>

                <div class="item_box">
                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img plus_width_img" src="img/imgg/watch.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>watches</h4></a>
                        </caption>

                        <span class="prices">starting<i class="fa fa-inr" aria-hidden="true"></i>149</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img plus_width_img" src="img/imgg/jewellary.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>fashion & silver jewellery   </h4></a>
                        </caption>
                        
                        <span class="prices">up to 50% off</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img plus_width_img" src="img/imgg/bag.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>handbags</h4></a>
                        </caption>
                        
                        <span class="prices">up to 50% off</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img plus_width_img" src="img/imgg/sun_glasses.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>sunglasses</h4></a>
                        </caption>
                        
                        <span class="prices">up to 50% off</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img plus_width_img" src="img/imgg/makup_slide.jpeg" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>bags & backpacks</h4></a>
                        </caption>
                        
                        <span class="prices">up to 50% off</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img plus_width_img" src="img/imgg/perfume.jpeg" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>perfume</h4></a>
                        </caption>

                        <span class="prices">up to 50% off</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



 <!-- ------------------------------------------------- Bestselling product slider Section 
------------------------------------------------------------------------------------>    
    <section class="" >
        <div class="banner_slider_">
            <div class="swiper mySwiper " id="myswipers">
                <div class="swiper-wrapper">
                    <div class="swiper-slide "  id="swiper_slider">
                        <img class="img bg-danger" src="img/imgg/b2.png" alt="img"9>
                    </div>
                    <div class="swiper-slide "  id="swiper_slider">
                        <img class="img" src="img/imgg/kurti.png" alt="img8">
                    </div>
                    <div class="swiper-slide "  id="swiper_slider">
                        <img class="img" src="img/imgg/ear_phone.jpeg" alt="img7">
                    </div>
                    <div class="swiper-slide "  id="swiper_slider">
                        <img class="img" src="img/imgg/top.png" alt="img6">
                    </div>
                    <div class="swiper-slide "  id="swiper_slider">
                        <img class="img" src="img/imgg/tshirt_m.png" alt="img5">
                    </div>
                    <div class="swiper-slide "  id="swiper_slider">
                        <img class="img" src="img/imgg/jewellary.png" alt="img4">
                    </div>
                    <div class="swiper-slide "  id="swiper_slider">
                        <img class="img" src="img/imgg/b1.png" alt="img3">
                    </div>
                    <div class="swiper-slide "  id="swiper_slider">
                        <img class="img" src="img/imgg/m2.jpeg" alt="img2">
                    </div>
                    <div class="swiper-slide "  id="swiper_slider">
                        <img class="img" src="img/imgg/makup_product.jpeg" alt="img1">
                    </div>
                    <!-- <div class="swiper-slide "  id="swiper_slider">
                        <img class="img" src="img/imgg/top.png" alt="img">
                    </div> -->
                </div>
            </div>
            
        </div>
        
    </section>



<!-- ---------------------------------------------------- BUDGET BUYS section
--------------------------------------------------------------------------  -->
<section class="">
        <div class="common_section budget_buys">
            <h1>Budget Buys </h1>

           <div class="budget_content">
                <div class="item_box">
                    <div class="item_">
                            <figure>
                                <a href="#"> <img class="img" src="img/imgg/9.png" alt=""> </a> 
                            </figure>
                            <caption>
                              <a href="#">  <h4>boys sport shoes</h4></a>
                            </caption>

                            <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>

                        <div class="item_">
                            <figure>
                                <a href="#"> <img class="img" src="img/imgg/bag.png" alt=""> </a> 
                            </figure>
                            <caption>
                              <a href="#">  <h4>women handbags</h4></a>
                            </caption>

                              <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/lagguge.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>lagguge</h4></a>
                        </caption>

                          <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/1.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>mobile</h4></a>
                        </caption>

                          <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/sandle.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>sandles</h4></a>
                        </caption>

                          <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>


                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/bag.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>bags</h4></a>
                        </caption>

                          <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                    </div>
               </div>

               <div class="item_box">
                <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/23.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>wired headphones</h4></a>
                        </caption>

                          <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img" src="img/imgg/keyboard.png" alt=""> </a> 
                        </figure>
                        <caption>
                          <a href="#">  <h4>keyboards</h4></a>
                        </caption>

                          <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img" src="img/imgg/ear_phone.jpeg" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>Ear phones</h4></a>
                    </caption>

                      <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img" src="img/imgg/hphone.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>wireless headphones</h4></a>
                    </caption>

                      <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img" src="img/imgg/1.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>mobile phones</h4></a>
                    </caption>

                      <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                </div>


                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img" src="img/imgg/watch.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>watches</h4></a>
                    </caption>

                      <span class="prices">under<i class="fa fa-inr" aria-hidden="true"></i>399</span>
                </div>
           </div>
           </div>
        </div>
    </section>


     <!-- ------------------------------------------------- shop by categry Section 
------------------------------------------------------------------------------------> 

<section>
<div class="common_section shop_by_categry  ">
    <h1>shop by categry</h1>

    <!-- Swiper -->
     <div class="swiper  mySwiper_ ">
        <div class="swiper-wrapper ">
            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img  class="" src="../fashion/img/imgg/kurta.jpeg" >
                    <h3 class="">indian wear</h3>
                </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img  class="" src="../fashion/img/imgg/tshirt_m.png" >
                    <h3 class="">casual wear</h3>
                </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img  class="" src="../fashion/img/imgg/men_kurta.jpeg" >
                    
                    <h3 class="">kurta</h3>
                </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img  class="" src="../fashion/img/imgg/dress.png" >
                    <h3 class="">western wear</h3>
                </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img  class="" src="../fashion/img/imgg/tshir-tm.png" >
                    <h3 class="">Active wear</h3>
                </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img  class="" src="../fashion/img/imgg/25(1).png" >
                    <h3 class="">sports wear</h3>
                </a>
            </div>

            <div class="swiper-pagination_"></div>
       </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper_", {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination_",
          clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            
          640: {
            slidesPerView: 8,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 0,
          },
        },
      });
    </script>
</div>
</div>
</div>
</section>





<!-- ------------------------------------------------- Circle categry Section 
------------------------------------------------------------------------------------>   
<section>
    <div class="common_section circle_categry ">
         <div class="circle_content"> 
             <div class="item__">
                <a href="#6"><img src="./img/imgg/per.png"   class="circle_images"   alt="slide1"> </a>
             </div>
                
            <div class="item__">  <a href="#6"><img src="./img/imgg/16.png "   class="circle_images"   alt="slide1"> </a></div>
            <div class="item__">  <a href="#6"><img src="./img/imgg/17.png   "   class="circle_images"   alt="slide1"> </a></div>
            <div class="item__">  <a href="#6"><img src="./img/imgg/top.png  "   class="circle_images"   alt="slide1"> </a></div>
            <div class="item__">  <a href="#6"><img src="./img/imgg/b3.jpg   "   class="circle_images"   alt="slide1"> </a></div>
            <div class="item__ ">  <a href="#6"><img src="./img/imgg/b3.jpg   "   class="circle_images"   alt="slide1"> </a></div>
        </div>     
    </div>
</section>


<!-- ------------------------------------------------- grocery Accesseries Section 
------------------------------------------------------------------------------------>    
<section class="">
        <div class="common_section grocery_section ">
          
            <div class="content">
                <h1> grocery</h1>

                <div class="item_box">
                    <div class="item_">
                        <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/17.png" alt=""> </a> 
                        </figure>
                        <!-- <caption>
                          <a href="#">  <h4>watches</h4></a>
                        </caption> -->

                        <span class="prices">starting<i class="fa fa-inr" aria-hidden="true"></i>149</span>
                    </div>

                    <div class="item_">
                        <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/18.png" alt=""> </a> 
                        </figure>
                        <!-- <caption>
                          <a href="#">  <h4>fashion & silver jewellery   </h4></a>
                        </caption> -->
                        
                        <span class="prices">up to 50% off</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img plus_width_img" src="img/imgg/17.png" alt=""> </a>  
                        </figure>
                        <!-- <caption>
                          <a href="#">  <h4>handbags</h4></a>
                        </caption> -->
                        
                        <span class="prices">up to 50% off</span>
                    </div>

                    <div class="item_">
                        <figure>
                            <a href="#"> <img class="img plus_width_img" src="img/imgg/18.png" alt=""> </a> 
                        </figure>
                        <!-- <caption>
                          <a href="#">  <h4>sunglasses</h4></a>
                        </caption> -->
                        
                        <span class="prices">up to 50% off</span>
                    </div>

                    <div class="item_">
                        <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/17.png" alt=""> </a>  
                        </figure>
                        <!-- <caption>
                          <a href="#">  <h4>bags & backpacks</h4></a>
                        </caption> -->
                        
                        <span class="prices">up to 50% off</span>
                    </div>

                    <div class="item_">
                        <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/18.png" alt=""> </a> 
                        </figure>
                        <!-- <caption>
                          <a href="#">  <h4>perfume</h4></a>
                        </caption> -->

                        <span class="prices">up to 50% off</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- ------------------------------------------------- Electronics Section 
------------------------------------------------------------------------------------>    
<section class="">
    <div class="common_section electronics_section mb-5">
      
        <div class="content">
            <h1> Electronics Items</h1>

            <div class="item_box">
                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/mob.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>Mobile phones</h4></a>
                    </caption>

                    <span class="prices">starting<i class="fa fa-inr" aria-hidden="true"></i>149</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/lapy.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>Laptops</h4></a>
                    </caption>
                    
                    <span class="prices">up to 50% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/22.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>headphones</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/keyboard.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>Laptops Accesseries</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/lapy.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>Television</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/1.png" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>mobile cases</h4></a>
                    </caption>

                    <span class="prices">up to 80% off</span>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ------------------------------------------------- furniture Section 
------------------------------------------------------------------------------------>    
<section class="">
    <div class="common_section furniture_section mb-5">
      
        <div class="content">
            <h1> Furniture items </h1>

            <div class="item_box">
                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/f1.jpg" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>desks</h4></a>
                    </caption>

                    <span class="prices">starting<i class="fa fa-inr" aria-hidden="true"></i>149</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/f2.jpg" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href   ="#">  <h4>tables</h4></a>
                    </caption>
                    
                    <span class="prices">up to 50% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/f3.jpg" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>chairs</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/f4.jpg" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>cabinets</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/f5.jpg" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>chairs and seating</h4></a>
                    </caption>
                    
                    <span class="prices">up to 80% off</span>
                </div>

                <div class="item_">
                    <figure>
                        <a href="#"> <img class="img plus_width_img" src="img/imgg/f1.jpg" alt=""> </a> 
                    </figure>
                    <caption>
                      <a href="#">  <h4>beds</h4></a>
                    </caption>

                    <span class="prices">up to 80% off</span>
                </div>
            </div>
        </div>
    </div>
</section>




     <!-- ------------------------------------------------- Bestselling items Section 
------------------------------------------------------------------------------------> 
<section class="">
<div class="common_section shop_by_categry bestselling_item_section  ">
    <h1>Bestselling items</h1>

    <!-- Swiper -->
     <div class="swiper  mySwiper_ ">
        <div class="swiper-wrapper ">
            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img src="../fashion/img/imgg/kurta.jpeg" >
                                   </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img src="../fashion/img/imgg/tshirt_m.png" >
                                   </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img src="../fashion/img/imgg/men_kurta.jpeg" >
                </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img src="../fashion/img/imgg/dress.png" >
                   
                </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img src="../fashion/img/imgg/tshir-tm.png" >
                                   </a>
            </div>

            <div class="swiper-slide">
                <a href="https://www.youtube.com/">
                    <img src="../fashion/img/imgg/25(1).png" >
                                   </a>
            </div>

            <div class="swiper-pagination_"></div>
       </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper_", {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination_",
          clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 0,
          },
        },
      });
    </script>
</div>

</section>


<!-- ------------------------------------------------- Blog Section 
------------------------------------------------------------------------------------> 
<section class="">
    <div class="blog_section">
    <h1> our blogs</h1>
        <div class="content">

            <div class="card">
                <div class="card__header">
                <img src="../fashion/img/imgg/indian_wear.jpeg" alt="card__image" class="card__image_" width="600">
                </div>
                <div class="card__body">
                <span class="tag tag-brown">Fashion</span>
                <h2>Delicious Food</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
                </div>
                <div class="card__footer">
                <div class="user">
                    <img src="../fashion/img/imgg/18.png" class="user__image">
                    <div class="user__info">
                        <h5>Jony Doe</h5>
                        <small>Yesterday</small>
                        </div>
                </div>
                </div>
            </div>

            <div class="card">
                <div class="card__header">
                <img src="../fashion/img/imgg/18.png" alt="card__image" class="card__image_" width="600">
                </div>
                <div class="card__body">
                <span class="tag tag-brown">Food</span>
                <h2>Delicious Food</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
                </div>
                <div class="card__footer">
                <div class="user">
                    <img src="../fashion/img/imgg/18.png" class="user__image">
                    <div class="user__info">
                    <h5>Jony Doe</h5>
                    <small>Yesterday</small>
                    </div>
                </div>
                </div>
            </div>

            <div class="card">
                <div class="card__header">
                <img src="https://source.unsplash.com/600x400/?car,automobile" alt="card__image" class="card__image_" width="600">
                </div>
                
                <div class="card__body">
                <span class="tag tag-red">Automobile</span>
                <h2>Race to your heart content</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
                </div>
                
                <div class="card__footer">
                    <div class="user">
                        <img src="../fashion/img/imgg/18.png" class="user__image">
                        <div class="user__info">
                        <h5>John Doe</h5>
                        <small>2d ago</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="blog_btn_links">
            <a href="#" type="submit" class="blog_btn" id="create_btn">create Blog</a> 
            <a href="#" type="submit" class="blog_btn" id="view_btn">View Blog</a> 
        </div>

    </div>
</section>





<script>
    var swiper = new Swiper(".mySwiper", {
            spaceBetween: 0,
            centeredSlides: false,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });     
</script>
<?php include("view/footer.php"); ?>

<script>
$(document).ready(function(){
    $(".verify").hide();
    $(".validate").hide();
    $('#signIn').click(function(){
        $('#MyLoginmodal').modal('show');
	});
	$('#signUp').click(function(){
        $('#MyLoginmodal').modal('hide');
        $('#Mymodal').modal('show');

	});
    $('#close').click(function(){
        $('#Mymodal').modal('hide');
        document.getElementById("signUpform").reset();
        document.getElementsByClassName("error").reset();
	});
    
    $('#closeLogin').click(function(){
        $('#MyLoginmodal').modal('hide');
        document.getElementById("signIpform").reset();
        document.getElementsByClassName("error").reset();
	});
});
function submit(){
        var name=$('#name').val();
        var phone=$('#phone').val();
        var email=$('#email').val();
        var pass=$('#pass').val();
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
                                                        passValid=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
                                                        if(!passValid.test(pass)){
                                                            $("#errorpass").text("Password Must Contain one special Char,One Number & character");   
                                                        }
                                                        else{
                                                            $("#errorpass").text("");
                                                            var data={name:name,phone:phone,email:email,pass:pass}
                                                            $.ajax({
                                                                url : 'view/inserData.php', // url where to submit the request
                                                                type : "POST", // type of action POST || GET
                                                                // contentType: "application/json",
                                                                // dataType : 'JSON', // data type
                                                                // processData:false,
                                                                // contentType:false,
                                                                data : data, // post data || get data
                                                                success : function(resp) {
                                                                    // you can see the result from the console
                                                                    // tab of the developer tools
                                                                    var response=JSON.parse(resp);
                                                                    console.log(response.resp);
                                                                    console.log(response.mail);
                                                                    if(response.resp=='uploaded'){
                                                                        $('#Mymodal').modal('hide');
                                                                        swal.fire({
                                                                        title: "Data Uploaded",
                                                                        text: "Welcome "+ response.name +" Please Verify The Code Sent To Your Mail Id",
                                                                        icon: "success",
                                                                        }).then((value)=>{
                                                                            $('#MyLoginmodal').modal('show');
                                                                            $('.mailDiv').hide();
                                                                            $('.passDiv').hide();
                                                                            $(".verify").show();
                                                                            $(".validate").show();
                                                                            $(".submitLogin").hide();
                                                                            var otpEmail={email:response.email}
                                                                            $.ajax({
                                                                                url:'view/sendOtp.php',
                                                                                type:'post',
                                                                                data:otpEmail
                                                                            })
                                                                            $(document).ready(function(){
                                                                        $("#verify").click(function(){
                                                                            var otp=$("#otp").val();
                                                                                var validateData={otp:otp,otpEmail}
                                                                                $.ajax({
                                                                                url:'view/otpverify.php',
                                                                                type:'post',
                                                                                data:validateData,
                                                                                success: function(response) {
                                                                                    var response=JSON.parse(response);
                                                                                    console.log(response.result);
                                                                                    if(response.result=='pass'){
                                                                                        $.ajax({
                                                                                            url:'view/otpVerified.php',
                                                                                            type:'post',
                                                                                            data:otpEmail,
                                                                                            success:function(response){
                                                                                                var done=JSON.parse(response);
                                                                                                console.log(done.login);
                                                                                                if(done.login=='success'){
                                                                                                    $('.mailDiv').show();
                                                                                                    $('.passDiv').show();
                                                                                                    $(".verify").hide();
                                                                                                    $(".validate").hide();
                                                                                                    $(".submitLogin").show();
                                                                                                }
                                                                                            }
                                                                                        })
                                                                                    }
                                                                                    if(response.result=='wrongOtp'){
                                                                                                    Swal.fire({
                                                                                                    icon: 'error',
                                                                                                    title: 'Oops...',
                                                                                                    text: 'wrong Otp',
                                                                                                    })
                                                                                                }
                                                                                },
                                                                            })
                                                                        });
                                                                        });
                                                                        });

                                                                        
                                                                    }
                                                                    if(response.resp=='DataExist'){
                                                                        $('#MyLoginmodal').modal('hide');
                                                                        Swal.fire({
                                                                        icon: 'error',
                                                                        title: 'Oops...',
                                                                        text: 'Data Already Exist',
                                                                        }).then((value)=>{
                                                                            $('#Mymodal').modal('show');
                                                                        })
                                                                    }

                                                                },
                                                                error : function(xhr, resp, text) {
                                                                    var response=JSON.parse(resp);
                                                                    console.log(response.resp);
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
    function submitLogin(){
        var email=$('#emailLogin').val();
        var pass=$('#passLogin').val();
						if(email==" "){
							$("#erroremailLogin").text("Email Filed Is Blank");
						}
						else{
							regex=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
							if(!regex.test(email)){
								$("#erroremailLogin").text("Please Enter Valid Mail");
							}
							else{
                                if(pass==""){
                                    $("#errorpassLogin").text("Password Field is Empty");
                                }
                                else{
                                    if(pass.length<8){
                                        $("#errorpassLogin").text("Password must be Greater Then 8 characters");
                                    }
                                    else{
                                        passValid=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
                                        if(!passValid.test(pass)){
                                            $("#errorpassLogin").text("Password Must Contain one special Char,One Number & character");   
                                        }
                                        else{
                                            var data={email:email,pass:pass}
                                            $.ajax({
                                                url : 'view/checkLogin.php', // url where to submit the request
                                                type : "POST", // type of action POST || GET
                                                // contentType: "application/json",
                                                // dataType : 'JSON', // data type
                                                // processData:false,
                                                // contentType:false,
                                                data : data, // post data || get data
                                                success : function(resp,text) {
                                                    // you can see the result from the console
                                                    // tab of the developer tools
                                                    var response=JSON.parse(resp);
                                                    console.log(response);
                                                    if(response.resp=='success'){
                                                        $('#MyLoginmodal').modal('hide');
                                                        swal.fire({
                                                        title: "Signed In",
                                                        text: "WELCOME " + response.name,
                                                        icon: "success",
                                                        }).then((value)=>{
                                                            // var loggedIn=$("#signIn").();
                                                            // var loggedIn=document.getElementById("login").innerHTML= response.name;
                                                            location.reload();
                                                            $("#setName").text(response.name);
                                                            
                                                            // console.log(loggedIn);
                                                            $("#signIn").hide();
                                                            data={name:response.name,email:email}
                                                            $.ajax({
                                                            url:'view/header.php',
                                                            type:'post',
                                                            data:data,
                                                            })

                                                        });
                                                    }

                                                    if(response.resp=='fail'){
                                                        $('#MyLoginmodal').modal('hide');
                                                        Swal.fire({
                                                        icon: 'error',
                                                        title: 'Oops...',
                                                        text: 'Please Try Again',
                                                        }).then((value)=>{
                                                            $('#MyLoginmodal').modal('show');
                                                        })
                                                    }
                                                },
                                                error : function(xhr, resp, text) {
                                                    var response=JSON.parse(resp);
                                                    console.log(response.resp);
                                                }
                                            });
                                        }
                                    }
                                }
                            }
                        }
                    }

</script>