<?php
    include_once("header.php");
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add students</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                        students
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter students Name</label>
                                            <input class="form-control" type="text" name="name"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Image</label>
                                            <input class="form-control" type="file" name="img"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Class</label>
                                            <input class="form-control" type="number" name="class"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Roll No</label>
                                            <input class="form-control" type="number" name="roll"/>
                                        </div>
                                           
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="submit">Submit </button>

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
