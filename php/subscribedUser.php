<?php
include("db.php");
session_start();


$today = date("y-m-d");

if (isset($_POST['submit'])) {
    $uname = $_POST['name'];
    $Quantity = $_POST['quantity'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $Number = $_POST['number'];
    $sub_date = $_POST['date'];

    $query = "INSERT INTO `orders`(O_ID, O_DATE, O_VOLUME,PRICE, DELEVERY_DATE, CUSTOMER_NAME, CONTACT_NO, ADDRESS, SR_ID,O_STATUS) VALUES ('','" . $today . "','" . $Quantity . "','100.00','" . $sub_date . "','" . $uname . "','" . $Number . "','" . $Address . "','Not Set','pending')";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("NO query");
        echo " <script> alert('email is alredy taken plese try anothe email')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../vendors/css/normalize.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vendors/css/7.1 Grid.css">
    <link rel="stylesheet" href="../vendors/css/ionicons.min.css">
    <link rel="stylesheet" href="../Resource/css/header.css">
    <link rel="stylesheet" href="../Resource/css/unsubuser.css">
    <link rel="stylesheet" href="../Resource/css/animation.css">
    <link rel="stylesheet" href="../Resource/css/commenCssForUSubscribedAndSubscribed.css">
    <link rel="stylesheet" href="../Resource/css/subscribedUser.css">
    <!--   <link rel="stylesheet" href="../sample/s1.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../Resource/css/ordrPopup.css">
</head>

<body>
    <header>
        <div class="slider">
            <div class="load">
            </div>
            <div class="containt">
                <nav>
                    <div class="row">
                        <div class="Hlogo">
                            <a href="home.php">
                                <img src="../Resource/image/logo.png" alt="logo" class="logo" width="200px">
                            </a>
                        </div>
                        <ul class="main-nav">

                            <li> <a href="../php/login.php"> log out</a> </li>
                            <li> <a href="#section-city"> subscribe package</a> </li>
                            <li> <a href="#order"> place order</a> </li>
                        </ul>
                    </div>
                </nav>
                <div class="hero-text-box">
                    <div class="text-hero">
                        <h1>Goodbye Milk Powder. <br> Hello super healthy life.</h1>
                    </div>

                    <a class="btn btn-full" href="#order"> Order Now</a>

                </div>


    </header>

    <section class="section-f animation" id="">
        <div class="row">
            <h2>Get food fast &mdash; Not fast food</h2>
            <p class="para1">
                Hello, we???re Milky, your new premium milk delivery service. We know you???re always busy. No you want fresh milkj every day. So let us take care of that, we???re really good at it, we promise!
            </p>
        </div>

        <div class="row">
            <div class="col  span_1_of_4 box">
                <i class="ion-ios-infinite-outline icon-big"></i>
                <h3> Up to 365 days/year</h3>
                <p>
                    Never get milk powder again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                </p>
            </div>
            <div class="col span_1_of_4 box">
                <i class="ion-ios-stopwatch-outline icon-big"></i>
                <h3> Your bell will be ring At 6 A.M</h3>
                <p>
                    methnt m,okk hri typ krl dnn onaaaaaaaaaaaa
                </p>
            </div>
            <div class="col span_1_of_4 box">
                <i class="ion-ios-nutrition-outline icon-big"></i>
                <h3> 100% organic</h3>
                <p>
                    100% fresh milk. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                </p>
            </div>
            <div class="col span_1_of_4 box">
                <i class="ion-ios-cart-outline icon-big"></i>
                <h3> Order anything</h3>
                <p>
                    We don't limit your creativity, which means you can order whatever you feel like. It's up to you!
                </p>
            </div>
        </div>
    </section>

    <section class="section-step animation">
        <div class="row ">
            <h2 class="help-hedding">Frequently Asked Questions</h2>
        </div>
        <div class="col span_1_of_2 hlp-img">
            <img src="../Resource/image/qa img.jpg" class="app-screen">
        </div>
        <div class="row">
            <div class="q-hedding">
                <button onclick="myFunction1()" class="dropbtn">1.&nbsp; How do I place an order?</button>
                <div id="myDropdown1" class="dropdown-content">
                    <p>You simply scroll dwon and click the button order now or subscribe the plane after that you can include your delivery details.</p>
                </div>
            </div>
            <div class="q-hedding">
                <button onclick="myFunction2()" class="dropbtn">2.&nbsp; Is there a minimum order volume?</button>
                <div id="myDropdown2" class="dropdown-content">
                    <p>Yes. The minimum order volume is 1 liter.</p>
                </div>
            </div>

            <div class="q-hedding">
                <button onclick="myFunction3()" class="dropbtn">3.&nbsp;When will my order be delivered?</button>
                <div id="myDropdown3" class="dropdown-content">
                    <p>Our teams are working their best to ensure all orders are delivered within 3 days after order confirmation
                    </p>
                </div>
            </div>

            <div class="q-hedding">
                <button onclick="myFunction4()" class="dropbtn">4.&nbsp;How do I check if my order is confirmed?
                </button>
                <div id="myDropdown4" class="dropdown-content">
                    <p>You will receive an email confirmation of your order.</p>
                </div>
            </div>

            <div class="q-hedding">
                <button onclick="myFunction5()" class="dropbtn">5.&nbsp;how much for delivery?</button>

                <div id="myDropdown5" class="dropdown-content">
                    <p>No delivery charge</p>
                </div>
            </div>
            <!-- <div class="q-hedding">
                <button onclick="myFunction5()" class="dropbtn">5.&nbsp;What is the cost for delivery?</button>

                <div id="myDropdown5" class="dropdown-content">
                    <p>No delivery charge</p>
                </div> -->
        </div>

        </div>
    </section>

    <section class="section-city animation" id="section-city">
        <div class="row">
            <h2> We're currently in these cities</h2>
        </div>
        <div class="row">
            <div class="col span_1_of_4 box ">
                <img src="resources/img/mlik1%20(1).jpg" alt="Labuduwa">
                <h3>Labuduwa</h3>
                <div class="city-feture">
                    <i class="ion-ios-person icon-small"></i> 600+ happy customers
                </div>
                <div class="city-feture">
                    <i class="ion-ios-star icon-small"></i> 60+ top farmers
                </div>
                <div class="city-feture">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#" class="a"> @mmm_Labuduwa</a>
                </div>
            </div>

            <div class="col span_1_of_4  box">
                <img src="resources/img/mlik1%20(1).jpg" alt="San Francisco">
                <h3>San Francisco</h3>
                <div class="city-feture">
                    <i class="ion-ios-person icon-small"></i> 1700+ customers
                </div>
                <div class="city-feture">
                    <i class="ion-ios-star icon-small"></i> 160+ top farmers
                </div>
                <div class="city-feture">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#" class="a"> @omnifood_sf</a>
                </div>
            </div>

            <div class="col span_1_of_4  box ">
                <img src="resources/img/mlik1%20(1).jpg" alt=" Berlin">
                <h3> Berlin</h3>
                <div class="city-feture ">
                    <i class="ion-ios-person icon-small"></i> 1300+ customers
                </div>
                <div class="city-feture">
                    <i class="ion-ios-star icon-small"></i> 110+ top farmers
                </div>
                <div class="city-feture">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#" class="a">@omnifood_berlin</a>
                </div>
            </div>

            <div class="col span_1_of_4  box ">
                <img src="resources/img/mlik1%20(1).jpg" alt=" London">
                <h3> London</h3>
                <div class="city-feture">
                    <i class="ion-ios-person icon-small"></i> 1200 customers
                </div>
                <div class="city-feture">
                    <i class="ion-ios-star icon-small"></i> 50+ top farmers
                </div>
                <div class="city-feture">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#" class="a"> @omnifood_london</a>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe-package animation">
        <h2>Pkackage details</h2>
        <div class="package-details">

            <h3>you have been subscribe package</h3>
            <h3>it will be exprie on :</h3>
            <!-- expride date ek disply krnna krnna -->
            <h4>please contact to the distribution center to change the plan</h4>
        </div>
        <div class="package-image"> <img src="../Resource/image/dis-lorry.jpg" alt=""> </div>

    </section>




    <section id="order">
        <div class="row">
            <h2>palce your order </h2>
        </div>

        <div class="row">

            <div class="col span-1-of-2">

                <div class="detail-box">

                    <div class="row">
                        <div>
                            <img src="../Resource/image/clickme.gif" alt="">
                        </div>
                        <div>
                            <h3>Click Here To Place Custom Orders</h3>





                        </div>


                        <div class="btn-in-vet">

                            <a class="btn popup-btn">place order</a>

                        </div>




                        <div class="popup-view">
                            <div class="popup-card">
                                <a><i class="btn fas fa-times close-btn"></i></a>

                                <div class="info">
                                    <h2> We're happy to hear from you</h2>




                                    <div class="row">
                                        <form action="#" method="post" class="contact-form" onsubmit="validateFormOarder()" name="myForm">
                                            <div class="row">
                                                <div class="col span-1-of-3">
                                                    <label for="name">Name</label>
                                                </div>
                                                <div class="col span-2-of-3">
                                                    <input type="text" name="name" id="name" placeholder="Your name" value="<?php echo $_SESSION['u_name']; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col span-1-of-3">
                                                    <label for="Email">Email</label>
                                                </div>
                                                <div class="col span-2-of-3">
                                                    <input type="Email" name="Email" id="Email" placeholder="Your Email" value="<?php echo  $_SESSION['U_email']; ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col span-1-of-3">
                                                    <label for="Address">Address</label>
                                                </div>
                                                <div class="col span-2-of-3">
                                                    <textarea name="Address" id="Address" cols="30" rows="10" placeholder="Address"><?php echo $_SESSION['u_address']; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col span-1-of-3">
                                                    <label for="mobile number">mobile number</label>
                                                </div>
                                                <div class="col span-2-of-3">
                                                    <input type="text" name="number" id="number" placeholder="mobile number" value="<?php echo $_SESSION['u_mobile']; ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col span-1-of-3">
                                                    <label for="quantity">Quantity</label>
                                                </div>
                                                <div class="col span-2-of-3">
                                                    <input type="numaric" name="quantity" id="quantity" placeholder="quantity">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col span-1-of-3">
                                                    <label for="date">Submition Date</label>
                                                </div>
                                                <div class="col span-2-of-3">
                                                    <input style="width:100%; padding: 7px;" type="date" name="date" id="date" placeholder="date">
                                                </div>
                                            </div>







                                            <div class="row">
                                                <div class="col span-1-of-3">
                                                    <label>&nbsp;</label>
                                                </div>
                                                <div class="col span-2-of-3">
                                                    <input type="submit" name="submit" value="send it !">
                                                </div>
                                            </div>
                                        </form>
                                    </div>





                                </div>
                            </div>
                        </div>


                    </div>

                </div>




    </section>

    <section class="section-imotional animation " id="section-imotional">
        <div class="row">
            <h2> Our customers can't live without us </h2>
        </div>
        <div class="col span-1-of-3 ">
            <blockquote>
                Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                <cite> <img src="../Resource/image/profile pic cus.png" alt="cus1"> Alberto Duncan </cite>
            </blockquote>
        </div>
        <div class="col span-1-of-3 ">
            <blockquote>
                Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                <cite> <img src="../Resource/image/profile pic cus.png" alt="cus2"> Joana Silva </cite>
            </blockquote>
        </div>
        <div class="col span-1-of-3">
            <blockquote>
                I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                <cite> <img src="../Resource/image/profile pic cus.png" alt="cus1"> Milton Chapman </cite>
            </blockquote>
        </div>
    </section>

    <script src="../Resource/js/QAanimation.js"></script>
    <script src="../Resource/js/animationHomeElements.js"></script>
    <script src="../Resource/js/popup.js"></script>
</body>

</html>

<?php include("footer.php"); ?>