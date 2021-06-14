

   
   <section class="section product-detail">
    <div class="details container">
      <div class="left">
        <div class="main">
          <img src="./images/product1.jpg" alt="" />
        </div>
        <div class="thumbnails">
          <div class="thumbnail">
            <img src="./images/product2.jpg" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/AJ1.png" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/product4.jpg" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/product5.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="right">
        <span>Home/T-shirt</span>
        <h1>Bambi Print Mini Backpack</h1>
        <div class="price">$150</div>
        <form>
          <div>
            <select>
              <option value="Select Size" selected disabled>
                Select Size
              </option>
              <option value="1">32</option>
              <option value="2">42</option>
              <option value="3">52</option>
              <option value="4">62</option>
            </select>
            <span><i class="fas fa-chevron-down"></i></span>
          </div>
        </form>

        <form class="form">
          <input type="text" placeholder="1" />
          <a href="cart/index.php" class="addCart">Add To Cart</a>
        </form>
        <h3>Product Detail</h3>
        <p>
          100% Polyester <br>
----> Imported <br>
----> 15" shoulder drop <br>
----> Hand Wash <br>
THE MOST TRUSTED NAME IN BACKPACKS - Our belief in our packs is strong! Every JanSport comes with a lifetime warranty. Carry your JanSport with confidence, knowing we'll replace or repair any breaks
        </p>
      </div>
    </div>
    
    <div id="Paris" class="tabcontent bg-white">
 
   
    
								<div class="col-md-12">
							 
									<h6 class="uppercase space35" > Reviews for</h6>
									<ul class="comment-list">

<?php
  $sql_allReview = "SELECT * FROM reviews JOIN users ON users.id=reviews.uid";
        $result_allReview = mysqli_query($conn, $sql_allReview);
                                
         if (mysqli_num_rows($result_allReview) > 0) {
                                     
                                    while($row_nameEmail = mysqli_fetch_assoc($result_allReview)) {
?>
	<li> 
											<div class="comment-meta">
											    	<a href="#">   <?php echo $row_nameEmail['firstname'] ?></a>
												<span>
												    <em><?php echo $row_nameEmail['timestamp'] ?></em>
                                                </span>
<p><?php echo $row_nameEmail['review'] ?></p>
                                            </div> 
                                        </li>
  

<?php
}
                                    }
?>


								 
									
                                  
								 
									</ul>
								 
                                   
                                    

<?php
 $proid = $_GET['uid'];
 if(isset($_SESSION['customerid'])){
     $c_id = $_SESSION['customerid']; 
$sql_count = "SELECT * FROM reviews where pid='$proid' AND uid='$c_id '";
$result_count = mysqli_query($conn, $sql_count);
if (mysqli_num_rows($result_count) > 0) { 

echo '<h3 class="text-center">You Already Submitted Review for this product</h3>' ;
}else{
?>


<h6 class="uppercase space20">Add a review</h6>
									<form id="form" class="review-form" method="post">
                                 <?php
                                    
                                    $name  ='' ;
                                    $email  ='' ;

                                 if(isset($_SESSION['customerid'])){
                                    $c_id = $_SESSION['customerid']; 
                                    $sql_nameEmail = "SELECT users.email, user_data.firstname, user_data.lastname FROM users JOIN user_data ON users.id=user_data.userid AND user_data.userid = '$c_id'";
                                    $result_nameEmail = mysqli_query($conn, $sql_nameEmail);
                                
                                 if (mysqli_num_rows($result_nameEmail) > 0) { 
                                     $row_nameEmail = mysqli_fetch_assoc($result_nameEmail);
                                      $name = $row_nameEmail['firstname'] ." ". $row_nameEmail['lastname']  ;
                                      $email = $row_nameEmail['email'];
                                    }
                                }
                                 
                                 ?>
										<div class="row">
											<div class="col-md-6 space20">
												<input name="name" value='<?php echo  $name ?>' class="form-control" placeholder="Name *"  required="" type="text" <?php if($name != ''){echo 'disabled';} else{echo " ";}    ?> >
											</div>
											<div class="col-md-6 space20">
												<input name="email" value='<?php echo  $email ?>' class="form-control" placeholder="Email *" required="" type="text"  <?php if($email != ''){echo 'disabled';} else{echo " ";}  ?> >
											</div>
										</div>
								 
										<div class="space20 mt-2">
											<textarea name="review" id="text" class="input-md form-control" rows="6" placeholder="Add review.." maxlength="400"></textarea>
										</div>
										<button type="submit" name='submit' class="btn btn-primary  mt-2">
										Submit Review
                                        </button>
                                        <?php echo $message  ?>
                                    </form>
                                    <?php
                                    }
                                }
                                    
                                    ?>
								 
								</div>
							 
						 
</div>

    
    
    
    
    
    
  </section>