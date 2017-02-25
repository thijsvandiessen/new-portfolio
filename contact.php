<?php require('include/header.php');?>

<div class="row full-images">
	<div class="col-lg-12">
		<?php 
			$name = 'BOOTSTRAP portfolio';
			$email = $_POST['email'];
			$message = wordwrap($_POST['message'], 70, "\r\n");
			$from = "From: My portfolio <info@thijsvandiessen.nl>"; 
			$to = 'thijsvandiessen@gmail.com'; 
			$subject = 'Hi Thijs van Diessen';
			$human = $_POST['human'];
			$body = "From: $name\n E-Mail: $email\n Message:\n $message";
			if ($_POST['submit'] && $human == '4') {
				if (mail($to, $subject, $body, $from)) {
					echo "<center><h3>Thanks for your message, I will reply soon!</h3></center>";
				}
				else { 
					echo "<center><h3>Nope, not working, message not sent...</h3></center>"; 
				}
			}
			else if ($_POST['submit'] && $human != '4') {
				echo "<center><h3>Wrong answer <span class='label label-warning'>2 + 2 = 4</span></h3></center>";
			}
		?>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 textrow">
		<div class="page-header">
			<h1>Contact me</h1>
		</div>

		<div class="container">
			<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email" maxlength="80" required>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea name="message" class="form-control" id="message" placeholder="Your message" maxlength="10000" required></textarea>
				</div>
				<div class="form-group">
					<label for="human">Are you human? what is 2 + 2 =</label>
					<input name="human" class="form-control" id="human" placeholder="2 + 2 =" number>
				</div>
				<button name="submit" type="submit" value="Submit" class="btn btn-default">Sent me an email</button>
			</form>
		</div>
	</div>
</div>

<?php require('include/footer.php');?>
<script type="text/javascript" src="include/validation.js"></script>
