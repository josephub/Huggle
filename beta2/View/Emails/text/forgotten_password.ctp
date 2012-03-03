	Hi <?php echo $user['username']; ?>,

	Someone (hopefully you) has requested a password reset on your account. In order to reset your password please click on the link below:

	<?php echo $this->Html->link('Reset your password', Router::url(array('action' => 'forgotten_password', 'password_reset' => $user['password_reset']), true)); ?>

	Regards,
	MyDomain.com Staff
