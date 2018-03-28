<?php include('include/newheader.php'); ?>
<?php include('include/init.php');


 ?>


	<section class="main-container">
		<div class="main-wrapper">
			<h2>Signup</h2>
				<?php if (isset($_SESSION['message'])) { ?>

				<div class="alert alert-danger message-form" >
					  
					  <?php echo $_SESSION['message'];
			   		   unset($_SESSION['message']);
			   		  ?>
			    </div>

				 <?php	} ?>
				<form class="signup-form" action="signup.inc.php" method="POST">
				<input type="text" name="first_name" placeholder="First Name">
				<input type="text" name="last_name" placeholder="Last Name">
				<input type="text" name="username" placeholder="username">
				<input type="text" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<input type="password" name="confirm_password" placeholder="Confirm Password">
				<button type="submit" name="submit">Sign Up</button>
			</form>
		</div>

	</section>


<?php include("include/footer.php") ?>