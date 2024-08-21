<?php
  include_once("navbar.php");
?>

<!-- fruit section -->

<section class="fruit_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <hr>
            <h2>
                Fresh Fruit
            </h2>
        </div>
    </div>

    <div class="container-fluid">


        <div class="fruit_container">
            <?php
      foreach($fruit as $w)
      {
    ?>
            <div class="box">
                <img src="../admin/upload/fruit/<?php echo $w->img;?>" width="50px" height="250px" />
                <div class="link_box">
                    <h5>
                        <?php echo $w->name ?>
                    </h5>
                    <a href="">
                        <h4 class="card-title text-truncate"><?php echo $w->name;?></h4>
                        <h4 class="card-title text-truncate"><?php echo $w->price;?> Per KG</h4>

                        Buy Now
                    </a>
                </div>
            </div>
            <?php
      }
?>
            <!-- <div class="box">
          <img src="images/f-2.jpg" alt="">
          <div class="link_box">
            <h5>
              Blueberry
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/f-3.jpg" alt="">
          <div class="link_box">
            <h5>
              Banana
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/f-4.jpg" alt="">
          <div class="link_box">
            <h5>
              Apple
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/f-5.jpg" alt="">
          <div class="link_box">
            <h5>
              Mango
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/f-6.jpg" alt="">
          <div class="link_box">
            <h5>
              Strawberry
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div> -->
        </div>
    </div>

</section>

<!-- end fruit section -->


<!-- info section -->

<section class="info_section layout_padding">
    <div class="container">
        <div class="info_logo">
            <h2>
                NiNom
            </h2>
        </div>
        <div class="info_contact">
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <img src="images/location.png" alt="">
                        <span>
                            Passages of Lorem Ipsum available
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img src="images/call.png" alt="">
                        <span>
                            Call : +012334567890
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img src="images/mail.png" alt="">
                        <span>
                            demo@gmail.com
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="info_form">
                    <form action="">
                        <input type="text" placeholder="Enter your email">
                        <button>
                            subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="info_social">
                    <div>
                        <a href="">
                            <img src="images/facebook-logo-button.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/twitter-logo-button.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/linkedin.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/instagram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- end info section -->


<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
    </p>
</section>
<!-- footer section -->


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>