<?php
    include 'config.php';
    include 'header.php'; 
    ?> 
    <div class="product-section content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-head">Search Results</h2>
                </div>
            </div>
            <section class="book">
        <div class="container">
            <h2 class="text-center">BOOK</h2>

            <?php 

                //SQL Query to Get  based on search keyword
                //$search = gian '; DROP database name;
                // "SELECT * FROM tbl_food WHERE title LIKE '%burger'%' OR description LIKE '%burger%'";
                $sql = "SELECT * FROM products WHERE pro_title LIKE '%$search%'" ;

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check whether food available of not
                if($count>0)
                {
                    //Food Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the details
                        $pro_id = $row['pro_id'];
                        $pro_tiletitle = $row['pro_title'];
                        $pro_price = $row['pro_price'];
                        $pro_desc = $row['pro_desc'];
                        $feature_image = $row['feature_image'];
                        ?>

                        <div class="book-box">
                            <div class="book-img">
                                <?php 
                                    // Check whether image name is available or not
                                    if($feature_image =="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/<?php echo $image_name; ?>" alt=" " class="img-responsive img-curve">
                                        <?php 

                                    }
                                ?>
                                
                            </div>

                            <div class="pro_desc">
                                <h4><?php echo $pro_title; ?></h4>
                                <p class="pro_price">$<?php echo $pro_price; ?></p>
                                <p class="pro_detail">
                                    <?php echo $pro_desc; ?>
                                </p>
                                <br>

                                <a href="#" class="btn btn-primary">Đặt hàng</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food Not Available
                    echo "<div class='error'>Book not found.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

                    
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php';

 ?>