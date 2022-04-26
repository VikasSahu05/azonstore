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


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>azone store</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   
     <!-- OwlCarousel 2 css cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <!-- OwlCarousel 2 theme css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>  
        <!-- Link Swiper's CSS -->
        <link  rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>


    
 
    <link rel="stylesheet" href="./css/header.css">
    <!-- <link rel="stylesheet" href="./css/order.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fashion_page.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="../js/banner_Slider.js">
    <link rel="stylesheet" href="./css/product_slider.css">
    <link rel="stylesheet" href="./css/product_page.css">
       
    


</head>

<body>
    
<!-- contact header started -->
<div class="header-main">
      <div class="headet_top">
        <div class="logo">
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
                        <label id="setName">
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
                                <li class="item "><a href="userProfile.php?id=<?=$id?>"> <i class="fa fa-user-circle-o icon" aria-hidden="true"></i>My Profile</a></li>
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
                

                <li class="cart_box"> 
                    <a href="#cc"> 
                       <i class="fa fa-shopping-cart  " aria-hidden="true"></i>
                        <span class="cart_text">Cart</span>
                     </a>
                </li>
                <li class="cart_box"> 
                    <a class="cart_text" href="sellerPage.php"> 
                       seller
                     </a>
                </li>

                <li> <a href="#cart" > <i class="fa fa-user" aria-hidden="true"></i></a></li>
              </ul>
        </div>

    </div>
  </div>


  <!-- Login button -->

 
    <!-- ================== menu css started ============================ -->
    <!-- header start -->
    <header class="header fixed-top">
        <div class="container-fluide">
            <div class="wrapper">
                <div class="bar_icone">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="menu-overlay"></div>
                <nav class="menu">
                    <div class="close-icons">
                        <div class="back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        
                        <div class="menu-close">&times;</div>
                    </div>
                    <ul class="mega_menu">

                      <li class="menu-item-children">
                        <a href="#">All categry<i class="fa fa-angle-down" id="angle_down" aria-hidden="true"></i></a>
                        <div class="text-center sub-menu mega-menu mega-menu-col-4 fashion-mega-menu-col-4 ">
                            <div class="list-item first-list-item">
                                <h3 class="title">categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>

                            <div class="list-item first-list-item">
                                <h3 class="title"> categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>

                             <div class="list-item first-list-item">
                                <h3 class="title"> categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>
                            <div class="list-item first-list-item">
                                <h3 class="title">categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>
                            <div class="list-item first-list-item">
                                <h3 class="title">categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>



                    <!-- <li>
                        <a href="index">Home</a>
                    </li> -->



                    <li class="menu-item-children" id="menu-item-children">
                        <a href="#">Fashion<i class="fa fa-angle-down" id="angle_down" aria-hidden="true"></i></a>
                        <div class="text-center sub-menu mega-menu mega-menu-col-4 fashion-mega-menu-col-4 ">
                            <div class="list-item first-list-item">
                                <h3 class="title"> categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>

                            <div class="list-item first-list-item">
                                <h3 class="title"> categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>

                             <div class="list-item  first-list-item">
                                <h3 class="title"> categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>
                            <div class="list-item first-list-item">
                                <h3 class="title">categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>
                            <div class="list-item first-list-item">
                                <h3 class="title">categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>
                            <div class="list-item first-list-item" id="list-item-margin">
                                <h3 class="title"> categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>

                            </div>

                            <div class="list-item first-list-item" id="list-item-margin">
                                <h3 class="title"> categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>

                            </div>

                            <div class="list-item first-list-item" id="list-item-margin">
                                <h3 class="title"> categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>

                            </div>

                            <div class="list-item  first-list-item">
                                <h3 class="title"> categry </h3>
                                <ul >
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>


                            <div class="list-item  first-list-item">
                                <h3 class="title"> categry </h3>
                                <ul>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                    <li><a href="#">submenu</a></li>
                                </ul>
                            </div>                            
                        </div>
                    </li>

                    <!-- <li><a href="#">womens <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
        
                    <li> <a href="#">Kids</a> </li>
                    <li> <a href="#">sports wear</a></li> -->

                    <li><a href="#">grocery</a></li>

                    <li> <a href="#">books</a></li>

                    <li><a href="#">electronics</a></li>
                    <li><a href="#">household</a></li>
                    <li><a href="#">decoration</a></li>
                    <li><a href="#">furniture</a></li>
                    <li><a href="#">stationary</a></li>
                    <li><a href="#">devotion</a></li>

                        </div>
                    </li>

                    </ul>
                </nav>

            </div>
        </div>
    </header>


    <script src="../js/banner_slider.js"></script>
    <script type="text/javascript" src="../js/fashion.js"></script>
    <script type="text/javascript" src="../js/cities.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

    <script>
        AOS.init();
    </script>
    <script>
        function signUp(){

        }
    </script>