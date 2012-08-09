<?php

$title='Contact';
$page = 'contact';
include 'includes/wrapper-top.php';

$errors = array();
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$notes =filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
$erika = 'Erika Balarezo';
$erikaemail = 'erikabalarezo@yahoo.com';
$confirmmessage = 'Your message has been sent.';
$mailsubject = 'PunchDesign enquire';
$formOk = false;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(empty($name)) {
		$errors['name'] = true;
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = true;
	}
	if(empty($notes)) {
		$errors['notes'] = true;
	}	
	if(empty($errors)) {
		echo 'Thank you, your message has been submitted!';
		$formOk= true;
		$headers = 'From: ' . $erika . ' <' . $erikaemail . '>';
		mail($email, $mailsubject, $confirmmessage, $headers); 
		
	}
	
}
?>
    <div class="content allcontact">
	    <h2>Contact</h2>
    	
           
		   <div class="message">
		   
            <h3 class="titles">Send a Message</h3>
			<?php if (!$formOk) : ?>
			<form method= "post" action="contact.php">
				<div>
					<label for="name">Name <?php if(isset($errors['name'])): ?>
						<strong class="error">is required</strong>
						<?php endif;?>
					</label>
					<input type="text" id="name" name="name" required value="<?php echo $name; ?>">
				</div>
					
				<div>
					<label for="email">E-mail Address<?php if (isset($errors['email'])) : ?><strong class="error"> is required</strong><?php endif; ?></label>
					<input id="email" name="email" value="<?php echo $email; ?>">
				</div>
				
				<div>
				<label for="notes">Notes<?php if (isset($errors['notes'])) : ?><strong class="error">No message</strong><?php endif; ?></label>
				<textarea id="notes" name="notes" value="<?php echo $notes;?>"></textarea>
				<!--<p>At least 25 characters long</p>-->
				</div>
                
				<button type="submit">Send</button>
			
			</form>
			<?php endif; ?>
        </div>
		
		<div class="emailcall">
		
			<div class="email">
			<h3 class="titles">Email</h3>
			<a href="#">erikabalarezo@yahoo.com</a>
			</div>
			
			<div class="call">
			<h3 class="titles">Or Give me a Call</h3>
			<p>613-736-7824</p>
			</div>
		</div>
	</div><!--end of class content-->
<?php
include 'includes/wrapper-bottom.php';
?>