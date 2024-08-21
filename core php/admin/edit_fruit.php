<?php
    include_once("header.php");
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add Fruits</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Fruits
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter Fruit Name</label>
                                            <input class="form-control" value="<?php echo $fetch->name;?>" type="text" name="name"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Image</label>
                                            <input class="form-control" value="<?php echo $fetch->img;?>" type="file" name="img"/>
                                            <img src="upload/fruit/<?php echo $fetch->img?>" width="50px">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Quantity(in kg)</label>
                                            <input class="form-control" value="<?php echo $fetch->quantity;?>" type="number" name="quantity"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Price(per kg)</label>
                                            <input class="form-control" value="<?php echo $fetch->price;?>" type="number" name="price"/>
                                        </div>
                                           
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="save">Save </button>

                                    </form>
                            </div>
                        </div>
                           

                       

        </div>
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2014 Yourdomain.com |<a href="http://www.binarytheme.com/" target="_blank"  > Designed by : binarytheme.com</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
