<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="navbar">
        <div class="container">
          <div class="logo">
              <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
          </div>
          <div class="menu text-right">
            <ul>
                <li><a href="Home.php">Home</a></li>  
                <li><a href="categories.php">Categories</a></li>
                <li><a href="foods.php">Foods</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div clas="clearfix"></div>
        </div>
    </section>
    <section class="food-search text-center">
        <div class="container">
            <form action="">
                <input type="search" name ="search" placeholder="Search for Food..">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
      </div>
    </section>
    <section class="categories">
    <div class="container">
    <h2 class="text-center">Explore Foods</h2>
    <a href="#">
        <div class="box-3 float-container">
            <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">
            <h3 class="float-text text-white">Pizza</h3>
        </div>
    </a>
    <a href="#">
        <div class="box-3 float-container">
        <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">
            <h3 class="float-text text-white">Burger</h3>
        </div>
    </a>
    <a href="#">
        <div class="box-3 float-container">
        <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">
            <h3 class="float-text text-white">Momo</h3>
        </div>
    </a>
        <div class="clearfix"></div>
    </div>
    </section>
    <section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>
        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/menu-pizza.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
            </div>
            <div class="food-menu-desc">
                <h4>Food Title</h4>
                <p class="food price">$2.3</p>
                <p class="food-detail">
                   Made with Italian Sauce,Chicken,and organice vegetable.
                </p>
                <br>
                <a href="order.php" class="btn btn-primary">Order Now</a>
            </div>
        </div>
            <div class="food-menu-box">
               <div class="food-menu-img">
                   <img src="images/menu-burger.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
               </div>
               <div class="food-menu-desc">
                   <h4>Smoky Burger</h4>
                   <p class="food price">$2.3</p>
                   <p class="food-detail">
                       Made with Italian Sauce,Chicken, and organice vegetables.
                   </p>
                   <br>
                   <a href="order.php" class="btn btn-primary">Order Now</a>
               </div>
            </div>
            <div class="food-menu-box">
               <div class="food-menu-img">
                   <img src="images/menu-burger.jpg" alt="Chicken Hawain Momo" class="img-responsive img-curve">
               </div>
               <div class="food-menu-desc">
                   <h4>Nice Burger</h4>
                   <p class="food price">$2.3</p>
                   <p class="food-detail">
                       Made with Italian Sauce,Chicken, and organice vegetables.
                   </p>
                   <br>
                   <a href="order.php" class="btn btn-primary">Order Now</a>
               </div>
            </div>
            <div class="food-menu-box">
               <div class="food-menu-img">
                   <img src="images/menu-pizza.jpg" alt="Chicken Hawain Momo" class="img-responsive img-curve">
               </div>
               <div class="food-menu-desc">
                   <h4>Food Ttltle</h4>
                   <p class="food price">$2.3</p>
                   <p class="food-detail">
                       Made with Italian Sauce,Chicken, and organice vegetables.
                   </p>
                   <br>
                   <a href="order.php" class="btn btn-primary">Order Now</a>
               </div>
            </div>
            <div class="food-menu-box">
               <div class="food-menu-img">
                   <img src="images/menu-pizza.jpg" alt="Chicken Hawain Momo" class="img-responsive img-curve">
               </div>
               <div class="food-menu-desc">
                   <h4>Food Title</h4>
                   <p class="food price">$2.3</p>
                   <p class="food-detail">
                       Made with Italian Sauce,Chicken, and organice vegetables.
                   </p>
                   <br>
                   <a href="order.php" class="btn btn-primary">Order Now</a>
               </div>
            </div>
            <div class="food-menu-box">
               <div class="food-menu-img">
                   <img src="images/menu-momo.jpg" alt="Chicken Hawain Momo" class="img-responsive img-curve">
               </div>
               <div class="food-menu-desc">
                   <h4>Chicken Steam Momo</h4>
                   <p class="food price">$2.3</p>
                   <p class="food-detail">
                       Made with Italian Sauce,Chicken, and organice vegetables.
                   </p>
                   <br>
                   <a href="order.php" class="btn btn-primary">Order Now</a>
               </div>
            </div>
        <div class="clearfix"></div>
     </div>
    </section>
    <section class="social">
    <div class="container text-center">
        <ul>
            <li><a href="#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></a></li>
            <li><a href="#"><img src="https://img.icons8.com/office/48/000000/instagram-new.png"/></a></li>
            <li><a href="#"><img src="https://img.icons8.com/fluency/48/000000/twitter.png"/></a></li>
        </ul>
     </div>
    </section>
    <section class="footer">
    <div class="container text-center">
        <p>All rights reserved.Designed by <a href="#">Pham Hong Thang</a></p>
     </div>
    </section>
</body>
</html>