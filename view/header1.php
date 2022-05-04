<?php 
   session_start();
   if($_POST){
   //   var_dump($_POST);
   $email=$_POST["email"];   
   $name=$_POST["name"];
   $_SESSION["name"]=$name;
   $_SESSION["email"]=$email;
   }
   ?>
<?php
   include "connection.php";
   if($_SESSION){
       $emailId=$conn -> real_escape_string($_SESSION["email"]);
       $query = "SELECT id FROM  user where email='$emailId'";
       $result1 =mysqli_query($conn,$query);
   $userIdArray=mysqli_fetch_assoc($result1);
   $id=intval($userIdArray["id"]);
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <!-- //////////////// -->
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
      <!-- Link Swiper's CSS -->
      <link  rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Bootstrap link -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      <!-- ////////////////////// -->
      <!-- productDetails cdn -->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
      <!-- Basic stylesheet  -->
      <link rel="stylesheet" href=".css/owl.carousel.css">
      <!-- Default Theme -->
      <link rel="stylesheet" href=".css/owl.theme.default.css">
      <!-- Include js plugin -->
      <script src=".js/owl.carousel.js"></script> 
      <!-- productDetails cdn -->
      <link rel="stylesheet" href="./css/header1.css">
      <!-- <link rel="stylesheet" href="./css/sideTabHeader.css"> -->
      <link rel="stylesheet" href="./css/style.css">
      <link rel="stylesheet" href="./css/footer.css">
      <link rel="stylesheet" type="text/css" href="css/product.css">
      <link rel="stylesheet" href="css/productDetailsOwlCss.css">
      <link rel="stylesheet" href="./css/userProfileSideTab.css">
      <!-- <script src="../js/header.js"></script> -->
   </head>
   <body>
      <div class="headet_top mt-3">
      <div class="logo d-none d-lg-block">
         <a href="index.php"><img src="img/imgg/logos.png" alt="logo" /></a>
      </div>
      <div class="search_box fixed-sm-top">
         <form action="#" class="fixed-sm-top">
            <ul>
               <li>
                  <input  class="form-control me-2 input_search" type="text" 
                     placeholder="Search for products"
                     aria-label="Search" 
                     />
               </li>
               <li><button type="submit" class="search_btn"> 
                  <i class="fa fa-search searchIcon" id=" fa-search"></i></button>
               </li>
            </ul>
         </form>
      </div>
      <div class="icons">
         <ul class="">
            <li >
               <div class="login login_btn" id="login" >
                  <label id="setName"><i class="fa fa-user-circle-o text-white" aria-hidden="true"></i>
                  <?php
                     if($_SESSION){
                         echo $_SESSION["name"];
                         }
                         else{
                         ?>
                  User    
                  <?php
                     }
                     ?>
                  </label>
                  <!-- login btn content start -->
                  <div class="header_login_btn">
                     <?php
                        if($_SESSION){
                        
                        }
                        else{
                        ?>
                     <div class="head">
                        <a  id="signIn"><i class="fa fa-user-circle-o icon" aria-hidden="true">Sign In</i></a>                           
                     </div>
                     <?php
                        }
                        ?>
                     <div class="login_btn_content">
                        <?php
                           if($_SESSION)
                           {
                           ?>
                        <ul>
                           <li class="item"><a href="userProfile.php?id=<?=$id?>"> <i class="fa fa-user-circle-o icon" aria-hidden="true"></i>My Profile</a></li>
                           <li class="item"><a href="order.php?id=<?=$id?>"><i class="fa fa-first-order icon" aria-hidden="true"></i>Orders</a></li>
                           <li class="item"><a href="userWishlist.php?id=<?=$id?>"><i class="fa fa-heart icon" aria-hidden="true"></i>Wishlist</a></li>
                           <li class="item"><a href="userReward.php?id=<?=$id?>"><i class="fa fa-trophy icon" aria-hidden="true"></i>Rewards</a></li>
                           <li class="item"><a href="view/userLogout.php?id=<?=$id?>"><i class="fa fa-times icon" aria-hidden="true"></i>Logout</a></li>
                        </ul>
                        <?php
                           }
                           ?>
                     </div>
                  </div>
                  <!-- login btn content end -->
            </li>
            <li class=""> 
            <div class="login bg_color" id="login ">More
            <div class="header_login_btn">
            <div class="head">
            <a href="#">New customer?</a>
            <a href="#">sign up</a>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
            </div>
            </div>
            <div class="login_btn_content">
            <ul >
            <li class="item"><a href="#"> <i class="fa fa-user-circle-o user_icon icon" aria-hidden="true"></i>My Profile</a></li>
            <li class="item"><a href="#"><i class="fa fa-first-order icon" aria-hidden="true"></i>Orders</a></li>
            <li class="item"><a href="#"><i class="fa fa-heart icon" aria-hidden="true"></i>Wishlist</a></li>
            <li class="item"><a href="#"><i class="fa fa-trophy icon" aria-hidden="true"></i>Rewards</a></li>
            </ul>
            </div>
            </div>
            </li> 
            <li class="cart_box d-none d-lg-block"> 
            <a href="#cc"> 
            <i class="fa fa-shopping-cart  " aria-hidden="true"></i>
            <span class="cart_text"><a href="cart.php">Cart</a></span>
            </a>
            </li>
            <li class="cart_box d-none d-lg-block"> 
            <a class="cart_text" href="sellerPage.php"> 
            <i class="fa fa-user pr-2" aria-hidden="true"></i>seller
            </a>
            </li>
            <!-- 
               <li class="cart_box d-none d-lg-block"> 
                   <a href="#cart" > <i class="fa fa-user" aria-hidden="true"></i></a>
               </li> -->
         </ul>
         </div>
         </div>
      </div>
      <!-- haeder start -->
      <header class="topHeader">
         <div class="container containerToHeader">
         <div class="row headerRow v-center">
         <div class="topHeaderItem item-left">
            <div id="logo" class="d-block d-lg-none">
               <a href="index.php"><img src="img/imgg/logos.png" width="150px" height="70px" alt="logo" /></a>
            </div>
         </div>
         <!-- menu start from here -->
         <div class="topHeaderItem item-center">
         <div class="menu-overlay">
         </div>
         <div class="d-flex flex-row align-items-center">
            <div id="navSlideContent">
                  <div class="col-lg-2 w-25 d-none d-lg-block">
                     <span class="slideBaar">
                        <a class="openIconSide"  href="#" onclick="openSlideMenu()">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                        </span>
                     <div id="menu" class="navSlide">
                        <a href="#" class="closeTab" onclick="closeSideMenu()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                        <a href="#" id="firstTab" class="tablinks firstTab commonTab active"><strong class="text-uppercase text-white">All Products</strong></a>
                        <div>
                        <a href="#"><strong class="text-uppercase text-white">Trending</strong></a>
                            <a href="#" id="firstTab">Best Sellers</a>
                            <a href="#" id="secondTab">New Arrivals</a>
                        </div>
                        <div>
                            <a href="#" id="fiveTab" class="tablinks fiveTab commonTab inActive "><strong class="text-uppercase text-white">Programs & Features </strong></a>
                            <a href="#" id="thirdTab">Gift Card</a>
                           
                        </div>
                       <div>
                            <a href="#" id="sixTab" class="tablinks sixTab commonTab inActive text-uppercase" ><strong>Contact</strong></a>
                            <a href="#">About</a>
                            <a href="#">Contact</a>
                       </div>
                       <div>
                            <a href="#" id="sixTab" class="tablinks sixTab commonTab inActive text-uppercase" ><strong>Contact</strong></a>
                            <a href="#">About</a>
                            <a href="#">Contact</a>
                       </div>
                     </div>
                  </div>
                  <!-- <div class="mb-2">
                     <span class="slideBaar">
                     <a class="openIconSideProfile" href="#" onclick="openSlideMenu()">
                     <i class="fa fa-bars" aria-hidden="true"></i>
                     </a>
                     </span>
                  </div> -->
            </div>
                     <!-- <div class="d-none d-lg-block">
                        <span class="slideBaar">
                            <a class="openIconSide"  href="#" onclick="openSlideMenu()">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                        </span>
                        
                        <div id="menu" class="navSlide" style="width:128px;">
                        <a href="#" class="close" onclick="closeSideMenu()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        
                        </a>
                        <div class="text-center">
                            <h6><strong class="text-uppercase text-white">Trending</strong></h6>
                            <a href="#" id="firstTab">Best Sellers</a>
                            <a href="#" id="secondTab">New Arrivals</a>
                        </div>
                        <div class="text-center">
                            <h6><strong class="text-uppercase text-white">Programs & Features </strong></h6>
                            <a href="#" id="thirdTab">Gift Card</a>
                        </div>
                        <div class="text-center">
                            <h6><strong class="text-uppercase text-white">More</strong></h6>
                            <a href="#" id="fourthTab">Our Blog</a>
                            <a href="#" id="fiveTab">About</a>
                        </div>
                        
                        </div>
                        </div> -->
                     <nav class="menu">
                        <div class="mobile-menu-head">
                           <div class="go-back">
                              <i class="fa fa-angle-left"></i>
                           </div>
                           <div class="current-menu-title"></div>
                           <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="menu-main ulHeaderMain">
                           <li class="navItems menu-item-has-children">
                              <a href="#">Fashion<i class="fa fa-angle-down"></i></a>
                              <div class="sub-menu mega-menu mega-menu-col-4">
                                 <div class="list_itemSub">
                                    <h6 class="title">Fashion</h6>
                                    <ul>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                    </ul>
                                 </div>
                                 <div class="list_itemSub">
                                    <h6 class="title">Women's Fashion</h6>
                                    <ul>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                    </ul>
                                 </div>
                                 <div class="list_itemSub">
                                    <h6 class="title">Home , Kitchen</h6>
                                    <ul>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                    </ul>
                                    <h6 class="title">Kids</h6>
                                    <ul>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                    </ul>
                                 </div>
                                 <div class="list_itemSub">
                                    <img src="../img/imgg/tshir-tm.png" alt="">
                                 </div>
                              </div>
                           </li>
                           <li class="navItems">
                              <a href="#">New</a>
                           </li>
                           <li class="navItems menu-item-has-children">
                              <a href="#">grocery <i class="fa fa-angle-down"></i></a>
                              <div class="sub-menu single-column-Submenu">
                                 <ul>
                                    <li><a href="#">Mens</a></li>
                                    <li><a href="#">Womens</a></li>
                                    <li><a href="#">Kids</a></li>
                                 </ul>
                              </div>
                           </li>
                           <li class="navItems menu-item-has-children">
                              <a href="#">All<i class="fa fa-angle-down"></i></a>
                              <div class="sub-menu mega-menu mega-menu-col-4">
                                 <div class="list_itemSub">
                                    <h6 class="title">Men's Fashion</h6>
                                    <ul>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                    </ul>
                                 </div>
                                 <div class="list_itemSub">
                                    <h6 class="title">Women's Fashion</h6>
                                    <ul>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                    </ul>
                                 </div>
                                 <div class="list_itemSub">
                                    <h6 class="title">Home , Kitchen</h6>
                                    <ul>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                    </ul>
                                    <h6 class="title">Kids</h6>
                                    <ul>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                       <li><a href="#">list</a></li>
                                    </ul>
                                 </div>
                                 <div class="list_itemSub">
                                    <img src="../img/imgg/tshir-tm.png" alt="">
                                 </div>
                              </div>
                           </li>
                           <li class="navItems">
                              <a href="#">Books</a>
                           </li>
                           <li class="navItems">
                              <a href="#">Electronics</a>
                           </li>
                           <li class="navItems">
                              <a href="#">Household</a>
                           </li>
                           <li class="navItems">
                              <a href="#">Decoration</a>
                           </li>
                           <li class="navItems">
                              <a href="#">Furniture</a>
                           </li>
                           <li class="navItems">
                              <a href="#">Stationary</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <!-- menu end here -->
               <div class="topHeaderItem item-right">
                  <div class="d-block d-lg-none">
                     <!-- <a href="#"><i class="fa fa-search"></i></a> -->
                     <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                     <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                  </div>
                  <div class="mobile-menu-triggerTop">
                     <span></span>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header end -->
      <script>
         const menu = document.querySelector('.menu');
         const mainMenu = menu.querySelector('.menu-main');
         const goBack = menu.querySelector('.go-back');
         const menuTrigger = document.querySelector('.mobile-menu-triggerTop');
         const closeMenu = menu.querySelector('.mobile-menu-close');
         let subMenu;
         mainMenu.addEventListener("click",(e) =>{
             if(!menu.classList.contains("Menuactive")){
                 return;
             }
            if(e.target.closest(".menu-item-has-children")){
                const hasChildren = e.target.closest(".menu-item-has-children");
                console.log(hasChildren);
                showSubMenu(hasChildren);
             }
         });
         
         goBack.addEventListener("click",()=>{
             hideSubMenu();
         });
         menuTrigger.addEventListener("click",()=>{
             toggleMenu();
         });
         
         closeMenu.addEventListener("click",()=>{
             toggleMenu();
         });
         
         document.querySelector(".menu-overlay").addEventListener("click",()=>{
             toggleMenu();
         })
         
         function toggleMenu(){
             menu.classList.toggle("Menuactive");
             document.querySelector(".menu-overlay").classList.toggle("Menuactive");
         }
         function showSubMenu(hasChildren){
               subMenu = hasChildren.querySelector(".sub-menu");  
               console.log(subMenu);
               subMenu.classList.add("Menuactive")
               subMenu.style.animation = "slideLeft 0.5s ease forwards"; 
               const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
               console.log(menuTitle);
         
               menu.querySelector(".current-menu-title").innerHTML= menuTitle
               menu.querySelector(".mobile-menu-head").classList.add("Menuactive")
         }
         
         
         function hideSubMenu(){
             subMenu.style.animation = "slideRight 0.5s ease forwards"; 
             setTimeout(()=>{
                 subMenu.classList.remove("Menuactive");
             },300);
               menu.querySelector(".current-menu-title").innerHTML="";
               menu.querySelector(".mobile-menu-head").classList.remove("Menuactive")
         }
         
         window.onsize = function(){
             if(this.innerWidth > 991){
                 if(menu.classList.contains("Menuactive")){
                     toggleMenu();
                 }
             }
         }
      </script>
      <script>
    
         // sideTab
         
         
         function openSlideMenu(){
           document.getElementById('menu').style.width = '120px';
           document.getElementById('navSlideContent').style.marginLeft = '10px';
         }
         function closeSideMenu(){
           document.getElementById('menu').style.width = '0px';
           document.getElementById('navSlideContent').style.marginLeft = '0px';
         }
           
      </script>
   </body>
</html>