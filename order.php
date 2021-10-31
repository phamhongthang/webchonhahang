<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant website</title>
    <link rel="stylesheet" href="css/style.css">
</style>
</head>
<body>
<section class="navbar">
    <div class="container">
          <div class="logo">
              <a href="#" title ="Logo"></a>
              <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
              </a>
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
    <section class="food-search">
        <div class="container">
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="food-menu-img">
                        <img src="images/menu-pizza.jpg" alt="Chicken Hawain Pizza" class="img-responsive img-curve">
                    </div>
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                        <p class="food-price">$2.3</p>
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                    </div>
                </fieldset>
                <fieldset class="order-food">
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Pham Hong Thang" class="input-responsive" require>
                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 038934xxxxx" class="input-responsive" require>
                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. phamhongthang@gmail.com" class="input-responsive" require>
                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street,City,Country" class="input-responsive" ></textarea>
                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary cofirm-order">
                </fieldset>
            </form>
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