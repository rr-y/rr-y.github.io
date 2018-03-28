 

 <?php include('include/header.php') ?>
 <?php include('include/init.php') ?>
 <?php include("include/nav.php") ?>
<body>

        <div class="container">

        <div class="row">
          <div class="col-sm-4">

          </div >
            <div class="col-sm-4" class="class-form">
               <h2>Add Class Details</h2>
           <?php if (isset($_SESSION['class'])) { ?>

                <div class="alert alert-danger message-form" >
                    
                    <?php echo $_SESSION['class'];
                       unset($_SESSION['class']);
                      ?>
                  </div>

           <?php  } ?>

           
                <form method="post" action="<?php addClass(); ?>" >

                    <div class="form-group">
                        Class ID : <input type="number" name="class_id" class="form-control" placeholder="ID" required >

                    </div>
                    <div class="form-group">
                        Name : <input type="text" name="class_name" class="form-control" placeholder="Class Name" required>

                    </div>

                    <div class="form-group">
                      Instructor  Name : <input type="text" name="instructor_name" class="form-control" placeholder="Instructor Name" required>

                    </div>
                    <div class="form-group">
                        Date : <input type="date" name="class_date" class="form-control" placeholder="YYYY-MM-DD" required>

                    </div>

                  <button> <input type="submit" class="btn btn-danger value="submit"> </button>

                  </form>

           </div>

           <div class="col-sm-4">

           </div>

        </div>

        <?php include("include/footer.php") ?>
