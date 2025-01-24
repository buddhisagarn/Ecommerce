<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon.com. Spend less. Smile more</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon_amazon.png">
    <link rel="stylesheet" href="../stylesheets/one.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../stylesheets/login.css">
    <script>
        function validate(){
            let x = document.forms['myform']['email-name'].value;
            if(!x)
        {
            alert("Please Enter email or phone for continue");
            return false;
           }   if(x==/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)
        {
            alert("congrats")
            return true;
        }
            let y = document.forms['myform']['password'].value;
            if(!y){
            alert("Please Enter password to continue");
            return false;
            }
            alert("login successfull. Press Ok to continue");
        }
        </script>
</head>

<body>
    <!-- Navigation bar starts-->
    <nav>
        <header class="nav-top-header">

            <!-- First part of nav bar-->
            <div class="nav-header-items items1">

                <!--first logo of the amazon-->
                <a href="./index.php" class="logo-container nav-items-border">
                    <img src="../images//favicon_amazon2.png" alt="Logo Image">
                </a>
                <!--  location and address class-->
                <div class="location nav-items-border">
                    <div class="icon-loc">
                        <i class="fa fa-map-marker "></i>

                    </div>
                    <div class="location-in">
                        <p style="display:flex" class="grey-in">Deliver to</p><b>Nepal</b>
                    </div>

                </div>

            </div>

            <!-- middle part of nav bar -->
            <div class="nav-header-items items2">

                <div class="nav-items-1">
                    <select class="search-items option-default">
                        <option value="0" class="option-one-top">All</option>
                        <option value="1" class="option-one">Arts and Crafts</option>
                        <option value="2" class="option-one">Auto motives</option>
                        <option value="3" class="option-one">Beauty and personal care</option>
                        <option value="4" class="option-one">Baby Fashion</option>
                        <option value="5" class="option-one">Sports</option>
                        <option value="6" class="option-one"></option>
                        <option value="7" class="option-one">All</option>
                        <option value="8" class="option-one">All</option>
                        <option value="9" class="option-one">All</option>
                        <option value="10" class="option-one">All</option>
                        <option value="11" class="option-one">All</option>
                        <option value="12" class="option-one">All</option>
                        <option value="13" class="option-one">All</option>
                        <option value="14" class="option-one">All</option>
                    </select>
                </div>


                <div class="nav-items-2">
                    <input placeholder="Search Amazon" class="search-items" style="width:100%; font-size: 1.1rem;">
                </div>


                <div class="nav-items-3">
                    <i class="fa fa-search ">
                    </i>
                </div>

            </div>



            <div class="nav-header-items items3">
                <div class="language-nav nav-items-border item3-items">
                    <div class="language-icon">
                        <i class='fas fa-flag-usa'></i>

                    </div>
                    <div class="language-name">
                        <select>
                            <option value="0">En</option>
                        </select>

                    </div>


                </div>
                <div class="sign-nav nav-items-border item3-items">
                    <div>
                        <p class="upper-sign-nav">Hello,sign in</p>
                    </div>
                    <div>
                        <p class="lower-sign-nav">Accounts & Lists</p>
                    </div>


                </div>
                <div class="orders-nav nav-items-border item3-items">
                    <p class="upper-sign-nav">returns &</p>
                    <p class="lower-sign-nav">Orders</p>

                </div>
                <div class="cart nav-items-border item3-items">
                    <div class="cart-icon-box">
                        <div>
                            <b style="color:rgb(255, 178, 34); font-size:15px; margin-left:9px;">0</b>
                        </div>
                        <div>
                            <i class="fa-solid fa-cart-shopping cart-icon"></i>
                        </div>
                    </div>

                    <div class="cart-word">
                        <p>cart</p>
                    </div>

                </div>
            </div>

        </header>
        <aside class="nav-bottom-header">
            <div class="nav-bottom-box menu-bar">
                <div><i class="fa-solid fa-bars"></i></div>
                <div>
                    <p><b>All</b></p>
                </div>
            </div>
            <div class="nav-bottom-box">
                <p>Today's Deals</p>
            </div>
            <div class="nav-bottom-box">
                <p>Customer Service</p>
            </div>
            <div class="nav-bottom-box">
                <p>Registry</p>
            </div>
            <div class="nav-bottom-box">
                <p>Gifts Cards</p>
            </div>
            <div class="nav-bottom-box">
                <P>Sell</P>
            </div>


        </aside>
    </nav>



    <section class="login-form">
        
           <div class="login-box">
            <div class="login-header">
            <p>Sign in</p>
</div>


               <div class="form-class">
                <form action="./action.php" method="POST" name="myform"><br>
                <label for="email-phone">Email or Phone number</label><br>
                <input type="email" name="email-name" placeholder="your email or phone">
                <br>
                <br>
                <label for="password">Password</label><br>
                <input type="password" name="password" placeholder="your password" ><br><br>
                <input type="submit" value="Continue" style="text-align:center;background-color:yellow;
                                                            border:none;" onclick="return validate()">
</form>


            <div class="terms">
            <p>By clicking Continuing you are agree to <a href="">terms and contidions</a> of our company</p>

            </div> 
            <hr class="login-hr">
            
           
           <div class="login-last">
            <p>New to Amazon </p><br>
            <a href ="./newlogin.php"><button>Create new Account </button><a>
</div>
        </div>
        </div> 

</section>

</body>
        </html>