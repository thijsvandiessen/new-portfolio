<<<<<<< HEAD
<?php
	require('include/header.php');

	//page content
?>

<div class="row full-images">
	<div class="col-lg-12">
		<h1>
			<?php 
			
				$name = 'BOOTSTRAP portfolio 1';
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

<div class="row imagebox">
		<div class="col-lg-4 col-sm-4">
			<img class="img-fluid" src="img/profile.jpg" alt="My profile picture">
		</div>
		<div class="col-lg-4 col-sm-4 col-xs-6">
			<img class="img-fluid" src="img/playing.jpg" alt="Playing double bass">
		</div>
		<div class="col-lg-4 col-sm-4 col-xs-6">
			<img class="img-fluid" src="img/surfing.jpg" alt="Surfing">
		</div>
</div>

<div class="row">
	<div class="col-lg-12 textrow">


		<div class="page-header">
			<h1>The present me</h1>
		</div>
		<p>I'm Thijs van Diessen, a recent design graduate looking for a big challenge.</p>

		<p>My skill set consists of designing experiences on screen and print, but in a broader way than just the visual design.</p>
		<p>I know the strengths and weaknesses of design processes and methods.</p>

		<p>Also I know how to:</p>

		<ul>
			<li>Use Adobe Photoshop</li>
			<li>Use Adobe Illustrator</li>
			<li>Use Adobe Indesign</li>
			<li>Use Adobe After Effects</li>
			<li>Prototype with different kinds of software</li>
			<li>Create websites with HTML, PHP, javascript and CSS</li>
			<li>Create websites with Frameworks like Bootstrap</li>
			<li>Create websites with Wordpress</li>
			<li>Work with the principles of IOS development</li>
		</ul>

		<p>When asking people around me, they tell me I'm marked by my creativity. I’m strong in the brainstorming process because of my associative thinking. I have a lot of experience with Photoshop, Illustrator and InDesign which I can use to visualise ideas. During my internship at the production company <a href="http://simpelmedia.tv" target="_blank">Simpel Media</a>, I also learned to work with Adobe After Effects, which I can now use to animate and create more depth in my visualisations.</p>

		<p>With my knowledge of designing interactions and experiences I can make simple prototypes with for example Adobe Experience Design, but also with Keynote and other prototyping apps. My aim is to be pixel perfect and work in a modular way, so that adjusting elements take as little time as possible. Furthermore, I can bring my designs to life with my knowledge of HTML, CSS, Javascript and PHP.</p>

		<div class="page-header">
			<h1>The future me</h1>
		</div>

		<p>In the future I want to be doing what I love. In my professional field this means designing awesome user experiences. With my creativity I like to help people, which is why I wanted to become a designer. In my job I want to help people communicate their ideas in a creative way, while being optimally efficient and impactful. In the meanwhile I'm always exploring new ideas in order to come to new creative insights. Every day I'm doing nothing less than my very best.</p>

		<div class="page-header">
			<h1>Contact me</h1>
		</div>

		<div class="container">

			<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

				<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email" maxlength="80" required>
=======
<?php require('include/header.php');?>
<div class="cover">
	<div class="cover-body">
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
					echo "<h1>Thanks for your message, I will reply soon!</h1>";
				}
				else {
					echo "<h1>Nope, not working, message not sent...</h1>";
				}
			}
			else if ($_POST['submit'] && $human != '4') {
				echo "<h1>Wrong answer</h1>";
			}
			else {
				echo "<h1>Contact me</h1>";
			}
		?>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 textrow">

		<div class="container">
			<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email" maxlength="80" required>
>>>>>>> refs/remotes/origin/master
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea name="message" class="form-control" id="message" placeholder="Your message" maxlength="10000" required></textarea>
				</div>
				<div class="form-group">
					<label for="human">Are you human? what is 2 + 2 =</label>
					<input name="human" class="form-control" id="human" placeholder="2 + 2 =" number>
				</div>
<<<<<<< HEAD
					<button name="submit" type="submit" value="Submit" class="btn btn-default">Send your message</button>
			</form>
		</div>




	</div>
</div>


<?php
	require('include/footer.php');
?>

<script type="text/javascript" src="include/validation.js"></script>
=======
				<button name="submit" type="submit" value="Submit" class="btn btn-default">Send me an email</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="include/validation.js"></script>
<?php require('include/footer.php');?>
>>>>>>> refs/remotes/origin/master
