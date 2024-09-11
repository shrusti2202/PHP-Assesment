<?php
    include_once("header.php");
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">TABLE EXAMPLES</h4>
                
            </div>
        </div>

                <!-- /. ROW  -->
            <div class="row">
                
                <div class="col-md-12">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>students Name</th>
                                            <th>Image</th>
                                            <th>class</th>
                                            <th>Roll no</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($students as $w)
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo $w->id;?></td>
                                                <td><?php echo $w->name;?></td>
                                                <td><img src="upload/students/<?php echo $w->img;?>" height="50px"/></td>
                                                <td><?php echo $w->class;?></td>
                                                <td><?php echo $w->roll;?></td>
                                                <td>
                                                    <a href="edit_students?editstudents=<?php echo $w->id;?>" class="btn btn-primary">Edit</a>
                                                    <a href="delete?dstudents=<?php echo $w->id;?>" class="btn btn-danger" >Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
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
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
