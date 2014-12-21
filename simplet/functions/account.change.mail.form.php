<?php

////	Account Change Mail Form Function
//
// Form for changing an accounts Mail.
//
////	TODO
// No "Cancel" Button

function Account_Change_Mail_Form() {

	global $Error, $Member_Mail;

	?>
		<form class="col span_1_of_1" action="" method="post">
			<h2>Change your Mail</h2>
			<?php
				if ( !empty($Error) ) {
					echo $Error;
				}
			?>
			<div class="section group">
				<div class="col span_1_of_3"><label for="mail"><h3>Mail</h3></label></div>
				<div class="col span_1_of_6"><br><?php echo Runonce_CSRF_Form(); ?></div>
				<div class="col span_1_of_2"><input type="email" name="mail" placeholder="<?php echo $Member_Mail; ?>" value="<?php echo $Member_Mail; ?>" required /></div>
			</div>
			<div class="section group">
				<div class="col span_1_of_3"><br></div>
				<div class="col span_1_of_6"><br></div>
				<div class="col span_1_of_2"><input type="submit" value="Change Mail" /></div>
			</div>
		</form>
		<div class="clear"></div>
	<?php

}