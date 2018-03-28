<?php include('include/newheader.php'); ?>


	<section class="main-container">
		<div class="main-wrapper">
			<h2>Student Attendance Management System</h2>
			<?php if (isset($_SESSION['login'])) { ?>

				<div class="alert alert-danger message-form" >
					  
					  <?php echo $_SESSION['login'];
			   		   unset($_SESSION['login']);
			   		  ?>
			    </div>

				 <?php	} ?>

		</div>

	</section>


<?php include("include/footer.php") ?>